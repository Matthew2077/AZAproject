<?php
require_once __DIR__ . '/config/dz.php';
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
		<div class="content-body default-height">
			<div class="container-fluid">
				<div class="card profile-overview profile-overview-wide">
					<div class="card-body d-flex">
						<div class="clearfix">
							<div class="d-inline-block position-relative me-sm-4 me-3 mb-3 mb-lg-0">
								<img src="assets/images/avatar/pic7.jpg" alt="" class="rounded-4 profile-avatar">
								<span
									class="fa fa-circle border border-3 border-white text-success position-absolute bottom-0 end-0 rounded-circle"></span>
							</div>
						</div>
						<div class="clearfix d-xl-flex flex-grow-1">
							<div class="clearfix pe-md-5">
								<h3 class="fw-semibold mb-1">Atkinson <img src="assets/images/blue-tick.png" alt="Blue Tick">
								</h3>
								<ul class="d-flex flex-wrap fs-6 align-items-center">
									<li class="me-3 d-inline-flex align-items-center"><i
											class="las la-user me-1 fs-18"></i>Web Designer</li>
									<li class="me-3 d-inline-flex align-items-center"><i
											class="las la-map-marker me-1 fs-18"></i>420 City Path, AU 123-456</li>
									<li class="me-3 d-inline-flex align-items-center"><i
											class="las la-envelope me-1 fs-18"></i>info@gmail.com</li>
								</ul>
								<div class="d-md-flex d-none flex-wrap">
									<div class="border outline-dashed rounded p-2 d-flex align-items-center me-3 mt-3">
										<div
											class="avatar avatar-md style-1 bg-primary-light text-primary rounded d-flex align-items-center justify-content-center">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
												xmlns="http://www.w3.org/2000/svg">
												<path d="M12 1V23" stroke="var(--primary)" stroke-width="2"
													stroke-linecap="round" stroke-linejoin="round" />
												<path
													d="M17 5H9.5C8.57174 5 7.6815 5.36875 7.02513 6.02513C6.36875 6.6815 6 7.57174 6 8.5C6 9.42826 6.36875 10.3185 7.02513 10.9749C7.6815 11.6313 8.57174 12 9.5 12H14.5C15.4283 12 16.3185 12.3687 16.9749 13.0251C17.6313 13.6815 18 14.5717 18 15.5C18 16.4283 17.6313 17.3185 16.9749 17.9749C16.3185 18.6313 15.4283 19 14.5 19H6"
													stroke="var(--primary)" stroke-width="2" stroke-linecap="round"
													stroke-linejoin="round" />
											</svg>
										</div>
										<div class="clearfix ms-2">
											<h3 class="mb-0 fw-semibold lh-1">$1,250</h3>
											<span class="fs-14">Total Earnings</span>
										</div>
									</div>
									<div class="border outline-dashed rounded p-2 d-flex align-items-center me-3 mt-3">
										<div
											class="avatar avatar-md style-1 bg-primary-light text-primary rounded d-flex align-items-center justify-content-center">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
												xmlns="http://www.w3.org/2000/svg">
												<path
													d="M17 21V19C17 17.9391 16.5786 16.9217 15.8284 16.1716C15.0783 15.4214 14.0609 15 13 15H5C3.93913 15 2.92172 15.4214 2.17157 16.1716C1.42143 16.9217 1 17.9391 1 19V21"
													stroke="var(--primary)" stroke-width="2" stroke-linecap="round"
													stroke-linejoin="round" />
												<path
													d="M9 11C11.2091 11 13 9.20914 13 7C13 4.79086 11.2091 3 9 3C6.79086 3 5 4.79086 5 7C5 9.20914 6.79086 11 9 11Z"
													stroke="var(--primary)" stroke-width="2" stroke-linecap="round"
													stroke-linejoin="round" />
												<path
													d="M23 21V19C22.9993 18.1137 22.7044 17.2528 22.1614 16.5523C21.6184 15.8519 20.8581 15.3516 20 15.13"
													stroke="var(--primary)" stroke-width="2" stroke-linecap="round"
													stroke-linejoin="round" />
												<path
													d="M16 3.13C16.8604 3.35031 17.623 3.85071 18.1676 4.55232C18.7122 5.25392 19.0078 6.11683 19.0078 7.005C19.0078 7.89318 18.7122 8.75608 18.1676 9.45769C17.623 10.1593 16.8604 10.6597 16 10.88"
													stroke="var(--primary)" stroke-width="2" stroke-linecap="round"
													stroke-linejoin="round" />
											</svg>
										</div>
										<div class="clearfix ms-2">
											<h3 class="mb-0 fw-semibold lh-1">125</h3>
											<span class="fs-14">New Referrals</span>
										</div>
									</div>
									<div class="border outline-dashed rounded p-2 d-flex align-items-center me-3 mt-3">
										<div
											class="avatar avatar-md style-1 bg-primary-light text-primary rounded d-flex align-items-center justify-content-center">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
												xmlns="http://www.w3.org/2000/svg">
												<path
													d="M20 7H4C2.89543 7 2 7.89543 2 9V19C2 20.1046 2.89543 21 4 21H20C21.1046 21 22 20.1046 22 19V9C22 7.89543 21.1046 7 20 7Z"
													stroke="var(--primary)" stroke-width="2" stroke-linecap="round"
													stroke-linejoin="round" />
												<path
													d="M16 21V5C16 4.46957 15.7893 3.96086 15.4142 3.58579C15.0391 3.21071 14.5304 3 14 3H10C9.46957 3 8.96086 3.21071 8.58579 3.58579C8.21071 3.96086 8 4.46957 8 5V21"
													stroke="var(--primary)" stroke-width="2" stroke-linecap="round"
													stroke-linejoin="round" />
											</svg>
										</div>
										<div class="clearfix ms-2">
											<h3 class="mb-0 fw-semibold lh-1">25</h3>
											<span class="fs-14">New Deals</span>
										</div>
									</div>
								</div>
							</div>
							<div class="clearfix mt-3 mt-xl-0 ms-auto d-flex flex-column col-xl-3">
								<div class="clearfix mb-3 text-xl-end">
									<a href="javascript:void(0);" class="btn btn-light text-dark">Follow</a>
									<a href="javascript:void(0);" class="btn btn-primary ms-2">Offer a Deal</a>
								</div>
								<div class="mt-auto d-flex align-items-center">
									<div class="clearfix me-3">
										<span class="fw-medium text-black d-block mb-1">Progress</span>
										<p class="mb-0 d-flex">
											<svg width="20" height="20" viewBox="0 0 20 20" fill="none"
												xmlns="http://www.w3.org/2000/svg">
												<path d="M5.83334 14.1668L14.1667 5.8335" stroke="var(--bs-success)"
													stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
												</path>
												<path d="M5.83334 5.8335H14.1667V14.1668" stroke="var(--bs-success)"
													stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
												</path>
											</svg>
											<span class="text-success me-1">+3.50%</span>
										</p>
									</div>
									<div id="chartProfileProgress"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="card-footer py-0 d-flex flex-wrap justify-content-between align-items-center px-0">
						<ul class="nav nav-underline nav-underline-primary nav-underline-text-dark nav-underline-gap-x-0"
							id="tabMyProfileBottom" role="tablist">
							<li class="nav-item ms-1" role="presentation">
								<a href="overview.php" class="nav-link py-3 border-3 text-black">Overview</a>
							</li>
							<li class="nav-item ms-1" role="presentation">
								<a href="projects.php" class="nav-link py-3 border-3 text-black">Projects</a>
							</li>
							<li class="nav-item ms-1" role="presentation">
								<a href="campaigns.php"
									class="nav-link py-3 border-3 text-black active">Campaigns</a>
							</li>
							<li class="nav-item ms-1" role="presentation">
								<a href="documents.php" class="nav-link py-3 border-3 text-black">Documents</a>
							</li>
							<li class="nav-item ms-1" role="presentation">
								<a href="followers.php" class="nav-link py-3 border-3 text-black">Followers</a>
							</li>
							<li class="nav-item ms-1" role="presentation">
								<a href="activity.php" class="nav-link py-3 border-3 text-black">Activity</a>
							</li>
						</ul>
						<ul class="d-md-flex d-none py-2">
							<li class="px-1">
								<a class="btn btn-light text-dark" href="javascript:void(0);">
									<i class="fa-brands fa-linkedin-in"></i>
								</a>
							</li>
							<li class="px-1">
								<a class="btn btn-light text-dark" href="javascript:void(0);">
									<i class="fa-brands fa-instagram"></i>
								</a>
							</li>
							<li class="px-1">
								<a class="btn btn-light text-dark" href="javascript:void(0);">
									<i class="fa-brands fa-facebook-f"></i>
								</a>
							</li>
							<li class="px-1">
								<a class="btn btn-light text-dark" href="javascript:void(0);">
									<i class="fa-brands fa-telegram"></i>
								</a>
							</li>
							<li class="px-1">
								<a class="btn btn-light text-dark" href="javascript:void(0);">
									<i class="fa-brands fa-youtube"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>

				<div class="tab-content" id="tabContentMyProfileBottom">
					<div class="row">
						<div class="col-lg-12">
							<div class="d-flex justify-content-between align-items-center mb-3">
								<h5 class="mb-0">My Campaigns</h5>
								<div class="d-flex align-items-center">
									<a href="javascript:void(0)" class="btn btn-primary btn-sm ms-2">+ Add Campaign</a>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-sm-6">
							<div class="card overflow-hidden">
								<div class="card-body">
									<div class="p-2">
										<div class="d-flex justify-content-between mb-4">
											<div class="d-flex align-items-center">
												<div
													class="avatar avatar-md style-1 d-flex align-items-center justify-content-center">
													<img src="assets/images/logo/large/twitch.png" width="35" alt="">
												</div>
												<h3 class="ms-3 fs-16 text-dark">Twitch Ads</h3>
											</div>
											<button type="button"
												class="btn btn-light btn-icon-xxs tp-btn fs-18 align-self-start"><i
													class="flaticon-app"></i></button>
										</div>
										<h2 class="fw-semibold pt-1">$450.00</h2>
										<p class="mb-0">
											<svg width="20" height="20" viewBox="0 0 20 20" fill="none"
												xmlns="http://www.w3.org/2000/svg">
												<path d="M5.83334 14.1668L14.1667 5.8335" stroke="var(--bs-success)"
													stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
												<path d="M5.83334 5.8335H14.1667V14.1668" stroke="var(--bs-success)"
													stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
											</svg>
											<span class="text-success me-1">+32.40%</span>
											more spending
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-sm-6">
							<div class="card overflow-hidden">
								<div class="card-body">
									<div class="p-2">
										<div class="d-flex justify-content-between mb-4">
											<div class="d-flex align-items-center">
												<div
													class="avatar avatar-md style-1 d-flex align-items-center justify-content-center">
													<img src="assets/images/logo/large/twitter.png" width="35" alt="">
												</div>
												<h3 class="ms-3 fs-16 text-dark">Twitch Ads</h3>
											</div>
											<button type="button"
												class="btn btn-light btn-icon-xxs tp-btn fs-18 align-self-start"><i
													class="flaticon-app"></i></button>
										</div>
										<h2 class="fw-semibold pt-1">750K</h2>
										<p class="mb-0">
											<svg width="20" height="20" viewBox="0 0 20 20" fill="none"
												xmlns="http://www.w3.org/2000/svg">
												<path d="M5.83334 14.1668L14.1667 5.8335" stroke="var(--bs-success)"
													stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
												<path d="M5.83334 5.8335H14.1667V14.1668" stroke="var(--bs-success)"
													stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
											</svg>
											<span class="text-success me-1">+8.80%</span>
											folowers growth
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-sm-6">
							<div class="card overflow-hidden">
								<div class="card-body">
									<div class="p-2">
										<div class="d-flex justify-content-between mb-4">
											<div class="d-flex align-items-center">
												<div
													class="avatar avatar-md style-1 d-flex align-items-center justify-content-center">
													<img src="assets/images/logo/large/spotify.png" width="35" alt="">
												</div>
												<h3 class="ms-3 fs-16 text-dark">Spotify Listerners</h3>
											</div>
											<button type="button"
												class="btn btn-light btn-icon-xxs tp-btn fs-18 align-self-start"><i
													class="flaticon-app"></i></button>
										</div>
										<h2 class="fw-semibold pt-1">1,125</h2>
										<p class="mb-0">
											<svg width="20" height="20" viewBox="0 0 20 20" fill="none"
												xmlns="http://www.w3.org/2000/svg">
												<path d="M14.1667 5.8335L5.83337 14.1668" stroke="var(--bs-danger)"
													stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
												<path d="M14.1667 14.1668H5.83337V5.8335" stroke="var(--bs-danger)"
													stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
											</svg>
											<span class="text-danger me-1">-10%</span>
											less comments than usual
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-sm-6">
							<div class="card overflow-hidden">
								<div class="card-body">
									<div class="p-2">
										<div class="d-flex justify-content-between mb-4">
											<div class="d-flex align-items-center">
												<div
													class="avatar avatar-md style-1 d-flex align-items-center justify-content-center">
													<img src="assets/images/logo/large/telegram.png" width="35" alt="">
												</div>
												<h3 class="ms-3 fs-16 text-dark">Telegram Posts</h3>
											</div>
											<button type="button"
												class="btn btn-light btn-icon-xxs tp-btn fs-18 align-self-start"><i
													class="flaticon-app"></i></button>
										</div>
										<h2 class="fw-semibold pt-1">580</h2>
										<p class="mb-0">
											<svg width="20" height="20" viewBox="0 0 20 20" fill="none"
												xmlns="http://www.w3.org/2000/svg">
												<path d="M5.83334 14.1668L14.1667 5.8335" stroke="var(--bs-success)"
													stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
												<path d="M5.83334 5.8335H14.1667V14.1668" stroke="var(--bs-success)"
													stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
											</svg>
											<span class="text-success me-1">+25%</span>
											more spending
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-sm-6">
							<div class="card overflow-hidden">
								<div class="card-body">
									<div class="p-2">
										<div class="d-flex justify-content-between mb-4">
											<div class="d-flex align-items-center">
												<div
													class="avatar avatar-md style-1 d-flex align-items-center justify-content-center">
													<img src="assets/images/logo/large/pinterest.png" width="35" alt="">
												</div>
												<h3 class="ms-3 fs-16 text-dark">Pintrest Posts</h3>
											</div>
											<button type="button"
												class="btn btn-light btn-icon-xxs tp-btn fs-18 align-self-start"><i
													class="flaticon-app"></i></button>
										</div>
										<h2 class="fw-semibold pt-1">120</h2>
										<p class="mb-0">
											<svg width="20" height="20" viewBox="0 0 20 20" fill="none"
												xmlns="http://www.w3.org/2000/svg">
												<path d="M5.83334 14.1668L14.1667 5.8335" stroke="var(--bs-success)"
													stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
												<path d="M5.83334 5.8335H14.1667V14.1668" stroke="var(--bs-success)"
													stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
											</svg>
											<span class="text-success me-1">+58.32%</span>
											more posts
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-sm-6">
							<div class="card overflow-hidden">
								<div class="card-body">
									<div class="p-2">
										<div class="d-flex justify-content-between mb-4">
											<div class="d-flex align-items-center">
												<div
													class="avatar avatar-md style-1 d-flex align-items-center justify-content-center">
													<img src="assets/images/logo/large/github.png" width="35" alt="">
												</div>
												<h3 class="ms-3 fs-16 text-dark">Github Contributes</h3>
											</div>
											<button type="button"
												class="btn btn-light btn-icon-xxs tp-btn fs-18 align-self-start"><i
													class="flaticon-app"></i></button>
										</div>
										<h2 class="fw-semibold pt-1">2,250</h2>
										<p class="mb-0">
											<svg width="20" height="20" viewBox="0 0 20 20" fill="none"
												xmlns="http://www.w3.org/2000/svg">
												<path d="M14.1667 5.8335L5.83337 14.1668" stroke="var(--bs-danger)"
													stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
												<path d="M14.1667 14.1668H5.83337V5.8335" stroke="var(--bs-danger)"
													stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
											</svg>
											<span class="text-danger me-1">-12.50%</span>
											less contributes than usual
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-sm-6">
							<div class="card overflow-hidden">
								<div class="card-body">
									<div class="p-2">
										<div class="d-flex justify-content-between mb-4">
											<div class="d-flex align-items-center">
												<div
													class="avatar avatar-md style-1 d-flex align-items-center justify-content-center">
													<img src="assets/images/logo/large/youtube.png" width="35" alt="">
												</div>
												<h3 class="ms-3 fs-16 text-dark">Youtube Subscribers</h3>
											</div>
											<button type="button"
												class="btn btn-light btn-icon-xxs tp-btn fs-18 align-self-start"><i
													class="flaticon-app"></i></button>
										</div>
										<h2 class="fw-semibold pt-1">350</h2>
										<p class="mb-0">
											<svg width="20" height="20" viewBox="0 0 20 20" fill="none"
												xmlns="http://www.w3.org/2000/svg">
												<path d="M5.83334 14.1668L14.1667 5.8335" stroke="var(--bs-success)"
													stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
												<path d="M5.83334 5.8335H14.1667V14.1668" stroke="var(--bs-success)"
													stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
											</svg>
											<span class="text-success me-1">+5.50%</span>
											subscribewrs growth
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-sm-6">
							<div class="card overflow-hidden">
								<div class="card-body">
									<div class="p-2">
										<div class="d-flex justify-content-between mb-4">
											<div class="d-flex align-items-center">
												<div
													class="avatar avatar-md style-1 d-flex align-items-center justify-content-center">
													<img src="assets/images/logo/large/reddit.png" width="35" alt="">
												</div>
												<h3 class="ms-3 fs-16 text-dark">Reddit Awards</h3>
											</div>
											<button type="button"
												class="btn btn-light btn-icon-xxs tp-btn fs-18 align-self-start"><i
													class="flaticon-app"></i></button>
										</div>
										<h2 class="fw-semibold pt-1">1.5M</h2>
										<p class="mb-0">
											<svg width="20" height="20" viewBox="0 0 20 20" fill="none"
												xmlns="http://www.w3.org/2000/svg">
												<path d="M5.83334 14.1668L14.1667 5.8335" stroke="var(--bs-success)"
													stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
												<path d="M5.83334 5.8335H14.1667V14.1668" stroke="var(--bs-success)"
													stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
											</svg>
											<span class="text-success me-1">+5.52%</span>
											folowers growth
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!--**********************************
            Footer start
        ***********************************-->
		<?php include 'elements/footer.php'; ?>
		<!--**********************************
            Footer end
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
</body>
</body>

</html>