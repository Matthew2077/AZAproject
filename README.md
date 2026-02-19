# AZAproject - Refactory
## Panoramica:
### Processo principale:
```
[ Utente ]
    |
    | 1. Upload JSON
    v
[ interfacciaAZA.php ]  <-- Frontend (form + JS + Bootstrap)
    |
    | 2. submit form + AJAX
    v
[ AZAserver.php ]        <-- Backend PHP
    |  - Verifica JSON
    |  - Salva file in /uploads
    |  - Calcola statistiche base (asin_count, countries, ecc.)
    |
    | 3. richiesta grafici / dettagli
    v
[ AZAgrafici.py ]        <-- Elaborazione Python
    |  - Carica JSON
    |  - Calcola KPI
    |  - Genera array/lista risultati
    v
[ AZAserver.php ]        <-- ritorno dei dati JSON
    |
    | 4. Render frontend (grafici / modals)
    v
[ interfacciaAZA.php ]
    |
    v
[ Utente ]               <-- visualizza dati, grafici, dettagli
```

### Tecnologie utilizzate:
- **Front-end:** HTML5, CSS3, PHP, Javascript;
- **Back-end:** Python, PHP;
- **scambi di informazioni client/server:** json_encode (Azaserver), Ajax (InterfacciaAZA.php)

### Funzionalità principali
- Visualizzazione aggregata dati da file JSON;
- Visualizzazione Tabella tutti i prodotti;


## Installazione:
1. Clona il repository: git clone https://github.com/Matthew2077/Xproject.git
2. Installa le dipendenze:
3. Avvia InterfacciaAZA.php:


## Dettagli funzionamento:
### Creazione Dati aggregati e tabs:
1. L'utente inserisce un file di tipo JSON in un form php
2. Il file viene spedito ad AZAserver.php con action "upload".
3. action upload in AZAserver.php:
    1. controlla che abbia ricevuto il file;
    2. controlla che il file sia un JSON;
    3. crea la cartella **uploads** se non esiste;
    4. prende il nome del file caricato e lo salva in uploads;
    5. Funzione **countAmazonProducts** conta quanti prodotti hanno 'IS_AMZ';
    6. Funzione **extractCountries** conta quante country uniche ci sono;
    7. Restituisce un array con: filename, file_info (asin_count, ean_count, countries, total_products, amazon_products, last_update)
4. Il JS quando il documentp è caricato rimane in "ascolto" dell'azione upload con
__$('#uploadForm').on('submit', function(e))__, quando l'azione viene registrata:
    1. Vengono recuperate tutte le informazioni inserite in file_info;
    2. Vengono creati gli spazi HTML dove verranno scritti i dati di file_info;
    3. I dati sono inseriti;
    4. Vengono create le tab per paese basandosi sulle info del file.


### Creazione grafici interattivi (dopo il click su una qualsiasi tab country):
1. L'utente clicca in una qualsiasi tab del paese che vuole visualizzare;
2. La funzione prende filename dalla pagina (id: filename), la country selezionata dall'utente. Dopo di che si avvia una chiamata fetch che manda in forma di JSON i parametri che sono: filename, country, action (grafici), output(J) e i **KPI** (ASIN, is_AMZ, OFFERS, NODE, TEMPO_DI_CONSEGNA, CAT, MARGINE, LISTA_TOP_X, IDQ)
3. In AZAserver.php, action <i>grafici</i> riceve i dati e li reindirizza al file python AZAgrafici.py. Params: filename, output, country, kpi. <br>
Mando i parametri al file python che risponderà con un il JSON con tutti i dati per i grafici (variabile result, in JSON).
4. Elaborazione python:
    1. Cattura i params e li inserisce in variabili, con il filename va a prendere il file puntato dal frontend e carica i dati in una variabile.
    2. Con i dati ottenuti prima formo una lista __asin_list__ con tutti gli asin che userò dopo per ciclare  su ogni elemento
    3. Sotto __if output == "J":__ ci sono i blocchi di codice che calcolano tutti i dati
    4. Alla fine del programma i dati vengono raccolti in __result__ e mandati ad AZaserver.php
4. AZAserver.php verifica se la risposta è null e se è un JSON valido (NB: Python deve avere solo un print attivo);
5. interfacciaAZA.php, prima va a dichiarare tutte le constanti che mi servono per i grafici. Poi vado a usare quelle variabili uno a una per i grafici.

## Nota a margine:
Il progetto qui presente ha una logica macchinosa e non ottimizzata secondo gli standard attuali, ma è comunque una fotografica più o meno accurata delle mie capacità intorno alla seconda metà del 2025. Sebbene l'ultimo commit è di del 19 febbraio 2026, la logica e la struttura interna riflette quello che è stato progettato circa a giugno/luglio 2025.
