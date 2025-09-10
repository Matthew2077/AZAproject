<?php
session_start(); 
require_once 'Authentication.php';
require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/config/dz.php';

$email = $_SESSION["email"];
//vedi se le password sono uguali
// se si , invia il form e si va in backend

if (isset($_GET['error'])) {
    $errormsg = urldecode($_GET['error']);
   
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<!-- PAGE TITLE HERE -->
	<title><?php echo $DexignZoneSettings['site_level']['site_title'] ?></title>

	<?php include 'elements/meta.php'; ?>

	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="<?php echo $DexignZoneSettings['site_level']['favicon'] ?>">

	<?php include 'elements/page-css.php'; ?>

		<!--SWEET ALERT-->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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

								<h4 class="text-center mb-4">Reimposta la tua password</h4>
								<!--AUTH FORM-->
								<form action="Authentication.php" method="POST">
								<!--PASSWORD-->
									<div class="mb-3">
										<label class="mb-1 form-label">New Password</label>
										<div class="position-relative">
											
											<input name="password" id="ic-password" type="password" class="form-control" value="">
											<span class="show-pass eye">
												<i class="fa fa-eye-slash"></i>
												<i class="fa fa-eye"></i>
											</span>
										</div>
									</div>
									<!--PASSWORD confirm-->
									<div class="mb-3">
										<label class="mb-1 form-label">Confirm Password</label>
										<div class="position-relative">
											
											<input name="passwordconfirm" id="ic-passwordconfirm" type="password" class="form-control" value="">
											<span class="show-pass eye">
												<i class="fa fa-eye-slash"></i>
												<i class="fa fa-eye"></i>
											</span>
										</div>
									</div>
									<div class="mb-3">
											<a href="login.php">back to login</a>
										</div>
									<div class="text-center">
										<button type="submit" class="btn btn-primary btn-block">SUBMIT</button>
									</div>
									<input type="hidden" value="resetpassword" name="action"> <!--Tipologia-->
								</form>
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


		<script>
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
				Swal.fire("Le password corrispondono!");
			}
			
		
			}

		
    });

	</script>
</body>

</html>