<?php
    set_time_limit(300);
ini_set('memory_limit', '512M');
include_once "vendor/autoload.php";

$yourApiKey = ('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');

$client = OpenAI::client($yourApiKey);

// File input/output
$inputFile = 'ebay_catalogo_SMF_20250623172428.csv';
$outputFile = 'output_finale_con_descrizioni.csv';

$nomiLunghi = [];
$descrizioniAccorciate = [];

if (($inputHandle = fopen($inputFile, 'r')) !== false) {
    $header = fgetcsv($inputHandle, 0, ';');

    $selIndex = array_search('Sel', $header);
    $idIndex = array_search('ID', $header);
    $lenIndex = array_search('Len', $header);
    $insertIndex = array_search('Insert', $header);
    $nomeIndex = array_search('Nome', $header);

    if (in_array(false, [$selIndex, $idIndex, $lenIndex, $insertIndex, $nomeIndex], true)) {
        die("Errore: alcune colonne richieste non sono state trovate.");
    }

    // 1. Costruisci array nomi lunghi con ID
    while (($row = fgetcsv($inputHandle, 0, ';')) !== false) {
        $sel = trim($row[$selIndex]);
        $len = (int)($row[$lenIndex] ?? 0);
        $insertDate = $row[$insertIndex] ?? '';
        $year = substr($insertDate, 0, 4);

        if ($len > 80 && $year === '2025' && strtoupper($sel) !== 'X') {
            $id = $row[$idIndex];
            $nome = $row[$nomeIndex];
            $nomiLunghi[] = ['id' => $id, 'descrizione_originale' => $nome];
        }
    }
    fclose($inputHandle);

    // 2. Crea descrizioni accorciate via API
    foreach ($nomiLunghi as $item) {
        $id = $item['id'];
        $descrizioneOriginale = $item['descrizione_originale'];

        $prompt = <<<PROMPT
Generate a new description based on the following rules:
1. Must be under 80 characters.
2. Replace long phrases with shorter synonyms.
3. Use abbreviations where appropriate.

Original: "$descrizioneOriginale"
Answer:
PROMPT;

        try {
            $response = $client->chat()->create([
                'model' => 'gpt-4.1-nano-2025-04-14',
                'messages' => [
                    ['role' => 'user', 'content' => $prompt],
                ],
            ]);

            $short = trim($response->choices[0]->message->content ?? '');

            // Se > 80 caratteri, ritenta 1 volta
            if (mb_strlen($short, 'UTF-8') > 80) {
                $retryPrompt = <<<PROMPT
Shorten this again under 80 characters: "$short"
PROMPT;
                $retry = $client->chat()->create([
                    'model' => 'gpt-4.1-nano-2025-04-14',
                    'messages' => [
                        ['role' => 'user', 'content' => $retryPrompt],
                    ],
                ]);
                $short = trim($retry->choices[0]->message->content ?? '');
            }

            $descrizioniAccorciate[$id] = $short;

        } catch (Exception $e) {
            echo "Errore con ID $id: " . $e->getMessage() . "<br>";
            $descrizioniAccorciate[$id] = ''; // fallback
        }
    }

    // 3. Leggi di nuovo file originale e scrivi output con colonna nuova
    if (($inputHandle = fopen($inputFile, 'r')) !== false && ($outputHandle = fopen($outputFile, 'w')) !== false) {
        $header = fgetcsv($inputHandle, 0, ';');
        $idIndex = array_search('ID', $header);

        // Aggiungi nuova colonna
        $header[] = 'Shortened_Desc';
        fputcsv($outputHandle, $header, ';');

        while (($row = fgetcsv($inputHandle, 0, ';')) !== false) {
            $id = $row[$idIndex];
            $row[] = $descrizioniAccorciate[$id] ?? ''; // aggiungi descrizione se disponibile
            fputcsv($outputHandle, $row, ';');
        }

        fclose($inputHandle);
        fclose($outputHandle);

        echo "✅ File generato: $outputFile<br>";
    }
}
