<?php
session_start(); 
// require_once 'config.php';

require_once __DIR__ . '/config/dz.php';
require_once __DIR__ . '/vendor/autoload.php';

if (isset($_GET['error'])) {
    $errormsg = urldecode($_GET['error']);
   
}

// validazione accesso
checkAccess($auth, ['1']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<!-- PAGE TITLE HERE -->
	<title><?php echo $DexignZoneSettings['site_level']['site_title'] ?></title>

	<?php include 'elements/meta.php'; ?>

	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="<?php echo $DexignZoneSettings['site_level']['favicon'] ?>">

	
	
	<!-- Select2, libreria JS per menu a tendina -->
	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
	<link href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" rel="stylesheet" />

	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<!--SWEET ALERT-->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


	<?php include 'elements/page-css.php'; ?>
</head>

<body>


<?php if (isset($errormsg) && is_string($errormsg)): ?>
<script>
// Passaggio del dato PHP a JavaScript
window.onload = function() {
    //alert("");
	Swal.fire("<?php echo addslashes($errormsg); ?>");
};
</script>
<?php endif; ?>

	<div class="authincation d-flex flex-column flex-lg-row flex-column-fluid">
		<div class="login-aside text-center  d-flex flex-column flex-row-auto">
			<div class="d-flex flex-column-auto flex-column pt-lg-40 pt-15">
				<div class="text-center mb-4 pt-5">
					<a href="index.php"><img src="assets/images/logo-full.png" class="dark-login" alt=""></a>
					<a href="index.php"><img src="assets/images/logo-full-white.png" class="light-login" alt=""></a>
				</div>
				<h3 class="mb-2">Welcome back!</h3>
				<p>User Experience & Interface Design <br>Strategy SaaS Solutions</p>
			</div>
			<div class="aside-image" style="background-image:url(assets/images/pic1.svg);"></div>
		</div>
		<div class="container flex-row-fluid d-flex flex-column justify-content-center position-relative overflow-hidden p-7 mx-auto">
			<div class="d-flex justify-content-center h-100 align-items-center">
				<div class="authincation-content style-2">
					<div class="row no-gutters">
						<div class="col-xl-12">
							<div class="auth-form">

								<h4 class="text-center mb-4">Create New User</h4>
								<!--AUTH FORM-->
								<form action="Authentication.php" method="POST" enctype="multipart/form-data">
									<div class="mb-3">
										<label class="mb-1 form-label">nickname</label>
										<input name="nickname" id="ic-nickname" class="form-control" value="">
									</div>
									<div class="mb-3">
										<label class="mb-1 form-label">Select a photo profile</label>
										<input name="pfp" type="file" id="ic-pfp" accept="image/*" class="form-control" value="" required> 
									</div>
									<div class="mb-3">
										<label class="mb-1 form-label">Email</label>
										<input name="email" id="ic-email" type="email" class="form-control" value="" Required>
									</div>
									<div class="mb-3">
										<label class="mb-1 form-label">Password</label>
										<div class="position-relative">
											<input name="password" type="password" id="ic-password" class="form-control" value="" Required>
											<span class="show-pass eye">
												<i class="fa fa-eye-slash"></i>
												<i class="fa fa-eye"></i>
											</span>
										</div>
									</div>
									<div class="mb-3">
										<label class="mb-1 form-label">Repeat Password</label>
										<div class="position-relative">
											<input name="passwordconfirm" type="password" id="ic-passwordconfirm" class="form-control" value="" Required>
											<span class="show-pass eye">
												<i class="fa fa-eye-slash"></i>
												<i class="fa fa-eye"></i>
											</span>
										</div>
									</div>
									<div class="mb-3">
										<label class="mb-1 form-label">Ruoli</label>
										<select name="roles[]" id="ruoli-select" class="form-control" multiple="multiple">
											<option value="1">admin</option>
											<option value="2">editor</option>
											<option value="3">user</option>
										</select>
										<small class="form-text text-muted">Seleziona uno o più ruoli</small>
									</div> 
									<div class="text-center mt-4">
										<button type="submit" id="submit-user" class="btn btn-primary btn-block">Submit</button>
									</div>
									<input type="hidden" name="action" value="createuser" >
								</form>
								<div class="new-account mt-3">
									<p>Back to <a class="text-primary" href="index.php">Home</a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>





	<!--**********************************
		Scripts
	***********************************-->
	<!-- Required vendors -->
	<?php include 'elements/page-js.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script> 



<script>

$(document).ready(function() {
	// Inizializza Select2 per il campo dei ruoli
    $('#ruoli-select').select2({
        theme: 'bootstrap-5',
        placeholder: "Seleziona uno o più ruoli",
        allowClear: true,
        width: '100%',
        closeOnSelect: false,
        tags: false,
        tokenSeparators: [',', ' '],
        createTag: function(params) {
            var term = $.trim(params.term);
            if (term === '') return null;
            return {
                id: term,
                text: term,
                newTag: true
            };
        }
    });

    $('#ruoli-select').on('select2:select', function(e) {
        var data = e.params.data;
        if (data.newTag) {
            var newOption = new Option(data.text, data.id, true, true);
            $('#ruoli-select').append(newOption).trigger('change');
        }
    });

// controlla che la password e la password ripetuta siano identiche
    const form = $("form");
    const password = $("#ic-password");
    const passwordconfirm = $("#ic-passwordconfirm");

    form.on("submit", function(e) {
		//controllo corrispondenza
        if (password.val() !== passwordconfirm.val()) {
            e.preventDefault();
			passwordOK = false;
			Swal.fire("Le password non corrispondono!");
        } else {
			//se le password corrispondono
			passwordOK = true;
			 // Controllo lunghezza
			if (password.val().length < 8) {
				e.preventDefault();
				passwordlength = false;
				Swal.fire("La password deve contenere almeno 8 caratteri!");
			} else {
				// se anche questa condizione è giusta allora le password sono apposto
				passwordlength = true;
				Swal.fire("Dati utente caricati con successo!");
			}
			
		
			}

		
    });

});
//due condizioni




</script>
</body>

</html>