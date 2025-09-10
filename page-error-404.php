<?php
//controllo se sessione è attiva
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}
require_once __DIR__ . '/config/dz.php';
require_once __DIR__ . '/vendor/autoload.php';


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
	<div class="fix-wrapper" id="app-banner" style="background-image:url('assets/images/bg1.jpg'); background-repeat:no-repeat;    background-size: cover; background-position: center;">
		<div class="container">
			<div class="row justify-content-center h-100 align-items-center">
				<div class="inner-content col-xl-12 text-center">
					<h1 class="error-head">404</h1>
					<h3 class="error-para"> The page you were looking for is not found!</h3>
					<p>You 😭 may have mistyped the address or the page may have moved.</p>
					<a href="index.php" class="btn  btn-secondary btn-hover-1"><span>Back to Home</span></a>
					<a href="login.php" class="btn btn-secondary btn-hover-1"><span>Back to Login</span></a>
				</div>
			</div>
		</div>
	</div>
	<!--**********************************
	Scripts
***********************************-->
	<!-- Required vendors -->
	<?php include 'elements/page-js.php'; ?>
</body>

</html>