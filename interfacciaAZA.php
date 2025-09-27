ì<?php

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/config/dz.php';
// session_start(); 
// require_once 'Authentication.php';


// // validazione accesso
// checkAccess($auth, ['2']);


?>

<!DOCTYPE html>
<html lang="en" id="wholepage">
<head>
   <!-- PAGE TITLE HERE -->
	<title><?php echo $DexignZoneSettings['site_level']['site_title'] ?></title>

	<?php include 'elements/meta.php';?>

	<!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="<?php echo $DexignZoneSettings['site_level']['favicon']?>">
    <!--bootstrap-->
    <link href="assets/vendor/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/vendor/datatables/responsive/responsive.css" rel="stylesheet" type="text/css"/>

    <link href="http://127.0.0.1/AZA/assets/js/plugins-init/datatables.init.js" rel="noreferrer noopener"></link> <!--datatable-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">

    <!-- jQuery-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

    <!-- Toastr -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <!-- PDF Libraries -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>


    	<!--SWEET ALERT-->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <!--GRAFICI JS-->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
	<?php include 'elements/page-css.php'; ?>
	<style>
        /* Layout Modal */
        #DettaglioBody {
            padding: 25px;
        }

        .row {
            margin-bottom: 20px;
        }

        /*  immagine */
        #immagine-container {
            padding-right: 20px;
        }

        .image-wrapper {
            background-color: #f8f9fa;

            padding: 15px;
            height: 100%;
        }

        .product-image {
            max-width: 100%;
            max-height: 400px;
            width: auto;
            height: auto;
            object-fit: contain;
            display: block;
            margin: 0 auto;
        }


        /* Stili sezioni */
        #intestModal #FBAMFNModal #BBModal {
            background-color: #ffffff;
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
        }

        .section-header {
            color: #2c3e50;
            font-size: 1.3rem;
            font-weight: 600;
            margin-top: 0;
            margin-bottom: 15px;
            padding-bottom: 10px;
            border-bottom: 1px solid #eee;
        }

        /* Griglia informazioni */
        .info-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 12px;
        }

        .info-label {
            font-weight: 600;
            color: #495057;
            font-size: 0.95rem;
            font-weight: bold;
        }

        .info-value {
            color: #212529;
            font-size: 0.95rem;
            word-break: break-word;
        }

        /*NECESSARIO PER PDF*/
        .chart-wrapper {
        page-break-inside: avoid;
        break-inside: avoid;
        }

    </style>

</head>
<body>

    <!--*******************
        Preloader start
    ********************-->
    <?php include 'elements/pre-loader.php'; ?>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
		<?php include 'elements/nav-header.php'; ?>
        <!--**********************************
            Nav header end
        ***********************************-->

		<!--**********************************
            Chat box start
        ***********************************-->
		<?php include 'elements/chatbox.php'; ?>
		<!--**********************************
            Chat box End
        ***********************************-->

		<!--**********************************
            Header start
        ***********************************-->
		<?php include 'elements/header.php'; ?>

        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
		<?php include 'elements/sidebar.php'; ?>
        <!--**********************************
            Sidebar end
        ***********************************-->

		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body chart-wrapper" >
            <!-- ROW INTESTAZIONE -->
            <div class="container-fluid">
                <div class="row mb-4">
                    <div class="col-md-12">
                        <div class="card chart-wrapper" >
                            <div class="card-body">
                                <h2 class="card-title">AZA - Advanced Zelda Analysis</h3>
                                <!-- <h4 class="card-title">Carica file JSON</h3> -->
                                <form id="uploadForm" method="post" enctype="multipart/form-data"> <!--form upload file-->
                                    <div class="mb-3"> <!--input file-->
                                        <input class="form-control" type="file" name="jsonFile" accept=".json" id="json-upload" required>
                                    </div>
                                    <button id="uplpadfile" type="submit" class="btn btn-primary">Carica File</button>
                                    <div class="mt-2" id="filename">Nessun file selezionato</div>
                                    <input type='hidden' id="action" name="action" value='upload'>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Dati generali caricati da AZAserver.php -->
                <div id='datiaggreg' class="row mb-3 chart-wrapper" >
                    <!-- Reso dinamico da funzione -->
                </div>

                <!-- Tabs -->
                <div class="row mb-3 chart-wrapper">
                    <!--TAB DINAMICHE -->
                    <ul class="nav nav-pills nav-fill" id="tabs-paesi">
                        <!-- Creazione dinamica tab con funzione generateCountryTabs()
                        Esempio di una tab:
                        <li class="nav-item">
                            <a class="nav-link country active" aria-current="page" country="IT" href="#">IT</a>
                        </li>

                        qui viene messo anche il bottone per il pdf-->
                    </ul>

                </div>



            <!-- GRAFICI STRUTTURA HTML -->
