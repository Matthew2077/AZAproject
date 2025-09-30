<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $action = null;

        // $_POST = (formData multipart)
        if (isset($_POST['action'])) {
            $action = $_POST['action']; //upload
        }
        // fetch JSON, cerco nel body raw
        else {
            $input = json_decode(file_get_contents('php://input'), true);
            $action = $input['action'] ?? null; //grafici
        }


        switch ($action){
            case 'upload': //UPLOAD FILE JSON - elaborazione
                if (!isset($_FILES['jsonFile'])) {
                    throw new Exception('Nessun file ricevuto');
                }
                
                if ($_FILES['jsonFile']['error'] !== UPLOAD_ERR_OK) {
                    throw new Exception('Errore nel caricamento del file. Codice errore: ' . $_FILES['jsonFile']['error']);
                }

                $uploadDir = 'uploads/';
                if (!file_exists($uploadDir)) {
                    mkdir($uploadDir, 0755, true);
                }

                $fileName = basename($_FILES['jsonFile']['name']);
                $targetPath = $uploadDir . $fileName;

                if (!move_uploaded_file($_FILES['jsonFile']['tmp_name'], $targetPath)) {
                    throw new Exception('Errore durante il salvataggio del file');
                }

                $jsonContent = file_get_contents($targetPath);
                $data = json_decode($jsonContent, true);
                
                if ($data === null) {
                    throw new Exception('Il file non è un JSON valido');
                }

                // Funzione ricorsiva per contare ASIN ed EAN
                function countValues($array, $key) {
                    $count = 0;
                    $foundValues = [];
                    
                    array_walk_recursive($array, function($value, $k) use ($key, &$foundValues) {
                        if ($k === $key && !empty($value)) {
                            $foundValues[$value] = true;
                        }
                    });
                    
                    return count($foundValues);
                }

                // Funzione per contare prodotti Amazon
                function countAmazonProducts($array) {
                    $count = 0;
                    
                    array_walk_recursive($array, function($value, $k) use (&$count) {
                        if ($k === 'is_AMZ' && $value === 'Y') {
                            $count++;
                        }
                    });
                    
                    return $count;
                }

                // Funzione per estrarre i paesi univoci
                function extractCountries($array) {
                    $countries = [];
                    
                    if (!isset($array['body'])) {
                        return $countries;
                    }
                
                    foreach ($array['body'] as $product) {
                        if (isset($product['data']) && is_array($product['data'])) {
                            foreach ($product['data'] as $countryCode => $countryData) {
                                // Assumiamo che le chiavi siano i codici paese (es: 'DE', 'IT')
                                if (strlen($countryCode) === 2 && ctype_upper($countryCode)) {
                                    $countries[$countryCode] = true;
                                }
                            }
                        }
                    }
                    
                    return array_keys($countries);
                }

                $tot_asin = 0;
                $tot_ean = 0;

                foreach ($data['body'] as $code => $v) {
                    if (isset($v['summary']['ASIN']) && trim($v['summary']['ASIN']) != '') $tot_asin++; 
                    if (isset($v['summary']['EAN']) && trim($v['summary']['EAN']) != '') $tot_ean++; 
                }
                
                // Estrai i paesi
                $countries = extractCountries($data);
                
                // Estrai informazioni da JSON annidato
                $result = [
                    'success' => true,
                    'filename' => $fileName,
                    'file_info' => [
                        'asin_count' => $tot_asin,
                        'ean_count' => $tot_ean,
                        'countries' => $countries,
                        'total_products' => sizeof($data['body']),
                        'amazon_products' => countAmazonProducts($data),
                        'last_update' => date('Y-m-d H:i:s', filemtime($targetPath))
                    ]
                ];
                
                header('Content-Type: application/json');
                echo json_encode($result);
                exit;


            break;
            case 'grafici': // Due punti invece di punto e virgola
                $input = json_decode(file_get_contents('php://input'), true);
                
                // Verifica che i dati siano stati ricevuti
                if ($input === null) {
                    http_response_code(400);
                    echo json_encode(['error' => 'Dati JSON non validi']);
                    exit;
                }
                
                $country = $input['country'] ?? '';
                $output = $input['output'] ?? '';
                $filename = $input['filename'] ?? '';
                $KPI = $input['KPI'] ?? [];
                
                $params = [
                    "filename" => $filename,
                    "output" => $output,
                    "country" => $country,
                    "kpi" => $KPI
                ];
                
                // Crea file temporaneo per i parametri
                $temp_input = tempnam(sys_get_temp_dir(), 'aza_input_');
                file_put_contents($temp_input, json_encode($params));
                
                // Esegui lo script Python passando il path del file
                $cmd = "python C:/xampp/htdocs/AZA/AZAGrafici.py " . escapeshellarg($temp_input);
                
                // Debug: stampa il comando
                error_log("Comando eseguito: " . $cmd);
                error_log("File input: " . $temp_input);
                error_log("Contenuto file: " . file_get_contents($temp_input));
                
                // Esegui e cattura output ed errori
                $pyoutput = shell_exec($cmd . " 2>&1");
                
                // Pulisci il file temporaneo
                unlink($temp_input);
                
                // Debug: stampa l'output di Python
                error_log("Output Python: " . $pyoutput);
                
                if ($pyoutput === null || $pyoutput === '') {
                    http_response_code(500);
                    echo json_encode(['error' => 'Nessun output dallo script Python']);
                    exit;
                }
                
                // Prova a decodificare la risposta di Python
                $response = json_decode(trim($pyoutput), true);
                
                if ($response === null) {
                    // Se non è JSON valido, restituisci l'output raw
                    echo json_encode(['raw_output' => $pyoutput]);
                } else {
                    // Restituisci la risposta JSON di Python
                    echo json_encode($response);
                }
                
                break; // IMPORTANTE: break per uscire dal case
            case 'dettaglio';
                $input = json_decode(file_get_contents('php://input'), true);
                
                // Verifica che i dati siano stati ricevuti
                if ($input === null) {
                    http_response_code(400);
                    echo json_encode(['error' => 'Dati JSON non validi']);
                    exit;
                }
                
                $country = $input['country'] ?? '';
                $output = $input['output'] ?? '';
                $filename = $input['filename'] ?? '';
                $EAN = $input['EAN'] ?? [];
                
                $params = [
                    "filename" => $filename,
                    "output" => $output,
                    "country" => $country,
                    "EAN" => $EAN
                ];
                
                // Crea file temporaneo per i parametri
                $temp_input = tempnam(sys_get_temp_dir(), 'aza_input_');
                file_put_contents($temp_input, json_encode($params));
                
                // Esegui lo script Python passando il path del file
                $cmd = "python C:/xampp/htdocs/AZA/AZAGrafici.py " . escapeshellarg($temp_input);
                
                // Debug: stampa il comando
                error_log("Comando eseguito: " . $cmd);
                error_log("File input: " . $temp_input);
                error_log("Contenuto file: " . file_get_contents($temp_input));
                
                // Esegui e cattura output ed errori
                $pyoutput = shell_exec($cmd . " 2>&1");
                
                // Pulisci il file temporaneo
                unlink($temp_input);
                
                // Debug: stampa l'output di Python
                error_log("Output Python: " . $pyoutput);
                
                if ($pyoutput === null || $pyoutput === '') {
                    http_response_code(500);
                    echo json_encode(['error' => 'Nessun output dallo script Python']);
                    exit;
                }
                
                // Prova a decodificare la risposta di Python
                $response = json_decode(trim($pyoutput), true);
                
                if ($response === null) {
                    // Se non è JSON valido, restituisci l'output raw
                    echo json_encode(['raw_output' => $pyoutput]);
                } else {
                    // Restituisci la risposta JSON di Python
                    echo json_encode($response);
                }
                
            break;
            case 'PDF';
                //eseguire il python con le info necessarie



                //Ottenimento info da POST
                $nomecliente = $_POST['nomecliente'];
                $datareport = $_POST['datareport'];
                $country = $_POST['country'];
                $filename = $_POST['filename'];
                $ASIN = $_POST['ASIN'];
                $EAN = $_POST['EAN'];
                $AMZ = $_POST['AMZ'];
                $totaleprodotti = $_POST['totaleprodotti'];
                $KPI =["ASIN", "is_AMZ", "OFFERS", "NODE", "TEMPO_DI_CONSEGNA", "CAT", "MARGINE", "LISTA_TOP_X", "IDQ", "DETTAGLIO"];
                //MANDA INFO A CreaPDF_AZA.php
                
                $postData = [
                    "nomecliente" => $nomecliente,
                    "datareport" => $datareport,
                    "country" => $country,
                    "filename" => $filename,
                    "ASIN" => $ASIN,
                    "EAN" => $EAN,
                    "AMZ" => $AMZ,
                    "totaleprodotti" => $totaleprodotti,
                    "KPI" => $KPI
                ];

                // Converti in JSON
                $jsonData = json_encode($postData);


                
                $ch = curl_init(); //inizializza la richiesta
                //settings richiesta
                curl_setopt($ch, CURLOPT_URL, 'http://localhost/CreaPDF_AZA.php');
                curl_setopt($ch, CURLOPT_POST, true);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

                curl_setopt($ch, CURLOPT_HTTPHEADER, [
                    'Content-Type: application/json',
                    'Content-Length: ' . strlen($jsonData)
                ]);

                curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);//Invio

                // Esegui la chiamata
                $response = curl_exec($ch);

                // Gestisci errori
                if (curl_errno($ch)) {
                    echo 'Errore cURL: ' . curl_error($ch);
                }

                curl_close($ch);







                //ESECUZIONE PYTHON
                $params = [
                    "country" => $country,
                    "filename" => $filename,
                    "KPI" => $KPI,
                    "output" => 'G'
                ];

                // Esegui lo script Python
                $param_json = json_encode($params);
                $cmd = "CreaPDF_AZA.php " . escapeshellarg($param_json);



            break;
        }
        
    } catch (Exception $e) {
        http_response_code(400);
        header('Content-Type: application/json');
        echo json_encode(['error' => $e->getMessage()]);
        exit;
    }
} else {
    http_response_code(405);
    header('Content-Type: application/json');
    echo json_encode(['error' => 'Metodo di richiesta non valido']);
    exit;
}
