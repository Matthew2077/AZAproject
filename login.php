<?php
require_once __DIR__ . '/config/dz.php';




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
		<div class="login-aside text-center d-none d-sm-flex flex-column flex-row-auto">
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
								<div class="text-center d-block d-sm-none mb-4 pt-5">
									<a href="index.php"><img src="assets/images/logo-full.png" class="dark-login" alt=""></a>
									<a href="index.php"><img src="assets/images/logo-full-white.png" class="light-login" alt=""></a>
								</div>

								<h4 class="text-center mb-4">Sign in your account</h4>
								<!--AUTH FORM-->
								<form action="Authentication.php" method="POST">
									<div class="mb-3">
										<!--MAIL-->
										<label class="mb-1 form-label">Email</label>
										<input name="email" id="ic-mail" type="email" class="form-control" value="">
									</div>
									<div class="mb-3">
										<label class="mb-1 form-label">Password</label>
										<div class="position-relative">
											<!--PASSWORD-->
											<input name="password" id="ic-password" type="password" class="form-control" value="">
											<span class="show-pass eye">
												<i class="fa fa-eye-slash"></i>
												<i class="fa fa-eye"></i>
											</span>
										</div>
									</div>
									<div class="form-row d-flex justify-content-between mt-4 mb-2">
										<div class="mb-3">
											<div class="form-check custom-checkbox ms-1">
												<input name="remember" type="checkbox" class="form-check-input" id="basic_checkbox_1">
												<label class="form-check-label" for="basic_checkbox_1">Remember me</label>
											</div>
										</div>
										<div class="mb-3">
											<a href="password-forgot.php">Forgot Password?</a>
										</div>
									</div>
									<div class="text-center">
										<input type="hidden" name="action" value="login" >
										<button type="submit" class="btn btn-primary btn-block">Sign Me In</button>
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





</body>
<script>
//MOSTRA ERRORI




// Swal.fire("Nessun account trovato con quell'indirizzo email!");
// Swal.fire("Email o password non corretti!");

</script>
</html>