<div class="card chart-wrapper">
  <!-- IS_AMZ e ASIN -->
  <div class="row">
    <div class="col-md-6">
      <div class="card-body">
        <div id="is_AMZ" class="dashboard" KPI="is_AMZ"></div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card-body">
        <div id="ASIN" class="dashboard" KPI="ASIN"></div>
      </div>
    </div>
  </div>
</div>

<div class="card chart-wrapper">
  <!-- OFFERS e NODE -->
  <div class="row">
    <div class="col-md-4">
      <div class="card-body">
        <div id="OFFERS" class="dashboard" KPI="OFFERS"></div>
      </div>
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <div id="NODE" class="dashboard" KPI="NODE"></div>
      </div>
    </div>
  </div>
</div>

<div class="card chart-wrapper">
  <!-- TEMPO_DI_CONSEGNA e CAT -->
  <div class="row">
    <div class="col-md-4">
      <div class="card-body">
        <div id="TEMPO_DI_CONSEGNA" class="dashboard" KPI="TEMPO_DI_CONSEGNA"></div>
      </div>
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <div id="CAT" class="dashboard" KPI="CAT"></div>
      </div>
    </div>
  </div>
</div>

<div class="card chart-wrapper">
  <!-- MARGINE e IDQ -->
  <div class="row">
    <div class="col-md-6">
      <div class="card-body">
        <div id="MARGINE" class="dashboard" KPI="MARGINE"></div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card-body">
        <div id="IDQ" class="dashboard" KPI="IDQ"></div>
      </div>
    </div>
  </div>
</div>

    

    
    </div>
</div>





<!-- ! MODALE PER GENERAZIONE PDF -->
<div class="modal fade" id="pdfmodal" tabindex="-1" aria-labelledby="pdfmodalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg"> <!-- Aumenta dimensione -->
    <div class="modal-content">
      <!-- Header -->
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="pdfmodalLabel">Configurazione PDF</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Chiudi"></button>
      </div>

      <!-- Form -->
      <form action="AZAserver.php" method="POST" target="_blank"> <!--redirect al server-->

        <div class="modal-body">
          <!-- Nome Cliente -->
          <div class="mb-3">
            <label for="nomecliente" class="form-label">Nome Cliente</label>
            <input type="text" class="form-control" id="nomecliente" name="nomecliente" required>
          </div>

          <!-- Gli altri elementi-->
          <div class="row">
            <!-- prima colonna  -->
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="datareport" class="form-label">Data Report</label>
                    <input type="text" class="form-control" id="PDFdatareport" name="datareport">
                </div>
                <div class="mb-3">
                    <label for="filename" class="form-label">Paese scelto</label>
                    <input type="text" class="form-control" id="countryforpdf" value="" name="country" >
                </div>
                <div class="mb-3">
                    <label for="filename" class="form-label">Nome File</label>
                    <input type="text" class="form-control" id="PDFfilename"  name="filename" >
                </div>
                <div class="mb-3">
                    <label for="ASIN" class="form-label">Numero ASIN</label>
                    <input type="text" class="form-control" id="PDFASIN" name="ASIN">
                </div>
            </div>
            <!-- Seconda colonna -->
            <div class="col-md-6">
              <div class="mb-3">
                <label for="EAN" class="form-label">Numero EAN</label>
                <input type="text" class="form-control" id="PDFEAN"  name="EAN">
              </div>
              <div class="mb-3">
                <label for="AMZ" class="form-label">Prodotti Amazon</label>
                <input type="text" class="form-control" id="PDFAMZ"  name="AMZ">
              </div>
              <div class="mb-3">
                <label for="totaleprodotti" class="form-label">Totale Prodotti</label>
                <input type="text" class="form-control" id="PDFtotaleprodotti" name="totaleprodotti">
                <input type="hidden" name="action" value="PDF">
              </div>
            </div>
          </div>
        </div>

        <!-- Footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Chiudi</button>
          <button ID="generaPDF" type="submit" class="btn btn-primary">Genera PDF</button>
        </div>
      </form>
    </div>
  </div>
