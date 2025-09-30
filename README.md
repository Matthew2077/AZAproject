# READ ME - Everything About this project

Il presente progetto ha come obbiettivo quello di creare una interfaccia grafica carina e interattiva per visualizzare dati di un'analisi precedente. <br>
Di seguito una spiegazione dettagliata di come funziona il programma

## Creazione Dati aggregati e tabs:
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
    4. Vengono create le tab per paese basandosi sulle info del file (anche la tab per il PDF.)

## Creazione PDF:
1. L'utente clicca su crea pdf;
2. Doing it


## Creazione grafici interattivi (dopo il click su una qualsiasi tab country):
1. L'utente clicca in una qualsiasi tab del paese che vuole visualizzare (eccetto PDF);
2. La funzione prende filename dalla pagina (id: filename), la country selezionata dall'utente. Dopo di che si avvia una chiamata fetch che manda in forma di JSON i parametri che sono: filename, country, action (grafici), output(J) e i **KPI** (ASIN, is_AMZ, OFFERS, NODE, TEMPO_DI_CONSEGNA, CAT, MARGINE, LISTA_TOP_X, IDQ, DETTAGLIO)
3. In AZAserver.php, action <i>grafici</i> riceve i dati e li reindirizza al file python AZAgrafici.py. Params: filename, output, country, kpi. <br>
Mando i parametri al file python che risponderà con un il JSON con tutti i dati per i grafici (variabile result, in JSON). 
4. Elaborazione python: 
    1. Cattura i params e li inserisce in variabili, con il filename va a prendere il file puntato dal frontend e carica i dati in una variabile.
    2. Con i dati ottenuti prima formo una lista __asin_list__ con tutti gli asin che userò dopo per ciclare  su ogni elemento
    3. Sotto __if output == "J":__ ci sono i blocchi di codice che calcolano tutti i dati
    4. Alla fine del programma i dati vengono raccolti in __result__ e mandati ad AZaserver.php
4. AZAserver.php verifica se la risposta è null e se è un JSON valido (NB: Python deve avere solo un print attivo);
5. interfacciaAZA.php, prima vaod a dichiarare tutte le const che mi servono per i grafici. Poi vado a usare quelle variabili uno a una per i grafici. 
6. Quando l'utente clicca su un bottone di dettaglio, esso trigghera una chiamata ad AZAserver.php contenente l'idx del prodotto. 
7. AZAserver.php chiama Python con gli stessi parametri.
8. Python risponde con i dati del dettaglio di quel idx.
9. I dati del dettaglio vengono visualizzati in un modal boostrap.  
