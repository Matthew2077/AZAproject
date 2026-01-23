<?php  
     session_start(); 
    require_once 'Authentication.php';
    require_once __DIR__ . '/vendor/autoload.php';
    require_once __DIR__ . '/config/dz.php';

// validazione accesso
checkAccess($auth, ['1', '2']);

$nickname = $_SESSION["nickname"];
$remainingDays = $_SESSION["remainingDays"] ?? 0;

/*
echo "<PRE>";
print_r($remainingDays);
echo "</PRE>";
exit();
*/



?>
<!DOCTYPE html>
<html lang="en">
<head>
   <!-- PAGE TITLE HERE -->
	<title><?php echo $DexignZoneSettings['site_level']['site_title'] ?></title>

	<?php include 'elements/meta.php';?>
	
	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="<?php echo $DexignZoneSettings['site_level']['favicon']?>">
	
	<?php include 'elements/page-css.php'; ?>

       <!-- Toastr -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
	
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
    <div id="main-wrapper" class="show">

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
                            <h3 class="card-title">Carica file csv</h3>
                            <form id="uploadForm" method="post" enctype="multipart/form-data"> <!--form upload file-->
                                <div class="mb-3"> <!--input file-->
                                    <input class="form-control" type="file" name="csvFile" accept=".csv" id="csv-upload" required>
                                </div>
                                <button id="uplpadfile" type="submit" class="btn btn-primary">Carica File</button>
                                <div class="mt-2" id="file-info">Nessun file selezionato</div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>












    <!-- TOASTR
     gestito da funzione: showToast
     -->
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
    //GESTIONE upload file
$(document).ready(function() {
    // Gestione dell'upload del file
    $('#uploadForm').on('submit', function(e) {
        e.preventDefault();

        var formData = new FormData(this);

        $.ajax({
            url: 'Short_Desc.php',
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                try {
                    console.log("Assistant ID:", response);
                      if (response.success) {
                        
                        window.location.href = response.filename;

                        console.log("File Name:", response.filename);


                        showToast("Successo", "Il download del file inizierà fra poco.");
                    } else {
                        showToast("Errore", "Risposta non valida dal server.");
                    }
                } catch(e) {
                    // alert('Errore nel parsing della risposta');
                    showToast("System", "Errore nel parsing della risposta");
                }



            }
            })

        })
})


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


    </script>
</body>
</html>