</div>










    <!-- TOASTR: gestito da funzione: showToast-->
<div class="position-fixed top-0 end-0 p-2" style="z-index: 11">
            <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <strong id="toast-title" class="me-auto">System</strong>
                    <small>0 seconds ago</small>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    Hai caricato il file con successo!
                </div>
            </div>
        </div>







<!--Profile Datatable-->
<div class="row">
   </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
         <?php include 'elements/footer.php'; ?>
        <!--**********************************
            Footer end
        ***********************************-->

		<!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->



	            </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
   <?php include 'elements/page-js.php'; ?>

<script>
//FUNZIONE PER GENERARE LE TABS, usata sotto
function generateCountryTabs(countries, filename, lastupdate, asin_count, ean_count, total_products, amazon_products) {
    var tabsContainer = $('#tabs-paesi');
// $tabsContainer.empty(); // Rimuovi le tab esistenti
    console.log('tesrt')
   
    // Aggiungi le tab per ogni paese
    countries.forEach(function(country, index) {
        var isActive = index === 0 ? 'active' : '';
        var tabHtml = `
            <li class="nav-item">
                <a class="nav-link country ${isActive}" aria-current="page" country="${country}" href="#">${country}</a>
            </li>
        `;
        console.log(countries)
        tabsContainer.append(tabHtml);
    });

    // Aggiungi il pulsante PDF dopo le tab dei paesi
    tabsContainer.append(`
        <li class="nav-item">
            <button id="generaPDF" class="btn btn-danger btn-block">Genera PDF</button>
        </li>
    `);

}

//FUNZIONE PER GENERARE DATI AGGREGATI (Data report, Asin trovati, Ean trovati, Prodotti in Amazon, Totale prodotti)
function createDataAggreg (lastupdate, asin_count, ean_count, total_products, amazon_products){
    var datiaggreg = $('#datiaggreg');
    datiaggreg.empty(); //rimuove i dati precedenti
    
    //AGGIUNGERE I NUOVI DATI AGGREGATI
        datiaggreg.append(`
            <div class="col-md-3">
                <div class="data-box">
                    <h5>Data report</h5>
                    <div id="last-update">${lastupdate}</div>
                </div>
            </div>
             <div class="col-md-2">
                    <div class="data-box">
                        <h5>Asin trovati</h5>
                        <div><span id="asin_count">${asin_count}</span></div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="data-box">
                        <h5>Ean trovati</h5>
                        <div id="ean_count">${ean_count}</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="data-box">
                        <h5>Prodotti in Amazon</h5>
                        <div id="amazon_products">${amazon_products}</div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="data-box">
                        <h5>Totale prodotti</h5>
                        <div id="total_products">${total_products}</div>
                    </div>
                </div>
    `);
}



// Inizializza il toast
const toastEl = document.getElementById('liveToast');
const bootstrapToast = new bootstrap.Toast(toastEl);

function showToast(title, message) {
    // Aggiorna il titolo
    document.getElementById('toast-title').textContent = title;

    // Aggiorna il corpo del toast
    toastEl.querySelector('.toast-body').textContent = message;

    // Mostra il toast
    bootstrapToast.show();
}


