<?php
require_once __DIR__ . '/vendor/autoload.php';
// gestisce richiesta post da hidden input da InterfacciaAZA
if (isset($_POST['filename'])) {
    $lastupdate = $_POST['datareport'];
    $filename = $_POST['filename'];
    $asin_count = $_POST['ASIN'];
    $ean_count = $_POST['EAN'];
    $amazon_products = $_POST['AMZ'];
    $total_products = $_POST['totaleprodotti'];
    $current_country = $_POST['country'];
    $nome_cliente = $_POST['nomecliente'];
} 
//RICHIESTA CURL PER CREAZIONE GRAFICI
$kpis = ['is_AMZ', 'CAT', 'OFFERS', 'NODE', 'IDQ', 'TEMPO_DI_CONSEGNA', 'MARGINE', 'ASIN']; //LISTA_TOP_X
$country = $current_country;
$output = 'G';
$url = 'http://192.168.1.183:5000/api/AZA';
//$request_delay = 5; // Ritardo tra le richieste in secondi
foreach ($kpis as $kpi) {
    // Prepara i dati per la richiesta
    $postData = [
        'KPI' => $kpi,
        'country' => $country,
        'output' => $output,
        'filename' => $filename,
    ];
    $jsonData = json_encode($postData);
    // Configura la richiesta cURL
    $ch = curl_init($url);
    curl_setopt_array($ch, [
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => $jsonData,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HTTPHEADER => ['Content-Type: application/json'],
        CURLOPT_TIMEOUT => 30,
        CURLOPT_CONNECTTIMEOUT => 10
    ]);
    // Esegui la richiesta
    $response = curl_exec($ch);
    // Gestione errori
    if (curl_errno($ch)) {
        error_log("Errore cURL ($kpi): " . curl_error($ch));
        curl_close($ch);
        //sleep($request_delay);
        continue;
    }
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    if ($httpCode !== 200) {
        error_log("Errore HTTP ($kpi): $httpCode");
        //sleep($request_delay);
        continue;
    }
    // Salva l'immagine
    $nomegrafico = 'assets/images/grafici/grafico_' . $kpi . '.png';
    if (!file_put_contents($nomegrafico, $response)) {
        error_log("Salvataggio fallito per: $kpi");
    }
    //sleep($request_delay); 
}









// CREAZIONE PDF 
use setasign\Fpdi\Fpdi;




// poi verrà sostituito da quello proveiente da POST

// Inizializza FPDI
$pdf = new Fpdi();
$sourceFile = 'Report AZA layout.pdf';
$totalPages = $pdf->setSourceFile($sourceFile); //ottieni numero pagine

define('FPDF_FONTPATH','font');
$pdf->AddFont('Montserrat', '', 'Montserrat-Regular.php');
$pdf->AddFont('Montserrat', 'B', 'Montserrat-Black.php');
// i font sono in C:\xampp\htdocs\AZA\vendor\setasign\fpdf\font



// importazione pagine
for ($i = 1; $i <= $totalPages; $i++) {
    $tplId = $pdf->importPage($i);
    $size = $pdf->getTemplateSize($tplId); // Ottieni larghezza e altezza originali

    // SE LA FOTO NON ESISTE, NON CREA QUELLA PAGINA
        $imageMap = [
        3 => 'assets/images/grafici/grafico_ASIN.png',
        4 => 'assets/images/grafici/grafico_is_AMZ.png',
        5 => 'assets/images/grafici/grafico_CAT.png',
        6 => 'assets/images/grafici/grafico_NODE.png',
        7 => 'assets/images/grafici/grafico_OFFERS.png',
        8 => 'assets/images/grafici/grafico_IDQ.png',
        9 => 'assets/images/grafici/grafico_TEMPO_DI_CONSEGNA.png',
        10 => 'assets/images/grafici/grafico_MARGINE.png'
    ];

    // Se la pagina richiede un'immagine e l'immagine NON esiste → salta la pagina
    if (isset($imageMap[$i]) && !file_exists($imageMap[$i])) {
        continue; // salta pagina
    }


    // Aggiungi pagina con dimensioni esatte del template
    $pdf->AddPage($size['orientation'], [$size['width'], $size['height']]);
    $pdf->useTemplate($tplId);

    //PAGINA 1: inizio
    if ($i === 1) {
      $pdf->SetFont('Montserrat', '', 30);
      $pdf->SetTextColor(45, 89, 133); //colore blu da ppt
      // AZA REPORT
      $pdf->SetXY(171, 80); // posizione
      $pdf->Cell(0, 10, 'AZA REPORT');
      // DATA REPORT
      $pdf->SetXY(171, 95); // posizione
      $pdf->Cell(0, 10, $lastupdate);
      // nome cliente
      $pdf->SetXY(171, 110); // posizione
      $pdf->Cell(0, 10, $nome_cliente);
      
    }
    //PAGINA 2:
    if ($i === 2) {
        $pdf->SetFont('Montserrat', '', 12);
        $pdf->SetTextColor(0, 0, 0);
        $pdf->SetXY(87, 45);
        $pdf->Cell(0, 10, $current_country);

        $pdf->SetXY(87, 65);
        $pdf->Cell(0, 10, $asin_count);

        $pdf->SetXY(87, 84);
        $pdf->Cell(0, 10, $total_products);
      
    }

    //PAGINA 3: GRAFICO ASIN
    if ($i === 3) {
        $pdf->Image('assets/images/grafici/grafico_ASIN.png', 124, 27, 180); 
    }
    //PAGINA 4:
    if ($i === 4) {
      $pdf->Image('assets/images/grafici/grafico_is_AMZ.png', 124, 27, 180); 
      
    }

    //PAGINA 5: CATEGORIE
    if ($i === 5) {
        $pdf->Image('assets/images/grafici/grafico_CAT.png', 130, 25, 170); 
      
    }
    //PAGINA 6: NODE 
    if ($i === 6) {
        $pdf->Image('assets/images/grafici/grafico_NODE.png', 130, 25, 170); 
    }

    //PAGINA 7: OFFERS
    if ($i === 7) {
        $pdf->Image('assets/images/grafici/grafico_OFFERS.png', 124, 27, 180); 
      
    }
    //PAGINA 8: IDQ
    if ($i === 8) {
        $pdf->Image('assets/images/grafici/grafico_IDQ.png', 130, 35, 170); 
    }

    //PAGINA 9: TEMPO DI CONSEGNA
    if ($i === 9) {
      $pdf->Image('assets/images/grafici/grafico_TEMPO_DI_CONSEGNA.png', 130, 25, 170); 
    }

    //PAGINA 10: conclusione
    if ($i === 10) {
      $pdf->Image('assets/images/grafici/grafico_TEMPO_DI_CONSEGNA.png', 171, 41, 97); 
    }
  
}


$pdf->Output('I', 'output.pdf');




?>