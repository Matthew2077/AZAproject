<?php
session_start(); 
require_once 'Authentication.php';
require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/config/dz.php';

$code = $_SESSION['code'] ?? '';
/*
                            echo "<PRE>";
                            print_r($code);
                            echo "</PRE>";
                            exit();
							
*/

/*
Cosa fa la pagina: 
1. prende il codice di reset password dalla sessione;
2. Quando l'utente clicca su submit, prendo il codice inserito e lo confronto con quello della sessione;
3. Se il codice è corretto, l'utente può inserire una nuova password;
4. Altrimenti può riprovare o farsi rimandare la mail?;

*/

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$inputCode = $_POST['ic-code'] ?? '';
	
	if ($inputCode === $code) {
		// Codice corretto, procedi con la richiesta di nuova password
		header('Location: password-reset.php');
		exit();
	} else {
		// Codice errato, mostra un messaggio di errore
		$errorMessage = "Il codice inserito non è corretto. Riprova.";
	}
}

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

								<h4 class="text-center mb-4">Reset Password</h4>
								<!--AUTH FORM-->
								<form action="" method="POST">
									<div class="mb-3">
										<label class="form-label">Code</label>
										<input name="ic-code" id="ic-code" type="text" class="form-control" value="" required>
									</div>
									<div class="mb-3">
											<a href="login.php">back to login</a>
									</div>
									<div>
										<?php if (isset($errorMessage)) : ?>
											<div class="alert alert-danger text-center">
												<?php echo $errorMessage; ?>
											</div>
										<?php endif; ?>
									</div>
									<div class="text-center">
										<button type="submit" class="btn btn-primary btn-block">SUBMIT</button>
									</div>
									<input type="hidden" value="lostpassword" name="source"> <!--Tipologia-->
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
		
	

	</script>
</body>

</html>