//GESTIONE FILE --- QUI inizia
$(document).ready(function() { //qui inserisci ogni cosa

    // Evento upload del file-------------------------
    $('#uploadForm').on('submit', function(e) {
        e.preventDefault();
        //cleanExistingCharts();

        var formData = new FormData(this);
        //ajax per elaborazione dati json
        $.ajax({
            url: 'AZAserver.php',
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
            //btw sarebbe un Content-Type: application/x-www-form-urlencoded
                try {
                    var r = typeof response === 'string' ? JSON.parse(response) : response;
                    console.log("Risposta completa dal server:", r);


                    console.log("Risposta da AZAserver.php: " + response)
                    if(r && r.success) {
                        var countries = r.file_info?.countries || [];
                        var filename = r.filename || '';
                        var lastupdate = r.file_info?.last_update || '-';
                        var asin_count = r.file_info?.asin_count || 0;
                        var ean_count = r.file_info?.ean_count || 0;
                        var total_products = r.file_info?.total_products || 0;
                        var amazon_products = r.file_info?.amazon_products || 0;
                    

                        //Genera html per dati aggregati
                        createDataAggreg (lastupdate, asin_count, ean_count, total_products, amazon_products)


                        // Aggiorna l'interfaccia con i dati del file
                        $('#filename').text(filename);
                        $('#last-update').text(lastupdate);
                        $('#asin_count').text(asin_count);
                        $('#ean_count').text(ean_count);
                        $('#total_products').text(total_products);
                        $('#amazon_products').text(amazon_products);

                        console.log('filename' + filename)//debug
                        console.log('amazon_products' +  amazon_products)

                        
                        // Genera dinamicamente le tab dei paesi
                        generateCountryTabs(countries, filename, lastupdate, asin_count, ean_count, total_products, amazon_products)

                        // Mostra messaggio di successo
                        showToast("Azione utente", "Hai caricato il file con successo!"); //prima va scritto il titolo e poi il body

                    } else {
                        showToast("System", "Errore");
                    }
                } catch(e) {
                    showToast("System", "Errore nel parsing della risposta");
                }
            },
            error: function(xhr, status, error) {
                showToast("System", 'Errore durante il caricamento: ' + error);
            }
        });
    });


    //EVENTO PDF
    $(document).on('click', '#generaPDF', function() {


        function createPDF(){
            // Recupera i valori dalla pagina
            const lastUpdate = $('#last-update').text();
            const asinCount = $('#asin_count').text();
            const eanCount = $('#ean_count').text();
            const amazonProducts = $('#amazon_products').text();
            const totalProducts = $('#total_products').text();
            const filename = $('#filename').text();

            // Recupera il paese selezionato
            const activeTab = $('.nav-link.country.active');
            const country = activeTab.length ? activeTab.attr('country') : 'N/A';

            // Popola i campi del modal
            $('#PDFdatareport').val(lastUpdate);
            $('#PDFASIN').val(asinCount);
            $('#PDFEAN').val(eanCount);
            $('#PDFAMZ').val(amazonProducts);
            $('#PDFtotaleprodotti').val(totalProducts);
            $('#PDFfilename').val(filename);
            $('#PDFcountry').val(country);

            // Imposta il valore dell'input hidden con il paese selezionato
            $('#countryforpdf').val(country);

            // Mostra il modal
            var PDFmodal = new bootstrap.Modal(document.getElementById('pdfmodal'));
            PDFmodal.show();
        }

        createPDF()

    });


    //RICHIESTE A PYTHON PER I GRAFICI        
    $(document).on('click', '.country', function() {
        const filename = $('#filename').text();
        const activeTab = $('.nav-link.country.active');
        const country = activeTab.length ? activeTab.attr('country') : 'N/A';
        
        const params = {
            filename,
            country,
            action: 'grafici',
            output: 'J',
            KPI: ["ASIN", "is_AMZ", "OFFERS", "NODE", "TEMPO_DI_CONSEGNA", "CAT", "MARGINE", "LISTA_TOP_X", "IDQ", "DETTAGLIO"], 
        };

        fetch('AZAserver.php', { //AZAserver
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(params)
        })
        .then(response => response.json())
        .then(data => {
            console.log('Risposta dal server:', data);
            // !alert('Python eseguito!\n' + data);
            

            const asin_count = data.asin_count;
            const no_asin_count = data.no_asin_count;
            const is_AMZ_count = data.is_AMZ_count;
            const not_AMZ_count = data.not_AMZ_count;
            const offers_count = data.offers_count;
            const no_offers_count = data.no_offers_count;
            const nodes_keys = data.nodes_keys;
            const nodes_values = data.nodes_values;
            const tmp_cons_prime = data.tmp_cons_prime;
            const tmp_cons_24h = data.tmp_cons_24h;
            const tmp_cons_48h = data.tmp_cons_48h;
            const tmp_cons_more48h = data.tmp_cons_more48h;
            const category_keys = data.category_keys;
            const category_values = data.category_values;
            const margine_meno_0 = data.margine_meno_0;
            const margine_1_a_10 = data.margine_1_a_10;
            const margine_11_a_20 = data.margine_11_a_20;
            const margine_21_a_30 = data.margine_21_a_30;
            const margine_piu_30 = data.margine_piu_30;


            //const info_IDQ_scarso = data 
            //const info_IDQ_scarso = [data.info_IDQ.totale_immagini.scarso, data.info_IDQ.lunghezza_titolo.scarso, data.info_IDQ.lunghezza_descrizione.scarso, data.info_IDQ.bullet_point.scarso];
            //const info_IDQ_medio = [data.info_IDQ.totale_immagini.medio, data.info_IDQ.lunghezza_titolo.medio, data.info_IDQ.lunghezza_descrizione.medio, data.info_IDQ.bullet_point.medio];
            //const info_IDQ_ottimo = [data.info_IDQ.totale_immagini.ottimo, data.info_IDQ.lunghezza_titolo.ottimo, data.info_IDQ.lunghezza_descrizione.ottimo, data.info_IDQ.bullet_point.ottimo];
    
            //console.log('Conteggio NODE:', info_IDQ_scarso);
           // console.log('Conteggio NODE:', info_IDQ_medio);
           // console.log('Conteggio NODE:', info_IDQ_ottimo);

   
            // ---------------
            //* GRAFICO IS_AMZ
            // ---------------
            var options = {
                series: [is_AMZ_count, not_AMZ_count],
                chart: {
                    width: 380,
                    type: 'pie',
                },
                title: {
                    text: "Amazon Seller:",
                    align: 'center',
                    style: {
                        fontSize: '16px',
                        fontWeight: 'bold',
                        color: '#333'
                    }
                },
                labels: ['yes', 'no'],
                colors: ['#0edf8d', '#27b00e'], // Blu per "Yes", blu chiaro per "No"
                dataLabels: {
                enabled: true,
                style: {
                    colors: ['#000000', '#000000'] // Testo nero per entrambe le etichette
                },
                dropShadow: { //toglie le ombre
                    enabled: false
                },
                formatter: function(val, opts) {
                    return opts.w.globals.series[opts.seriesIndex] + " (" + val.toFixed(1) + "%)";
                },
                style: {
                    colors: ['#FFFFFF'] // Colore del testo in basso (percentuale)
                }
            },
                legend: {
                    position: 'bottom', // Posizione legenda
                    fontSize: '14px'
                },
                responsive: [{
                    breakpoint: 480,
                    options: {
                        chart: {
                            width: 200
                        },
                        legend: {
                            position: 'bottom'
                        }
                    }
                }]
            };

            var chart = new ApexCharts(document.querySelector("#IS_AMZ"), options);
            chart.render();
            // ---------------
            //* GRAFICO ASIN
            // ---------------
            var options = {
                series: [asin_count, no_asin_count],
                chart: {
                    width: 380,
                    type: 'pie',
                },
                title: {
                    text: "Distribuzione ASIN: ",
                    align: 'center',
                    style: {
                        fontSize: '16px',
                        fontWeight: 'bold',
                        color: '#333'
                    }
                },
                labels: ['yes', 'no'],
                colors: ['#0edf8d', '#27b00e'], 
                dataLabels: {
                enabled: true,
                style: {
                    colors: ['#000000', '#000000'] // Testo nero per entrambe le etichette
                },
                dropShadow: { //toglie le ombre
                    enabled: false
                },
                formatter: function(val, opts) {
                    return opts.w.globals.series[opts.seriesIndex] + " (" + val.toFixed(1) + "%)";
                },
                style: {
                    colors: ['#FFFFFF'] // Colore del testo in basso (percentuale)
                }
            },
                legend: {
                    position: 'bottom', // Posizione legenda
                    fontSize: '14px'
                },
                responsive: [{
                    breakpoint: 480,
                    options: {
                        chart: {
                            width: 200
                        },
                        legend: {
                            position: 'bottom'
                        }
                    }
                }]
            };

            var chart = new ApexCharts(document.querySelector("#ASIN"), options);
            chart.render();






            // ---------------
            //* GRAFICO OFFERS
            // ---------------
            var options = {
                series: [offers_count, no_offers_count],
                labels: ['offers_count', 'no_offers_count'],
                chart: {
                    width: '100%',
                    height: 450,
                    type: 'donut',
                },
                plotOptions: {
                    pie: {
                        startAngle: -90,
                        endAngle: 270,
                        donut: {
                            labels: {
                                show: true,
                                name: {
                                    show: true,
                                    fontSize: '14px',
                                    fontWeight: 'bold',
                                    color: undefined
                                },
                                value: {
                                    show: true,
                                    fontSize: '16px',
                                    fontWeight: 'bold',
                                    color: '#333',
                                    formatter: function (val) {
                                        return val
                                    }
                                },
                            }
                        }
                    }
                },
                dataLabels: {
                    enabled: false
                },
                fill: {
                    type: 'gradient',
                },
                legend: {
                    formatter: function(val, opts) {
                        return val + " - " + opts.w.globals.series[opts.seriesIndex]
                    },
                    position: 'right',
                    horizontalAlign: 'center'
                },
                title: {
                    text: 'Offerte Attive',
                    align: 'center',
                    style: {
                        fontSize: '16px',
                        fontWeight: 'bold'
                    }
                },
                responsive: [{
                    breakpoint: 480,
                    options: {
                        chart: {
                            width: 200
                        },
                        legend: {
                            position: 'bottom'
                        }
                    }
                }]
            };

            var chart = new ApexCharts(document.querySelector("#OFFERS"), options);
            chart.render();







            // ---------------
            //* GRAFICO NODE
            // ---------------
            var options = {
                series: [{
                data: nodes_values,
                }],
                title: {
                        text: "Nodi:",
                        align: 'center',
                        style: {
                            fontSize: '16px',
                            fontWeight: 'bold',
                            color: '#333'
                        }
                    },
                chart: {
                type: 'bar',
                height: 350
                },
                plotOptions: {
                bar: {
                    borderRadius: 4,
                    borderRadiusApplication: 'end',
                    horizontal: true,
                }
                },
                dataLabels: {
                enabled: false
                },
                xaxis: {
                categories: nodes_keys,
                }
                };

                var chart = new ApexCharts(document.querySelector("#NODE"), options);
                chart.render();
            // ---------------
            //* GRAFICO TEMPO_DI_CONSEGNA
            // ---------------

            var options = {
                series: [tmp_cons_24h, tmp_cons_48h, tmp_cons_more48h],
                title: {
                    text: "Tempo di Consegna:",
                    align: 'center',
                    style: {
                        fontSize: '16px',
                        fontWeight: 'bold',
                        color: '#333'
                    }
                },
                chart: {
                    height: 350,
                    width: '100%',
                    type: 'radialBar',
                },
                plotOptions: {
                radialBar: {
                    offsetY: 0,
                    startAngle: 0,
                    endAngle: 270,
                    hollow: {
                    margin: 5,
                    size: '30%',
                    background: 'transparent',
                    image: undefined,
                    },
                    dataLabels: {
                    name: {
                        show: false,
                    },
                    value: {
                        show: false,
                    }
                    },

                    barLabels: {
                    enabled: true,
                    useSeriesColors: true,
                    offsetX: -8,
                    fontSize: '16px',
                    formatter: function(seriesName, opts) {
                        return seriesName + ":  " + opts.w.globals.series[opts.seriesIndex]
                    },
                    },
                }
                },
                colors: ['#1ab7ea', '#0084ff', '#39539E', '#0077B5'],
                labels: ['prime', 'day', 'twodays', 'morethantwodays'],
                responsive: [{
                breakpoint: 480,
                options: {
                    legend: {
                        show: false
                    }
                }
                }]
                };

            var chart = new ApexCharts(document.querySelector("#TEMPO_DI_CONSEGNA"), options);
            chart.render();



            // ---------------
            //* GRAFICO CAT
            // ---------------
            var options = {
                series: [{
                data: category_values,
                }],
                title: {
                        text: "Categorie:",
                        align: 'center',
                        style: {
                            fontSize: '16px',
                            fontWeight: 'bold',
                            color: '#333'
                        }
                    },
                chart: {
                type: 'bar',
                height: 350
                },
                plotOptions: {
                bar: {
                    borderRadius: 4,
                    borderRadiusApplication: 'end',
                    horizontal: true,
                }
                },
                dataLabels: {
                enabled: false
                },
                xaxis: {
                categories: category_keys,
                }
                };

        var chart = new ApexCharts(document.querySelector("#CAT"), options);
        chart.render();
        


        // ---------------
        //* GRAFICO MARGINE
        // ---------------
        var options = {
            series: [{
            name: 'Margine',
            data: [6, 3, 5, 10]
            }],
            chart: {
            height: 350,
            type: 'bar',
            },
            plotOptions: {
            bar: {
                borderRadius: 10,
                dataLabels: {
                position: 'top', // top, center, bottom
                },
            }
            },
            dataLabels: {
            enabled: true,
            formatter: function (val) {
                return val;
            },
            offsetY: -20,
            style: {
                fontSize: '12px',
                colors: ["#304758"]
            }
            },

            xaxis: {
            categories: ['1-10%', '11-20%', '21-30%', '+30%'],
            position: 'top',
            axisBorder: {
                show: false
            },
            axisTicks: {
                show: false
            },
            crosshairs: {
                fill: {
                type: 'gradient',
                gradient: {
                    colorFrom: '#D8E3F0',
                    colorTo: '#BED1E6',
                    stops: [0, 100],
                    opacityFrom: 0.4,
                    opacityTo: 0.5,
                }
                }
            },
            tooltip: {
                enabled: true,
            }
            },
            yaxis: {
            axisBorder: {
                show: false
            },
            axisTicks: {
                show: false,
            },
            labels: {
                show: false,
                formatter: function (val) {
                return val + "%";
                }
            }

            },
            title: {
            text: 'Margine',
            align: 'center',
            style: {
                color: '#444',
                fontSize: '16px',
                fontWeight: 'bold'
            }
            }

            };

        var chart = new ApexCharts(document.querySelector("#MARGINE"), options);
        chart.render();




        // ---------------
        //* GRAFICO IDQ
        // ---------------
   /* 

        var options = {
            series: [{
                name: 'Scarso',
                data: info_IDQ_scarso,
                color: '#068EF8'
            }, {
                name: 'Medio',
                data: info_IDQ_medio,
                color: '#FFB6B3'
            }, {
                name: 'Ottimo',
                data: info_IDQ_ottimo,
                color: '#1ee811'
            }],
            chart: {
                type: 'bar',
                height: 350,  // Aumenta l'altezza per bilanciare la larghezza ridotta
                width: '100%', // Usa il 100% del contenitore
                stacked: true,
                toolbar: {
                    show: true
                },
                zoom: {
                    enabled: true
                }
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    borderRadius: 4,
                    dataLabels: {
                        total: {
                            enabled: true,
                            style: {
                                fontSize: '13px',
                                fontWeight: 900
                            }
                        }
                    }
                }
            },
            xaxis: {
                categories: ['Totale immagini', 'Lunghezza titolo', 'Lunghezza descrizione', 'Bullet point'],
                labels: {
                    style: {
                        fontSize: '12px',
                        fontWeight: 'bold'
                    },
                    formatter: function(value) {
                        return value.split(' ').map(function(word) {
                            return word.charAt(0).toUpperCase() + word.slice(1);
                        }).join(' ');
                    }
                }
            },
            legend: {
                position: 'right',
                offsetY: 40
            },
            fill: {
                opacity: 1
            },
            title: {
                text: 'Analisi qualitativa prodotti (IDQ)',
                align: 'center',
                style: {
                    fontSize: '16px',
                    fontWeight: 'bold',
                    color: '#333'
                }
            },
            tooltip: {
                y: {
                    formatter: function(val) {
                        return val;
                    }
                }
            }
        };



        var chart = new ApexCharts(document.querySelector("#IDQ"), options);
        chart.render();
*/


        })
        .catch(error => {
            console.error('Errore:', error);
            alert('Errore nell\'esecuzione dello script');
        });



       

    });








});


</script>

<script src="assets/vendor/global/global.min.js" type="text/javascript"></script>
<script src="assets/vendor/bootstrap-select/js/bootstrap-select.min.js" type="text/javascript"></script>
<script src="assets/vendor/datatables/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="assets/vendor/datatables/responsive/responsive.js" type="text/javascript"></script>
<script src="assets/js/plugins-init/datatables.init.js" type="text/javascript"></script>
<script src="assets/js/custom.js" type="text/javascript"></script>
<script src="assets/js/ic-sidenav-init.js" type="text/javascript"></script>

</html>
