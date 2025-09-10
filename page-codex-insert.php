<?php
session_start(); 
require_once 'Authentication.php';
require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/config/dz.php';

checkAccess($auth, ['viewer']);
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

</head>

<body>
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

								<h4 class="text-center mb-4">Reimpostazione Password</h4>
								<!--AUTH FORM-->
								<form action="page-resetting-password.php" method="POST">
									<div class="mb-3">
										<label class="form-label">Inserisci codice</label>
										<input name="tokenInserito" id="ic-codice" type="text" class="form-control" value="" required>
									</div>
									<div class="mb-3">
											<a href="login.php">back to login</a>
										</div>
									<div class="text-center">
										<button type="submit" class="btn btn-primary btn-block">SUBMIT</button>
									</div>
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
	
	<!-- il token è salvato nella var globale session
	 in questa pagina l'utente inserisce il codice, invia
	 nella pagina successiva si verifica che il codice sia giusto, altrimenti torna indietro -->
	


	
</body>

</html>