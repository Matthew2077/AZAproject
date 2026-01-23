<?php
include_once "vendor/autoload.php";
//require_once 'config.php';
//IMPORTANT INFO ------
$yourApiKey = ('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');
$client = OpenAI::client($yourApiKey);

set_time_limit(300);

/*
 https://platform.openai.com/docs/api-reference/assistants-streaming/events
    Eventi: ogni volta che succede qualcosa, fa un evento... interessante
*/
//1. Ottenimento file etc-------------------------

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!isset($_FILES['csvFile'])) {
            throw new Exception('Nessun file ricevuto');
        }
        
        if ($_FILES['csvFile']['error'] !== UPLOAD_ERR_OK) {
            throw new Exception('Errore nel caricamento del file. Codice errore: ' . $_FILES['csvFile']['error']);
        }

        $uploadDir = 'uploads/';
        if (!file_exists($uploadDir)) {
            mkdir($uploadDir, 0755, true);
        }

        $fileName = basename($_FILES['csvFile']['name']);
        $targetPath = $uploadDir . $fileName;

        if (!move_uploaded_file($_FILES['csvFile']['tmp_name'], $targetPath)) {
            throw new Exception('Errore durante il salvataggio del file');
        }

        $jsonContent = file_get_contents($targetPath);
        $data = json_decode($jsonContent, true);
        
        //DEBUG
        //echo "file arrivato!!";
        //print_r($fileName);



    //2. MANAGE FILE & CREATE ARRAY-------------------------
    try {


            $inputFile = $fileName; //'ebay_catalogo_SMF_20250623172428.csv';
            $outputFile = 'filtrato_2025.csv';

            // Array per contenere i nomi validi
            $nomiLunghi = [];

            if (($inputHandle = fopen($inputFile, 'r')) !== false) {
                $header = fgetcsv($inputHandle, 0, ';');
                
                // Trova gli indici delle colonne
                $selIndex = array_search('Sel', $header);
                $lenIndex = array_search('Len', $header);
                $insertIndex = array_search('Insert', $header);
                $nomeIndex = array_search('Nome', $header);

                if ($selIndex === false || $lenIndex === false || $insertIndex === false || $nomeIndex === false) {
                    die("Errore: alcune colonne richieste non sono state trovate.");
                }

                // Apri output CSV
                $outputHandle = fopen($outputFile, 'w');
                fputcsv($outputHandle, $header, ';'); // Scrivi intestazione

                while (($row = fgetcsv($inputHandle, 0, ';')) !== false) {
                    $sel = trim($row[$selIndex]);
                    $len = (int)($row[$lenIndex] ?? 0);
                    $insertDate = $row[$insertIndex] ?? '';

                    // Estrai anno da Insert (formato gg/mm/yyyy)
                    $year = substr($insertDate, 0, 4); // Prende i primi 4 caratteri

                    if ($len > 80 && $year === '2025' && strtoupper($sel) !== 'X') {
                        fputcsv($outputHandle, $row, ';'); // Scrivi nel CSV filtrato

                        // Aggiungi il valore di "Nome" all'array
                        $nomiLunghi[] = $row[$nomeIndex];
                        /*$nomiLunghi[] = [
                            'id' => $row[$idIndex],
                            'descrizione_originale' => $row[$nomeIndex]
                        ];
                        */
                    }
                }
                
                fclose($inputHandle);
                fclose($outputHandle);

                // Output opzionale dei nomi (puoi toglierlo o gestirlo diversamente)
                /*echo "<pre>";
                print_r($nomiLunghi);
                echo "</pre>";
                */

            } else {
                die("Errore: impossibile aprire il file.");
            }























        
        //3. Ciclo per inviare un messaggio per ogni descrizione-------------------------
        $descrizioniAccorciate = []; // Array dove salvare descrizioni accorciate
        


        //apri il file e aggiungi una colonna
        $ListNewDesc = []; // nuove descrizioni
        foreach ($nomiLunghi as $descrizioneOriginale) {
            //3.1 prompt-------------------------
            $prompt = <<<PROMPT
            Genera una nuova descrizione basata su queste regole per la descrizione che ti invio:
            1. Le descrizioni devono avere meno di 80 caratteri.
            2. Sostituisci le frasi lunghe con sinonimi più brevi.
            3. Usa abbreviazioni dove appropriato.
            

            Tutte le descrizioni devono essere in italiano.
                                    
            Descrizione originale:"$descrizioneOriginale"
            Risposta:
            PROMPT;

                try {
                    // manda messaggio
                        $response = $client->chat()->create([
                            'model' => 'gpt-4.1-nano-2025-04-14',
                            'messages' => [
                                ['role' => 'user', 'content' => $prompt],
                            ],
                        ]);


                        $response->id; // 'chatcmpl-6pMyfj1HF4QXnfvjtfzvufZSQq6Eq'
                        $response->created; // 1677701073
                        


                        



                        //cicla su tutte le descrizioni
                        foreach ($response->choices as $choice) {
                            $choice->index; // 0
                            $shortendesc = $choice->message->content; // contiene descrizione accoricata

                            
                            //verifica che la descrizione sia più corta di 80 caratteri
                            if (mb_strlen($shortendesc, 'UTF-8') > 80){
                                /*se maggiore - LOG PER DEBUG
                                echo '<br>';
                                echo "Descrizione originale: ";
                                echo '<br>';
                                print_r ($descrizioneOriginale);
                                echo '<br>';
                                    */

                                //$failed[] = $shortendesc;
                                

                                

                                //nuovo prompt per secondo messaggio
                                $Newprompt = <<<PROMPT
                                    Genera una nuova descrizione accorciata che deve avere meno di 80 caratteri.

                                    Tutte le descrizioni devono essere in italiano.
                                    
                                    Descrizione originale: "$shortendesc"
                                    Risposta:
                                    PROMPT;
                                //manda nuovo messaggio
                                $response = $client->chat()->create([
                                    'model' => 'gpt-4.1-nano-2025-04-14',
                                    'messages' => [
                                        ['role' => 'user', 'content' => $Newprompt],
                                    ],
                                ]);

                                $response->id;
                                $response->created;
                                //cicla sulla risposta 
                                foreach ($response->choices as $choice) {
                                    $choice->index; // 0
                                    $Newshortendesc = $choice->message->content; //descrizione nuova
                                    /*
                                    echo '<br>';
                                     echo "Descrizione fallita sistemata: ";
                                     echo '<br>';
                                    print_r ($Newshortendesc); 
                                    echo '<br>';

                                    */

                                    $ListNewDesc[] = $Newshortendesc;

                                    
                                }

                                continue;


                            } else {
                                /*se inferiore - LOG PER DEBUG
                                echo '<br>';
                                echo "descrizione accorciata";
                                echo '<br>';
                                echo $shortendesc;
                                echo '<br>';
                                */
                                $ListNewDesc[] = $shortendesc;
                               
                                continue;


                            }
                        }

                        
                        

//print_r ($ListNewDesc);


// CREA CSV FINALE
$finalCsv = 'output\descrizioni_finali.csv';

        // Apri il file filtrato
        if (($inputHandle = fopen($outputFile, 'r')) !== false) {
            $header = fgetcsv($inputHandle, 0, ';');

            // Aggiungi la nuova colonna al header
            $header[] = 'NuovaDescrizione';

            // Apri il file finale in scrittura
            $outputHandle = fopen($finalCsv, 'w');
            fputcsv($outputHandle, $header, ';'); // Scrivi intestazione

            $i = 0; // Indice per accedere a $ListNewDesc

            // Cicla sulle righe originali
            while (($row = fgetcsv($inputHandle, 0, ';')) !== false) {
                // Aggiungi la nuova descrizione se disponibile
                $row[] = $ListNewDesc[$i] ?? ''; // fallback se mancante
                $i++;
                fputcsv($outputHandle, $row, ';');
            }

            fclose($inputHandle);
            fclose($outputHandle);


            
            


            //INVIO RISPOSTA
            $result = [
                'success' => true,
                'filename' => $finalCsv,
                'file_info' => [
                    'last_update' => date('Y-m-d H:i:s', filemtime($targetPath))
                ]
            ];
            
            header('Content-Type: application/json');
            echo json_encode($result);
            exit;


            //echo "<br>✅ File generato: <strong>$finalCsv</strong>";
        } else {
            //echo "Errore: impossibile aprire $outputFile per scrittura finale.";
        }





























                } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }




            }


//print_r($ListNewDesc);


        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }




















}

    
   










