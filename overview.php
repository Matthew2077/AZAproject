<?php
require_once __DIR__ . '/config/dz.php';
session_start()
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>
		<?php echo $DexignZoneSettings['site_level']['site_title'] ?>
	</title>

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
		<div class="content-body">
			<div class="container-fluid">
				<div class="card profile-overview profile-overview-wide">
					<div class="card-body d-flex">
						<div class="clearfix">
							<div class="d-inline-block position-relative me-sm-4 me-3 mb-3 mb-lg-0">
								<img src="assets/images/avatar/pic7.jpg" alt="" class="rounded-4 profile-avatar">
								<span class="fa fa-circle border border-3 border-white text-success position-absolute bottom-0 end-0 rounded-circle"></span>
							</div>
						</div>
						<div class="clearfix d-xl-flex flex-grow-1">
							<div class="clearfix pe-md-5">
								<h3 class="fw-semibold mb-1">Atkinson <img src="assets/images/blue-tick.png" alt="Blue Tick"></h3>
								<ul class="d-flex flex-wrap fs-6 align-items-center">
									<li class="me-3 d-inline-flex align-items-center"><i class="las la-user me-1 fs-18"></i>Web Designer</li>
									<li class="me-3 d-inline-flex align-items-center"><i class="las la-map-marker me-1 fs-18"></i>420 City Path, AU 123-456</li>
									<li class="me-3 d-inline-flex align-items-center"><i class="las la-envelope me-1 fs-18"></i>info@gmail.com</li>
								</ul>
								<div class="d-md-flex d-none flex-wrap">
									<div class="border outline-dashed rounded p-2 d-flex align-items-center me-3 mt-3">
										<div class="avatar avatar-md style-1 bg-primary-light text-primary rounded d-flex align-items-center justify-content-center">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M12 1V23" stroke="var(--primary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
												<path d="M17 5H9.5C8.57174 5 7.6815 5.36875 7.02513 6.02513C6.36875 6.6815 6 7.57174 6 8.5C6 9.42826 6.36875 10.3185 7.02513 10.9749C7.6815 11.6313 8.57174 12 9.5 12H14.5C15.4283 12 16.3185 12.3687 16.9749 13.0251C17.6313 13.6815 18 14.5717 18 15.5C18 16.4283 17.6313 17.3185 16.9749 17.9749C16.3185 18.6313 15.4283 19 14.5 19H6" stroke="var(--primary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
											</svg>
										</div>
										<div class="clearfix ms-2">
											<h3 class="mb-0 fw-semibold lh-1">$1,250</h3>
											<span class="fs-14">Total Earnings</span>
										</div>
									</div>
									<div class="border outline-dashed rounded p-2 d-flex align-items-center me-3 mt-3">
										<div class="avatar avatar-md style-1 bg-primary-light text-primary rounded d-flex align-items-center justify-content-center">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M17 21V19C17 17.9391 16.5786 16.9217 15.8284 16.1716C15.0783 15.4214 14.0609 15 13 15H5C3.93913 15 2.92172 15.4214 2.17157 16.1716C1.42143 16.9217 1 17.9391 1 19V21" stroke="var(--primary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
												<path d="M9 11C11.2091 11 13 9.20914 13 7C13 4.79086 11.2091 3 9 3C6.79086 3 5 4.79086 5 7C5 9.20914 6.79086 11 9 11Z" stroke="var(--primary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
												<path d="M23 21V19C22.9993 18.1137 22.7044 17.2528 22.1614 16.5523C21.6184 15.8519 20.8581 15.3516 20 15.13" stroke="var(--primary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
												<path d="M16 3.13C16.8604 3.35031 17.623 3.85071 18.1676 4.55232C18.7122 5.25392 19.0078 6.11683 19.0078 7.005C19.0078 7.89318 18.7122 8.75608 18.1676 9.45769C17.623 10.1593 16.8604 10.6597 16 10.88" stroke="var(--primary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
											</svg>
										</div>
										<div class="clearfix ms-2">
											<h3 class="mb-0 fw-semibold lh-1">125</h3>
											<span class="fs-14">New Referrals</span>
										</div>
									</div>
									<div class="border outline-dashed rounded p-2 d-flex align-items-center me-3 mt-3">
										<div class="avatar avatar-md style-1 bg-primary-light text-primary rounded d-flex align-items-center justify-content-center">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M20 7H4C2.89543 7 2 7.89543 2 9V19C2 20.1046 2.89543 21 4 21H20C21.1046 21 22 20.1046 22 19V9C22 7.89543 21.1046 7 20 7Z" stroke="var(--primary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
												<path d="M16 21V5C16 4.46957 15.7893 3.96086 15.4142 3.58579C15.0391 3.21071 14.5304 3 14 3H10C9.46957 3 8.96086 3.21071 8.58579 3.58579C8.21071 3.96086 8 4.46957 8 5V21" stroke="var(--primary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
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
											<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M5.83334 14.1668L14.1667 5.8335" stroke="var(--bs-success)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M5.83334 5.8335H14.1667V14.1668" stroke="var(--bs-success)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
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
						<ul class="nav nav-underline nav-underline-primary nav-underline-text-dark nav-underline-gap-x-0" id="tabMyProfileBottom" role="tablist">
							<li class="nav-item ms-1" role="presentation">
								<a href="overview.php" class="nav-link py-3 border-3 text-black active">Overview</a>
							</li>
							<li class="nav-item ms-1" role="presentation">
								<a href="projects.php" class="nav-link py-3 border-3 text-black">Projects</a>
							</li>
							<li class="nav-item ms-1" role="presentation">
								<a href="campaigns.php" class="nav-link py-3 border-3 text-black">Campaigns</a>
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
						<div class="col-xl-6">
							<div class="row">

								<div class="col-lg-12">
									<div class="card card-comment">
										<div class="card-body pb-0">
											<div class="d-flex justify-content-between mb-2">
												<div class="d-flex align-items-center py-2">
													<div class="d-inline-block position-relative">
														<img src="assets/images/avatar/avatar1.jpg" alt="" class="rounded avatar avatar-md style-1">
													</div>
													<div class="clearfix ms-2">
														<h6 class="mb-0 fw-semibold">Jackson</h6>
														<span class="fs-13">Yestarday at 4:30 PM</span>
													</div>
												</div>
												<div class="clearfix ms-auto">
													<button type="button" class="btn btn-light btn-icon-xxs tp-btn fs-18 align-self-start"><i class="bi bi-grid"></i></button>
												</div>
											</div>
											<div class="clearfix text-black">
												<p class="fs-14 mb-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
											</div>
											<div class="clearfix pt-1">
												<a href="javascript:void(0);" class="me-3">
													<i class="fa-regular fa-image"></i> 25
												</a>
												<a href="javascript:void(0);" class="post-like">
													<i class="fa-regular fa-heart"></i> 75
												</a>
											</div>
											<div class="position-relative border-top border-opacity-10 d-flex align-items-center mt-3">
												<input type="text" class="form-control p-0 rounded-0 border-0 pe-2 bg-transparent" placeholder="Reply..">
												<div class="d-flex">
													<a href="javascript:void(0);" class="p-2">
														<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M14.2934 7.36665L8.1667 13.4933C7.41613 14.2439 6.39815 14.6655 5.3367 14.6655C4.27524 14.6655 3.25726 14.2439 2.5067 13.4933C1.75613 12.7428 1.33447 11.7248 1.33447 10.6633C1.33447 9.60186 1.75613 8.58388 2.5067 7.83332L8.63336 1.70665C9.13374 1.20628 9.81239 0.925171 10.52 0.925171C11.2277 0.925171 11.9063 1.20628 12.4067 1.70665C12.9071 2.20703 13.1882 2.88568 13.1882 3.59332C13.1882 4.30096 12.9071 4.97961 12.4067 5.47999L6.27336 11.6067C6.02318 11.8568 5.68385 11.9974 5.33003 11.9974C4.97621 11.9974 4.63688 11.8568 4.3867 11.6067C4.13651 11.3565 3.99596 11.0171 3.99596 10.6633C3.99596 10.3095 4.13651 9.97017 4.3867 9.71999L10.0467 4.06665" stroke="#888888" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
														</svg>
													</a>
													<a href="javascript:void(0);" class="p-2">
														<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M14 6.66669C14 11.3334 8 15.3334 8 15.3334C8 15.3334 2 11.3334 2 6.66669C2 5.07539 2.63214 3.54927 3.75736 2.42405C4.88258 1.29883 6.4087 0.666687 8 0.666687C9.5913 0.666687 11.1174 1.29883 12.2426 2.42405C13.3679 3.54927 14 5.07539 14 6.66669Z" stroke="#888888" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
															<path d="M8 8.66669C9.10457 8.66669 10 7.77126 10 6.66669C10 5.56212 9.10457 4.66669 8 4.66669C6.89543 4.66669 6 5.56212 6 6.66669C6 7.77126 6.89543 8.66669 8 8.66669Z" stroke="#888888" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
														</svg>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="col-lg-12">
									<div class="card card-comment">
										<div class="card-body pb-0">
											<div class="d-flex justify-content-between mb-2">
												<div class="d-flex align-items-center py-2">
													<div class="d-inline-block position-relative">
														<img src="assets/images/avatar/avatar2.jpg" alt="" class="rounded avatar avatar-md style-1">
													</div>
													<div class="clearfix ms-2">
														<h6 class="mb-0 fw-semibold">Kennedy</h6>
														<span class="fs-13">Yestarday at 5:30 PM</span>
													</div>
												</div>
												<div class="clearfix ms-auto">
													<button type="button" class="btn btn-light btn-icon-xxs tp-btn fs-18 align-self-start"><i class="bi bi-grid"></i></button>
												</div>
											</div>
											<div class="gallery-grid rows-3" id="lightgallery">
												<a href="images/post/img-full1.jpg" data-exthumbimage="images/post/img-full1.jpg" data-src="assets/images/post/img-full1.jpg" class="grid-item colspan-3 rowspan-2">
													<img src="assets/images/post/img-full1.jpg" alt="">
												</a>
												<a href="images/post/img2.jpg" data-exthumbimage="images/post/img2.jpg" data-src="assets/images/post/img2.jpg" class="grid-item">
													<img src="assets/images/post/img2.jpg" alt="">
												</a>
												<a href="images/post/img1.jpg" data-exthumbimage="images/post/img1.jpg" data-src="assets/images/post/img1.jpg" class="grid-item">
													<img src="assets/images/post/img1.jpg" alt="">
												</a>
												<a href="images/post/img3.jpg" data-exthumbimage="images/post/img3.jpg" data-src="assets/images/post/img3.jpg" class="grid-item gallery-more" data-more="+06">
													<img src="assets/images/post/img3.jpg" alt="">
												</a>
											</div>
											<div class="clearfix text-black">
												<p class="fs-14 mb-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
											</div>
											<div class="clearfix pt-1">
												<a href="javascript:void(0);" class="me-3">
													<i class="fa-regular fa-image"></i> 25
												</a>
												<a href="javascript:void(0);" class="post-like">
													<i class="fa-regular fa-heart"></i> 75
												</a>
											</div>
											<div class="position-relative border-top border-opacity-10 d-flex align-items-center mt-3">
												<input type="text" class="form-control p-0 rounded-0 border-0 pe-2 bg-transparent" placeholder="Reply..">
												<div class="d-flex">
													<a href="javascript:void(0);" class="p-2">
														<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M14.2934 7.36665L8.1667 13.4933C7.41613 14.2439 6.39815 14.6655 5.3367 14.6655C4.27524 14.6655 3.25726 14.2439 2.5067 13.4933C1.75613 12.7428 1.33447 11.7248 1.33447 10.6633C1.33447 9.60186 1.75613 8.58388 2.5067 7.83332L8.63336 1.70665C9.13374 1.20628 9.81239 0.925171 10.52 0.925171C11.2277 0.925171 11.9063 1.20628 12.4067 1.70665C12.9071 2.20703 13.1882 2.88568 13.1882 3.59332C13.1882 4.30096 12.9071 4.97961 12.4067 5.47999L6.27336 11.6067C6.02318 11.8568 5.68385 11.9974 5.33003 11.9974C4.97621 11.9974 4.63688 11.8568 4.3867 11.6067C4.13651 11.3565 3.99596 11.0171 3.99596 10.6633C3.99596 10.3095 4.13651 9.97017 4.3867 9.71999L10.0467 4.06665" stroke="#888888" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
														</svg>
													</a>
													<a href="javascript:void(0);" class="p-2">
														<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M14 6.66669C14 11.3334 8 15.3334 8 15.3334C8 15.3334 2 11.3334 2 6.66669C2 5.07539 2.63214 3.54927 3.75736 2.42405C4.88258 1.29883 6.4087 0.666687 8 0.666687C9.5913 0.666687 11.1174 1.29883 12.2426 2.42405C13.3679 3.54927 14 5.07539 14 6.66669Z" stroke="#888888" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
															<path d="M8 8.66669C9.10457 8.66669 10 7.77126 10 6.66669C10 5.56212 9.10457 4.66669 8 4.66669C6.89543 4.66669 6 5.56212 6 6.66669C6 7.77126 6.89543 8.66669 8 8.66669Z" stroke="#888888" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
														</svg>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="col-lg-12">
									<div class="card card-comment">
										<div class="card-body pb-0">
											<div class="d-flex justify-content-between mb-2">
												<div class="d-flex align-items-center py-2">
													<div class="d-inline-block position-relative">
														<img src="assets/images/avatar/avatar3.jpg" alt="" class="rounded avatar avatar-md style-1">
													</div>
													<div class="clearfix ms-2">
														<h6 class="mb-0 fw-semibold">Kennedy</h6>
														<span class="fs-13">Yestarday at 5:30 PM</span>
													</div>
												</div>
												<div class="clearfix ms-auto">
													<button type="button" class="btn btn-light btn-icon-xxs tp-btn fs-18 align-self-start"><i class="bi bi-grid"></i></button>
												</div>
											</div>
											<div class="gallery-grid rows-3" id="lightgallery2">
												<a href="images/post/img-full2.jpg" data-exthumbimage="images/post/img-full2.jpg" data-src="assets/images/post/img-full2.jpg" class="grid-item colspan-2 rowspan-3">
													<img src="assets/images/post/img-full2.jpg" alt="">
												</a>
												<a href="images/post/img4.jpg" data-exthumbimage="images/post/img4.jpg" data-src="assets/images/post/img4.jpg" class="grid-item">
													<img src="assets/images/post/img4.jpg" alt="">
												</a>
												<a href="images/post/img5.jpg" data-exthumbimage="images/post/img5.jpg" data-src="assets/images/post/img5.jpg" class="grid-item">
													<img src="assets/images/post/img5.jpg" alt="">
												</a>
												<a href="images/post/img6.jpg" data-exthumbimage="images/post/img6.jpg" data-src="assets/images/post/img6.jpg" class="grid-item gallery-more" data-more="+3">
													<img src="assets/images/post/img6.jpg" alt="">
												</a>
											</div>
											<div class="clearfix text-black">
												<p class="fs-14 mb-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
											</div>
											<div class="clearfix pt-1">
												<a href="javascript:void(0);" class="me-3">
													<i class="fa-regular fa-image"></i> 25
												</a>
												<a href="javascript:void(0);" class="post-like">
													<i class="fa-regular fa-heart"></i> 75
												</a>
											</div>
											<div class="position-relative border-top border-opacity-10 d-flex align-items-center mt-3">
												<input type="text" class="form-control p-0 rounded-0 border-0 pe-2 bg-transparent" placeholder="Reply..">
												<div class="d-flex">
													<a href="javascript:void(0);" class="p-2">
														<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M14.2934 7.36665L8.1667 13.4933C7.41613 14.2439 6.39815 14.6655 5.3367 14.6655C4.27524 14.6655 3.25726 14.2439 2.5067 13.4933C1.75613 12.7428 1.33447 11.7248 1.33447 10.6633C1.33447 9.60186 1.75613 8.58388 2.5067 7.83332L8.63336 1.70665C9.13374 1.20628 9.81239 0.925171 10.52 0.925171C11.2277 0.925171 11.9063 1.20628 12.4067 1.70665C12.9071 2.20703 13.1882 2.88568 13.1882 3.59332C13.1882 4.30096 12.9071 4.97961 12.4067 5.47999L6.27336 11.6067C6.02318 11.8568 5.68385 11.9974 5.33003 11.9974C4.97621 11.9974 4.63688 11.8568 4.3867 11.6067C4.13651 11.3565 3.99596 11.0171 3.99596 10.6633C3.99596 10.3095 4.13651 9.97017 4.3867 9.71999L10.0467 4.06665" stroke="#888888" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
														</svg>
													</a>
													<a href="javascript:void(0);" class="p-2">
														<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M14 6.66669C14 11.3334 8 15.3334 8 15.3334C8 15.3334 2 11.3334 2 6.66669C2 5.07539 2.63214 3.54927 3.75736 2.42405C4.88258 1.29883 6.4087 0.666687 8 0.666687C9.5913 0.666687 11.1174 1.29883 12.2426 2.42405C13.3679 3.54927 14 5.07539 14 6.66669Z" stroke="#888888" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
															<path d="M8 8.66669C9.10457 8.66669 10 7.77126 10 6.66669C10 5.56212 9.10457 4.66669 8 4.66669C6.89543 4.66669 6 5.56212 6 6.66669C6 7.77126 6.89543 8.66669 8 8.66669Z" stroke="#888888" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
														</svg>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="col-lg-12">
									<div class="card card-comment">
										<div class="card-body pb-0">
											<div class="d-flex justify-content-between mb-2">
												<div class="d-flex align-items-center py-2">
													<div class="d-inline-block position-relative">
														<img src="assets/images/avatar/avatar4.jpg" alt="" class="rounded avatar avatar-md style-1">
													</div>
													<div class="clearfix ms-2">
														<h6 class="mb-0 fw-semibold">Kennedy</h6>
														<span class="fs-13">Yestarday at 5:30 PM</span>
													</div>
												</div>
												<div class="clearfix ms-auto">
													<button type="button" class="btn btn-light btn-icon-xxs tp-btn fs-18 align-self-start"><i class="bi bi-grid"></i></button>
												</div>
											</div>
											<div class="post-quote bg-purple p-4 text-center mb-2 rounded">
												<h3 class="text-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</h3>
											</div>
											<div class="clearfix text-black">
												<p class="fs-14 mb-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
											</div>
											<div class="clearfix pt-1">
												<a href="javascript:void(0);" class="me-3">
													<i class="fa-regular fa-image"></i> 25
												</a>
												<a href="javascript:void(0);" class="post-like">
													<i class="fa-regular fa-heart"></i> 75
												</a>
											</div>
											<div class="position-relative border-top border-opacity-10 d-flex align-items-center mt-3">
												<input type="text" class="form-control p-0 rounded-0 border-0 pe-2 bg-transparent" placeholder="Reply..">
												<div class="d-flex">
													<a href="javascript:void(0);" class="p-2">
														<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M14.2934 7.36665L8.1667 13.4933C7.41613 14.2439 6.39815 14.6655 5.3367 14.6655C4.27524 14.6655 3.25726 14.2439 2.5067 13.4933C1.75613 12.7428 1.33447 11.7248 1.33447 10.6633C1.33447 9.60186 1.75613 8.58388 2.5067 7.83332L8.63336 1.70665C9.13374 1.20628 9.81239 0.925171 10.52 0.925171C11.2277 0.925171 11.9063 1.20628 12.4067 1.70665C12.9071 2.20703 13.1882 2.88568 13.1882 3.59332C13.1882 4.30096 12.9071 4.97961 12.4067 5.47999L6.27336 11.6067C6.02318 11.8568 5.68385 11.9974 5.33003 11.9974C4.97621 11.9974 4.63688 11.8568 4.3867 11.6067C4.13651 11.3565 3.99596 11.0171 3.99596 10.6633C3.99596 10.3095 4.13651 9.97017 4.3867 9.71999L10.0467 4.06665" stroke="#888888" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
														</svg>
													</a>
													<a href="javascript:void(0);" class="p-2">
														<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M14 6.66669C14 11.3334 8 15.3334 8 15.3334C8 15.3334 2 11.3334 2 6.66669C2 5.07539 2.63214 3.54927 3.75736 2.42405C4.88258 1.29883 6.4087 0.666687 8 0.666687C9.5913 0.666687 11.1174 1.29883 12.2426 2.42405C13.3679 3.54927 14 5.07539 14 6.66669Z" stroke="#888888" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
															<path d="M8 8.66669C9.10457 8.66669 10 7.77126 10 6.66669C10 5.56212 9.10457 4.66669 8 4.66669C6.89543 4.66669 6 5.56212 6 6.66669C6 7.77126 6.89543 8.66669 8 8.66669Z" stroke="#888888" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
														</svg>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="col-lg-12">
									<div class="card card-comment">
										<div class="card-body pb-0">
											<div class="d-flex justify-content-between mb-2">
												<div class="d-flex align-items-center py-2">
													<div class="d-inline-block position-relative">
														<img src="assets/images/avatar/avatar5.jpg" alt="" class="rounded avatar avatar-md style-1">
													</div>
													<div class="clearfix ms-2">
														<h6 class="mb-0 fw-semibold">Kennedy</h6>
														<span class="fs-13">Yestarday at 5:30 PM</span>
													</div>
												</div>
												<div class="clearfix ms-auto">
													<button type="button" class="btn btn-light btn-icon-xxs tp-btn fs-18 align-self-start"><i class="bi bi-grid"></i></button>
												</div>
											</div>
											<div class="post-quote post-quote-img bg-purple p-4 text-center mb-2 rounded" style="background-image: url('assets/images/post/img8.jpg');">
												<div class="quote-inner">
													<h3 class="text-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</h3>
												</div>
											</div>
											<div class="clearfix text-black">
												<p class="fs-14 mb-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
											</div>
											<div class="clearfix pt-1">
												<a href="javascript:void(0);" class="me-3">
													<i class="fa-regular fa-image"></i> 25
												</a>
												<a href="javascript:void(0);" class="post-like">
													<i class="fa-regular fa-heart"></i> 75
												</a>
											</div>
											<div class="position-relative border-top border-opacity-10 d-flex align-items-center mt-3">
												<input type="text" class="form-control p-0 rounded-0 border-0 pe-2 bg-transparent" placeholder="Reply..">
												<div class="d-flex">
													<a href="javascript:void(0);" class="p-2">
														<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M14.2934 7.36665L8.1667 13.4933C7.41613 14.2439 6.39815 14.6655 5.3367 14.6655C4.27524 14.6655 3.25726 14.2439 2.5067 13.4933C1.75613 12.7428 1.33447 11.7248 1.33447 10.6633C1.33447 9.60186 1.75613 8.58388 2.5067 7.83332L8.63336 1.70665C9.13374 1.20628 9.81239 0.925171 10.52 0.925171C11.2277 0.925171 11.9063 1.20628 12.4067 1.70665C12.9071 2.20703 13.1882 2.88568 13.1882 3.59332C13.1882 4.30096 12.9071 4.97961 12.4067 5.47999L6.27336 11.6067C6.02318 11.8568 5.68385 11.9974 5.33003 11.9974C4.97621 11.9974 4.63688 11.8568 4.3867 11.6067C4.13651 11.3565 3.99596 11.0171 3.99596 10.6633C3.99596 10.3095 4.13651 9.97017 4.3867 9.71999L10.0467 4.06665" stroke="#888888" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
														</svg>
													</a>
													<a href="javascript:void(0);" class="p-2">
														<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M14 6.66669C14 11.3334 8 15.3334 8 15.3334C8 15.3334 2 11.3334 2 6.66669C2 5.07539 2.63214 3.54927 3.75736 2.42405C4.88258 1.29883 6.4087 0.666687 8 0.666687C9.5913 0.666687 11.1174 1.29883 12.2426 2.42405C13.3679 3.54927 14 5.07539 14 6.66669Z" stroke="#888888" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
															<path d="M8 8.66669C9.10457 8.66669 10 7.77126 10 6.66669C10 5.56212 9.10457 4.66669 8 4.66669C6.89543 4.66669 6 5.56212 6 6.66669C6 7.77126 6.89543 8.66669 8 8.66669Z" stroke="#888888" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
														</svg>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="col-lg-12">
									<div class="card card-comment">
										<div class="card-body pb-0">
											<div class="d-flex justify-content-between mb-2">
												<div class="d-flex align-items-center py-2">
													<div class="d-inline-block position-relative">
														<img src="assets/images/avatar/avatar6.jpg" alt="" class="rounded avatar avatar-md style-1">
													</div>
													<div class="clearfix ms-2">
														<h6 class="mb-0 fw-semibold">Kennedy</h6>
														<span class="fs-13">Yestarday at 5:30 PM</span>
													</div>
												</div>
												<div class="clearfix ms-auto">
													<button type="button" class="btn btn-light btn-icon-xxs tp-btn fs-18 align-self-start"><i class="bi bi-grid"></i></button>
												</div>
											</div>
											<div class="clearfix mb-2">
												<img src="assets/images/post/img7.jpg" alt="" class="rounded w-100">
											</div>
											<div class="clearfix text-black">
												<p class="fs-14 mb-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
											</div>
											<div class="clearfix pt-1">
												<a href="javascript:void(0);" class="me-3">
													<i class="fa-regular fa-image"></i> 25
												</a>
												<a href="javascript:void(0);" class="post-like">
													<i class="fa-regular fa-heart"></i> 75
												</a>
											</div>
											<div class="position-relative border-top border-opacity-10 d-flex align-items-center mt-3">
												<input type="text" class="form-control p-0 rounded-0 border-0 pe-2 bg-transparent" placeholder="Reply..">
												<div class="d-flex">
													<a href="javascript:void(0);" class="p-2">
														<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M14.2934 7.36665L8.1667 13.4933C7.41613 14.2439 6.39815 14.6655 5.3367 14.6655C4.27524 14.6655 3.25726 14.2439 2.5067 13.4933C1.75613 12.7428 1.33447 11.7248 1.33447 10.6633C1.33447 9.60186 1.75613 8.58388 2.5067 7.83332L8.63336 1.70665C9.13374 1.20628 9.81239 0.925171 10.52 0.925171C11.2277 0.925171 11.9063 1.20628 12.4067 1.70665C12.9071 2.20703 13.1882 2.88568 13.1882 3.59332C13.1882 4.30096 12.9071 4.97961 12.4067 5.47999L6.27336 11.6067C6.02318 11.8568 5.68385 11.9974 5.33003 11.9974C4.97621 11.9974 4.63688 11.8568 4.3867 11.6067C4.13651 11.3565 3.99596 11.0171 3.99596 10.6633C3.99596 10.3095 4.13651 9.97017 4.3867 9.71999L10.0467 4.06665" stroke="#888888" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
														</svg>
													</a>
													<a href="javascript:void(0);" class="p-2">
														<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M14 6.66669C14 11.3334 8 15.3334 8 15.3334C8 15.3334 2 11.3334 2 6.66669C2 5.07539 2.63214 3.54927 3.75736 2.42405C4.88258 1.29883 6.4087 0.666687 8 0.666687C9.5913 0.666687 11.1174 1.29883 12.2426 2.42405C13.3679 3.54927 14 5.07539 14 6.66669Z" stroke="#888888" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
															<path d="M8 8.66669C9.10457 8.66669 10 7.77126 10 6.66669C10 5.56212 9.10457 4.66669 8 4.66669C6.89543 4.66669 6 5.56212 6 6.66669C6 7.77126 6.89543 8.66669 8 8.66669Z" stroke="#888888" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
														</svg>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="col-lg-12">
									<div class="card">
										<div class="card-body pb-0">
											<div class="d-flex justify-content-between mb-2">
												<div class="d-flex align-items-center py-2">
													<div class="d-inline-block position-relative">
														<img src="assets/images/avatar/avatar7.jpg" alt="" class="rounded avatar avatar-md style-1">
													</div>
													<div class="clearfix ms-2">
														<h6 class="mb-0 fw-semibold">Kennedy</h6>
														<span class="fs-13">Yestarday at 5:30 PM</span>
													</div>
												</div>
												<div class="clearfix ms-auto">
													<button type="button" class="btn btn-light btn-icon-xxs tp-btn fs-18 align-self-start"><i class="bi bi-grid"></i></button>
												</div>
											</div>
											<div class="clearfix mb-2">
												<iframe class="rounded w-100" width="100" height="166" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/539018871&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe>
											</div>
											<div class="clearfix text-black">
												<p class="fs-14 mb-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
											</div>
											<div class="clearfix pt-1">
												<a href="javascript:void(0);" class="me-3">
													<i class="fa-regular fa-image"></i> 25
												</a>
												<a href="javascript:void(0);" class="post-like">
													<i class="fa-regular fa-heart"></i> 75
												</a>
											</div>
											<div class="position-relative border-top border-opacity-10 d-flex align-items-center mt-3">
												<input type="text" class="form-control p-0 rounded-0 border-0 pe-2 bg-transparent" placeholder="Reply..">
												<div class="d-flex">
													<a href="javascript:void(0);" class="p-2">
														<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M14.2934 7.36665L8.1667 13.4933C7.41613 14.2439 6.39815 14.6655 5.3367 14.6655C4.27524 14.6655 3.25726 14.2439 2.5067 13.4933C1.75613 12.7428 1.33447 11.7248 1.33447 10.6633C1.33447 9.60186 1.75613 8.58388 2.5067 7.83332L8.63336 1.70665C9.13374 1.20628 9.81239 0.925171 10.52 0.925171C11.2277 0.925171 11.9063 1.20628 12.4067 1.70665C12.9071 2.20703 13.1882 2.88568 13.1882 3.59332C13.1882 4.30096 12.9071 4.97961 12.4067 5.47999L6.27336 11.6067C6.02318 11.8568 5.68385 11.9974 5.33003 11.9974C4.97621 11.9974 4.63688 11.8568 4.3867 11.6067C4.13651 11.3565 3.99596 11.0171 3.99596 10.6633C3.99596 10.3095 4.13651 9.97017 4.3867 9.71999L10.0467 4.06665" stroke="#888888" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
														</svg>
													</a>
													<a href="javascript:void(0);" class="p-2">
														<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M14 6.66669C14 11.3334 8 15.3334 8 15.3334C8 15.3334 2 11.3334 2 6.66669C2 5.07539 2.63214 3.54927 3.75736 2.42405C4.88258 1.29883 6.4087 0.666687 8 0.666687C9.5913 0.666687 11.1174 1.29883 12.2426 2.42405C13.3679 3.54927 14 5.07539 14 6.66669Z" stroke="#888888" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
															<path d="M8 8.66669C9.10457 8.66669 10 7.77126 10 6.66669C10 5.56212 9.10457 4.66669 8 4.66669C6.89543 4.66669 6 5.56212 6 6.66669C6 7.77126 6.89543 8.66669 8 8.66669Z" stroke="#888888" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
														</svg>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="col-lg-12">
									<div class="card card-comment">
										<div class="card-body pb-0">
											<div class="d-flex justify-content-between mb-2">
												<div class="d-flex align-items-center py-2">
													<div class="d-inline-block position-relative">
														<img src="assets/images/avatar/avatar8.jpg" alt="" class="rounded avatar avatar-md style-1">
													</div>
													<div class="clearfix ms-2">
														<h6 class="mb-0 fw-semibold">Kennedy</h6>
														<span class="fs-13">Yestarday at 5:30 PM</span>
													</div>
												</div>
												<div class="clearfix ms-auto">
													<button type="button" class="btn btn-light btn-icon-xxs tp-btn fs-18 align-self-start"><i class="bi bi-grid"></i></button>
												</div>
											</div>
											<div class="clearfix mb-2 text-center overflow-hidden rounded">
												<img src="assets/images/post/img6.jpg" alt="" class="rounded">
											</div>
											<div class="clearfix text-black">
												<p class="fs-14 mb-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
											</div>
											<div class="clearfix pt-1">
												<a href="javascript:void(0);" class="me-3">
													<i class="fa-regular fa-image"></i> 25
												</a>
												<a href="javascript:void(0);" class="post-like">
													<i class="fa-regular fa-heart"></i> 75
												</a>
											</div>
											<div class="position-relative border-top border-opacity-10 d-flex align-items-center mt-3">
												<input type="text" class="form-control p-0 rounded-0 border-0 pe-2 bg-transparent" placeholder="Reply..">
												<div class="d-flex">
													<a href="javascript:void(0);" class="p-2">
														<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M14.2934 7.36665L8.1667 13.4933C7.41613 14.2439 6.39815 14.6655 5.3367 14.6655C4.27524 14.6655 3.25726 14.2439 2.5067 13.4933C1.75613 12.7428 1.33447 11.7248 1.33447 10.6633C1.33447 9.60186 1.75613 8.58388 2.5067 7.83332L8.63336 1.70665C9.13374 1.20628 9.81239 0.925171 10.52 0.925171C11.2277 0.925171 11.9063 1.20628 12.4067 1.70665C12.9071 2.20703 13.1882 2.88568 13.1882 3.59332C13.1882 4.30096 12.9071 4.97961 12.4067 5.47999L6.27336 11.6067C6.02318 11.8568 5.68385 11.9974 5.33003 11.9974C4.97621 11.9974 4.63688 11.8568 4.3867 11.6067C4.13651 11.3565 3.99596 11.0171 3.99596 10.6633C3.99596 10.3095 4.13651 9.97017 4.3867 9.71999L10.0467 4.06665" stroke="#888888" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
														</svg>
													</a>
													<a href="javascript:void(0);" class="p-2">
														<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M14 6.66669C14 11.3334 8 15.3334 8 15.3334C8 15.3334 2 11.3334 2 6.66669C2 5.07539 2.63214 3.54927 3.75736 2.42405C4.88258 1.29883 6.4087 0.666687 8 0.666687C9.5913 0.666687 11.1174 1.29883 12.2426 2.42405C13.3679 3.54927 14 5.07539 14 6.66669Z" stroke="#888888" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
															<path d="M8 8.66669C9.10457 8.66669 10 7.77126 10 6.66669C10 5.56212 9.10457 4.66669 8 4.66669C6.89543 4.66669 6 5.56212 6 6.66669C6 7.77126 6.89543 8.66669 8 8.66669Z" stroke="#888888" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
														</svg>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="col-lg-12">
									<div class="card card-video">
										<div class="card-body pb-0">
											<div class="d-flex justify-content-between mb-2">
												<div class="d-flex align-items-center py-2">
													<div class="d-inline-block position-relative">
														<img src="assets/images/avatar/avatar1.jpg" alt="" class="rounded avatar avatar-md style-1">
													</div>
													<div class="clearfix ms-2">
														<h6 class="mb-0 fw-semibold">Kennedy</h6>
														<span class="fs-13">Yestarday at 5:30 PM</span>
													</div>
												</div>
												<div class="clearfix ms-auto">
													<button type="button" class="btn btn-light btn-icon-xxs tp-btn fs-18 align-self-start"><i class="bi bi-grid"></i></button>
												</div>
											</div>
											<div class="clearfix mb-2">
												<iframe class="rounded w-100" src="https://www.youtube.com/embed/pyRjzvdOSHk" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
											</div>
											<div class="clearfix text-black">
												<p class="fs-14 mb-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
											</div>
											<div class="clearfix pt-1">
												<a href="javascript:void(0);" class="me-3">
													<i class="fa-regular fa-image"></i> 25
												</a>
												<a href="javascript:void(0);" class="post-like">
													<i class="fa-regular fa-heart"></i> 75
												</a>
											</div>
											<div class="position-relative border-top border-opacity-10 d-flex align-items-center mt-3">
												<input type="text" class="form-control p-0 rounded-0 border-0 pe-2 bg-transparent" placeholder="Reply..">
												<div class="d-flex">
													<a href="javascript:void(0);" class="p-2">
														<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M14.2934 7.36665L8.1667 13.4933C7.41613 14.2439 6.39815 14.6655 5.3367 14.6655C4.27524 14.6655 3.25726 14.2439 2.5067 13.4933C1.75613 12.7428 1.33447 11.7248 1.33447 10.6633C1.33447 9.60186 1.75613 8.58388 2.5067 7.83332L8.63336 1.70665C9.13374 1.20628 9.81239 0.925171 10.52 0.925171C11.2277 0.925171 11.9063 1.20628 12.4067 1.70665C12.9071 2.20703 13.1882 2.88568 13.1882 3.59332C13.1882 4.30096 12.9071 4.97961 12.4067 5.47999L6.27336 11.6067C6.02318 11.8568 5.68385 11.9974 5.33003 11.9974C4.97621 11.9974 4.63688 11.8568 4.3867 11.6067C4.13651 11.3565 3.99596 11.0171 3.99596 10.6633C3.99596 10.3095 4.13651 9.97017 4.3867 9.71999L10.0467 4.06665" stroke="#888888" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
														</svg>
													</a>
													<a href="javascript:void(0);" class="p-2">
														<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M14 6.66669C14 11.3334 8 15.3334 8 15.3334C8 15.3334 2 11.3334 2 6.66669C2 5.07539 2.63214 3.54927 3.75736 2.42405C4.88258 1.29883 6.4087 0.666687 8 0.666687C9.5913 0.666687 11.1174 1.29883 12.2426 2.42405C13.3679 3.54927 14 5.07539 14 6.66669Z" stroke="#888888" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
															<path d="M8 8.66669C9.10457 8.66669 10 7.77126 10 6.66669C10 5.56212 9.10457 4.66669 8 4.66669C6.89543 4.66669 6 5.56212 6 6.66669C6 7.77126 6.89543 8.66669 8 8.66669Z" stroke="#888888" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
														</svg>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="col-lg-12">
									<div class="card card-comment">
										<div class="card-body pb-0">
											<div class="clearfix mb-3">
												<div class="d-flex justify-content-between mb-2">
													<div class="d-flex align-items-center py-2">
														<div class="d-inline-block position-relative">
															<img src="assets/images/avatar/avatar2.jpg" alt="" class="rounded avatar avatar-md style-1">
														</div>
														<div class="clearfix ms-2">
															<h6 class="mb-0 fw-semibold">Brad Dennis</h6>
															<span class="fs-13">Yestarday at 5:06 PM</span>
														</div>
													</div>
													<div class="clearfix ms-auto">
														<button type="button" class="btn btn-light btn-icon-xxs tp-btn fs-18 align-self-start"><i class="bi bi-grid"></i></button>
													</div>
												</div>
												<div class="clearfix text-black">
													<p class="fs-14 mb-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
												</div>
												<div class="clearfix pt-1">
													<a href="javascript:void(0);" class="me-3">
														<i class="fa-regular fa-image"></i> 25
													</a>
													<a href="javascript:void(0);" class="post-like">
														<i class="fa-regular fa-heart"></i> 75
													</a>
												</div>
											</div>
											<div class="d-flex py-2 position-relative">
												<div class="d-inline-block position-relative">
													<img src="assets/images/avatar/5.jpg" alt="" class="rounded avatar avatar-md style-1">
												</div>
												<div class="clearfix ms-2">
													<h6 class="mb-1 fw-semibold">Mr. Hamilton <span class="fs-12 text-muted ms-1 fw-normal">2 Day ago</span></h6>
													<p class="fs-14 mb-0 text-black">There are many variations of passages of Lorem Ipsum available.</p>
												</div>
												<a href="javascript:void(0);" class="position-absolute end-0 top-0">Reply</a>
											</div>
											<div class="d-flex py-2 position-relative">
												<div class="d-inline-block position-relative">
													<img src="assets/images/avatar/5.jpg" alt="" class="rounded avatar avatar-md style-1">
												</div>
												<div class="clearfix ms-2">
													<h6 class="mb-1 fw-semibold">Mrs. Anderson <span class="fs-12 text-muted ms-1 fw-normal">3 Days ago</span></h6>
													<p class="fs-14 mb-0 text-black">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
												</div>
												<a href="javascript:void(0);" class="position-absolute end-0 top-0">Reply</a>
											</div>
											<div class="position-relative border-top border-opacity-10 d-flex align-items-center mt-3">
												<input type="text" class="form-control p-0 rounded-0 border-0 pe-2 bg-transparent" placeholder="Reply..">
												<div class="d-flex">
													<a href="javascript:void(0);" class="p-2">
														<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M14.2934 7.36665L8.1667 13.4933C7.41613 14.2439 6.39815 14.6655 5.3367 14.6655C4.27524 14.6655 3.25726 14.2439 2.5067 13.4933C1.75613 12.7428 1.33447 11.7248 1.33447 10.6633C1.33447 9.60186 1.75613 8.58388 2.5067 7.83332L8.63336 1.70665C9.13374 1.20628 9.81239 0.925171 10.52 0.925171C11.2277 0.925171 11.9063 1.20628 12.4067 1.70665C12.9071 2.20703 13.1882 2.88568 13.1882 3.59332C13.1882 4.30096 12.9071 4.97961 12.4067 5.47999L6.27336 11.6067C6.02318 11.8568 5.68385 11.9974 5.33003 11.9974C4.97621 11.9974 4.63688 11.8568 4.3867 11.6067C4.13651 11.3565 3.99596 11.0171 3.99596 10.6633C3.99596 10.3095 4.13651 9.97017 4.3867 9.71999L10.0467 4.06665" stroke="#888888" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
														</svg>
													</a>
													<a href="javascript:void(0);" class="p-2">
														<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M14 6.66669C14 11.3334 8 15.3334 8 15.3334C8 15.3334 2 11.3334 2 6.66669C2 5.07539 2.63214 3.54927 3.75736 2.42405C4.88258 1.29883 6.4087 0.666687 8 0.666687C9.5913 0.666687 11.1174 1.29883 12.2426 2.42405C13.3679 3.54927 14 5.07539 14 6.66669Z" stroke="#888888" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
															<path d="M8 8.66669C9.10457 8.66669 10 7.77126 10 6.66669C10 5.56212 9.10457 4.66669 8 4.66669C6.89543 4.66669 6 5.56212 6 6.66669C6 7.77126 6.89543 8.66669 8 8.66669Z" stroke="#888888" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
														</svg>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="col-lg-12">
									<div class="card card-comment">
										<div class="card-body pb-0">
											<div class="d-flex justify-content-between mb-2">
												<div class="d-flex align-items-center py-2">
													<div class="d-inline-block position-relative">
														<img src="assets/images/avatar/avatar3.jpg" alt="" class="rounded avatar avatar-md style-1">
													</div>
													<div class="clearfix ms-2">
														<h6 class="mb-0 fw-semibold">Lewis</h6>
														<span class="fs-13">Yestarday at 5:42 PM</span>
													</div>
												</div>
												<div class="clearfix ms-auto">
													<button type="button" class="btn btn-light btn-icon-xxs tp-btn fs-18 align-self-start"><i class="bi bi-grid"></i></button>
												</div>
											</div>
											<div class="clearfix text-black">
												<p class="fs-14 mb-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
											</div>
											<div class="clearfix pt-1">
												<a href="javascript:void(0);" class="me-3">
													<i class="fa-regular fa-image"></i> 24
												</a>
												<a href="javascript:void(0);" class="post-like">
													<i class="fa-regular fa-heart"></i> 75
												</a>
											</div>
											<div class="position-relative border-top border-opacity-10 d-flex align-items-center mt-3">
												<input type="text" class="form-control p-0 rounded-0 border-0 pe-2 bg-transparent" placeholder="Reply..">
												<div class="d-flex">
													<a href="javascript:void(0);" class="p-2">
														<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M14.2934 7.36665L8.1667 13.4933C7.41613 14.2439 6.39815 14.6655 5.3367 14.6655C4.27524 14.6655 3.25726 14.2439 2.5067 13.4933C1.75613 12.7428 1.33447 11.7248 1.33447 10.6633C1.33447 9.60186 1.75613 8.58388 2.5067 7.83332L8.63336 1.70665C9.13374 1.20628 9.81239 0.925171 10.52 0.925171C11.2277 0.925171 11.9063 1.20628 12.4067 1.70665C12.9071 2.20703 13.1882 2.88568 13.1882 3.59332C13.1882 4.30096 12.9071 4.97961 12.4067 5.47999L6.27336 11.6067C6.02318 11.8568 5.68385 11.9974 5.33003 11.9974C4.97621 11.9974 4.63688 11.8568 4.3867 11.6067C4.13651 11.3565 3.99596 11.0171 3.99596 10.6633C3.99596 10.3095 4.13651 9.97017 4.3867 9.71999L10.0467 4.06665" stroke="#888888" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
														</svg>
													</a>
													<a href="javascript:void(0);" class="p-2">
														<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M14 6.66669C14 11.3334 8 15.3334 8 15.3334C8 15.3334 2 11.3334 2 6.66669C2 5.07539 2.63214 3.54927 3.75736 2.42405C4.88258 1.29883 6.4087 0.666687 8 0.666687C9.5913 0.666687 11.1174 1.29883 12.2426 2.42405C13.3679 3.54927 14 5.07539 14 6.66669Z" stroke="#888888" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
															<path d="M8 8.66669C9.10457 8.66669 10 7.77126 10 6.66669C10 5.56212 9.10457 4.66669 8 4.66669C6.89543 4.66669 6 5.56212 6 6.66669C6 7.77126 6.89543 8.66669 8 8.66669Z" stroke="#888888" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
														</svg>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="col-lg-12">
									<button type="button" class="btn btn-primary w-100 mb-4">More Feeds</button>
								</div>

							</div>
						</div>
						<div class="col-xl-6">
							<div class="row sticky-top z-0">

								<div class="col-xxl-12 col-xl-6 col-md-6">
									<div class="card">
										<div class="card-header pb-0 border-0">
											<div class="clearfix">
												<h5 class=" mb-0">Projects Contributions</h5>
												<small class="d-block">84 New Tasks & 29 Guides</small>
											</div>
											<div class="clearfix ms-auto">
												<button type="button" class="btn btn-light btn-icon-xxs tp-btn fs-18 align-self-start"><i class="bi bi-grid"></i></button>
											</div>
										</div>
										<div class="card-body">
											<div class="d-flex align-items-center py-2 hover-bg-light rounded my-1">
												<div class="avatar avatar-md style-1 border border-opacity-10 rounded d-flex align-items-center justify-content-center bg-white">
													<img src="assets/images/logo/google.png" alt="">
												</div>
												<div class="clearfix ms-3">
													<h6 class="mb-0 fw-semibold">Piper Aerostar</h6>
													<span class="fs-13">piper-aircraft-class.jsp</span>
												</div>
												<div class="clearfix ms-auto">
													<span class="badge badge-sm badge-light">0</span>
												</div>
											</div>
											<div class="d-flex align-items-center py-2 hover-bg-light rounded my-1">
												<div class="avatar avatar-md style-1 border border-opacity-10 rounded d-flex align-items-center justify-content-center bg-white">
													<img src="assets/images/logo/figma.png" alt="">
												</div>
												<div class="clearfix ms-3">
													<h6 class="mb-0 fw-semibold">Cirrus SR22</h6>
													<span class="fs-13">cirrus-aircraft.jsp</span>
												</div>
												<div class="clearfix ms-auto">
													<span class="badge badge-sm badge-light">3</span>
												</div>
											</div>
											<div class="d-flex align-items-center py-2 hover-bg-light rounded my-1">
												<div class="avatar avatar-md style-1 border border-opacity-10 rounded d-flex align-items-center justify-content-center bg-white">
													<img src="assets/images/logo/slack.png" alt="">
												</div>
												<div class="clearfix ms-3">
													<h6 class="mb-0 fw-semibold">Beachcraft Baron</h6>
													<span class="fs-13">baron-class.pyt</span>
												</div>
												<div class="clearfix ms-auto">
													<span class="badge badge-sm badge-light">0</span>
												</div>
											</div>
											<div class="d-flex align-items-center py-2 hover-bg-light rounded my-1">
												<div class="avatar avatar-md style-1 border border-opacity-10 rounded d-flex align-items-center justify-content-center bg-white">
													<img src="assets/images/logo/html.png" alt="">
												</div>
												<div class="clearfix ms-3">
													<h6 class="mb-0 fw-semibold">Cessna SF150</h6>
													<span class="fs-13">cessna-aircraft-class.jsp</span>
												</div>
												<div class="clearfix ms-auto">
													<span class="badge badge-sm badge-light">0</span>
												</div>
											</div>
											<div class="alert alert-primary border-primary outline-dashed py-3 px-3 mt-4 mb-0 text-black">
												<strong class="text-primary">Intive New .NET Collaborators</strong> to creating great outstanding business to business .jsp modutr class scripts
											</div>
										</div>
									</div>
								</div>

								<div class="col-xxl-12 col-xl-6 col-md-6">
									<div class="card">
										<div class="card-header">
											<h5 class="mb-0">Activity</h5>
										</div>
										<div class="card-body">
											<div class="widget-timeline-status">
												<ul class="timeline">
													<li>
														<span class="timeline-status">08:30</span>
														<div class="timeline-badge border-dark"></div>
														<div class="timeline-panel">
															<span>Quisque a consequat ante Sit amet magna at volutapt.</span>
														</div>
													</li>
													<li>
														<span class="timeline-status">10:30</span>
														<div class="timeline-badge border-success"></div>
														<div class="timeline-panel">
															<span class="text-black fs-14 fw-semibold">Video Sharing</span>
														</div>
													</li>
													<li>
														<span class="timeline-status">02:42</span>
														<div class="timeline-badge border-danger"></div>
														<div class="timeline-panel">
															<span class="text-black fs-14 fw-semibold">john just buy your product Sell <span class="text-primary">$250</span></span>
														</div>
													</li>
													<li>
														<span class="timeline-status">15:40</span>
														<div class="timeline-badge border-info"></div>
														<div class="timeline-panel">
															<span>Mashable, a news website and blog, goes live.</span>
														</div>
													</li>
													<li>
														<span class="timeline-status">23:12</span>
														<div class="timeline-badge border-warning"></div>
														<div class="timeline-panel">
															<span class="text-black fs-14 fw-semibold">StumbleUpon is acquired by <span class="text-primary">eBay</span></span>
														</div>
													</li>
													<li>
														<span class="timeline-status">11:12</span>
														<div class="timeline-badge border-primary"></div>
														<div class="timeline-panel">
															<span>shared this on my fb wall a few months back.</span>
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>

								<div class="col-xxl-12 col-xl-12 col-md-12">
									<div class="card">
										<div class="card-header pb-0 border-0">
											<div class="clearfix">
												<h5 class="mb-0">Top Selling Categories</h5>
												<small class="d-block">7 Category</small>
											</div>
										</div>
										<div class="card-body pt-1">
											<div class="row align-items-center">
												<div class="col-sm-6 mb-3 d-flex justify-content-center">
													<div id="chartTopSelling"></div>
												</div>
												<div class="col-sm-6 mb-3">
													<div class="d-flex justify-content-between mb-3">
														<div class="text-black">
															<i class="fa-solid fa-square text-primary me-1"></i> Laptop
														</div>
														<span>20</span>
													</div>
													<div class="d-flex justify-content-between mb-3">
														<div class="text-black">
															<i class="fa-solid fa-square text-success me-1"></i> Phone
														</div>
														<span>05</span>
													</div>
													<div class="d-flex justify-content-between mb-3">
														<div class="text-black">
															<i class="fa-solid fa-square text-danger me-1"></i> Keyboard
														</div>
														<span>05</span>
													</div>
													<div class="d-flex justify-content-between mb-3">
														<div class="text-black">
															<i class="fa-solid fa-square text-warning me-1"></i> Mouse
														</div>
														<span>20</span>
													</div>
													<div class="d-flex justify-content-between mb-3">
														<div class="text-black">
															<i class="fa-solid fa-square text-purple me-1"></i> Monitors
														</div>
														<span>21</span>
													</div>
													<div class="d-flex justify-content-between mb-3">
														<div class="text-black">
															<i class="fa-solid fa-square text-dark me-1"></i> Watch
														</div>
														<span>04</span>
													</div>
													<div class="d-flex justify-content-between mb-3">
														<div class="text-black">
															<i class="fa-solid fa-square text-black me-1"></i> Earbuds
														</div>
														<span>25</span>
													</div>
												</div>
											</div>
											<div class="alert alert-outline-light outline-dashed p-3 d-sm-flex align-items-center justify-content-between mb-0">
												<p class="mb-0">Category report for a company's quarterly sales performance</p>
												<div class="clearfix w-100 ms-auto text-sm-end mt-2 mt-sm-0">
													<a href="javascript:void(0);" class="btn btn-primary">Download Report</a>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="col-xxl-7 col-xl-6 col-md-6">
									<div class="card overflow-hidden">
										<div class="card-header border-0">
											<h5 class="mb-0">My To Do Items</h5>
											<div>
												<a href="javascript:void(0);" class="text-primary me-2">View All</a>
												<a href="javascript:void(0);" class="text-black"> + Add To Do</a>
											</div>
										</div>
										<div class="card-body p-0">
											<div class="dt-do-bx">
												<div class="draggable-zone dropzoneContainer to-dodroup dz-scroll">
													<div class="sub-card draggable-handle draggable">
														<div class="d-items">
															<span class="text-warning dang d-block mb-2">
																<svg class="me-1" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path fill-rule="evenodd" clip-rule="evenodd" d="M3.61051 15.3276H14.3978C15.5843 15.3276 16.329 14.0451 15.7395 13.0146L10.35 3.59085C9.75676 2.5536 8.26126 2.55285 7.66726 3.5901L2.26876 13.0139C1.67926 14.0444 2.42326 15.3276 3.61051 15.3276Z" stroke="#FF9F00" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
																	<path d="M9.00189 10.0611V7.7361" stroke="#FF9F00" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
																	<path d="M8.99625 12.375H9.00375" stroke="#FF9F00" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
																</svg>
																Latest to do's
															</span>
															<div class="d-flex justify-content-between flex-wrap">
																<div class="d-items-2">
																	<div>
																		<svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<rect width="1" height="1" fill="#888888" />
																			<rect y="3" width="1" height="1" fill="#888888" />
																			<rect y="6" width="1" height="1" fill="#888888" />
																			<rect y="9" width="1" height="1" fill="#888888" />
																			<rect y="12" width="1" height="1" fill="#888888" />
																			<rect y="15" width="1" height="1" fill="#888888" />
																			<rect x="4" width="1" height="1" fill="#888888" />
																			<rect x="4" y="3" width="1" height="1" fill="#888888" />
																			<rect x="4" y="6" width="1" height="1" fill="#888888" />
																			<rect x="4" y="9" width="1" height="1" fill="#888888" />
																			<rect x="4" y="12" width="1" height="1" fill="#888888" />
																			<rect x="4" y="15" width="1" height="1" fill="#888888" />
																			<rect x="8" width="1" height="1" fill="#888888" />
																			<rect x="8" y="3" width="1" height="1" fill="#888888" />
																			<rect x="8" y="6" width="1" height="1" fill="#888888" />
																			<rect x="8" y="9" width="1" height="1" fill="#888888" />
																			<rect x="8" y="12" width="1" height="1" fill="#888888" />
																			<rect x="8" y="15" width="1" height="1" fill="#888888" />
																		</svg>
																	</div>
																	<div>
																		<div class="form-check custom-checkbox">
																			<input type="checkbox" class="form-check-input" id="customCheckBox1" required>
																			<label class="form-check-label" for="customCheckBox1">Compete this projects Monday</label>
																		</div>
																		<span>2024-12-26 07:15:00</span>
																	</div>
																</div>
																<div>
																	<div class="icon-box icon-box-md icon-danger me-1">
																		<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path d="M12.8833 6.31213C12.8833 6.31213 12.5213 10.8021 12.3113 12.6935C12.2113 13.5968 11.6533 14.1261 10.7393 14.1428C8.99994 14.1741 7.25861 14.1761 5.51994 14.1395C4.64061 14.1215 4.09194 13.5855 3.99394 12.6981C3.78261 10.7901 3.42261 6.31213 3.42261 6.31213" stroke="#FF5E5E" stroke-linecap="round" stroke-linejoin="round" />
																			<path d="M13.8055 4.1598H2.50012" stroke="#FF5E5E" stroke-linecap="round" stroke-linejoin="round" />
																			<path d="M11.6271 4.1598C11.1037 4.1598 10.6531 3.7898 10.5504 3.27713L10.3884 2.46647C10.2884 2.09247 9.94974 1.8338 9.56374 1.8338H6.74174C6.35574 1.8338 6.01707 2.09247 5.91707 2.46647L5.75507 3.27713C5.65241 3.7898 5.20174 4.1598 4.67841 4.1598" stroke="#FF5E5E" stroke-linecap="round" stroke-linejoin="round" />
																		</svg>
																	</div>
																	<div class="icon-box icon-box-md bg-primary-light">
																		<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path d="M9.16492 13.6286H14" stroke="#0D99FF" stroke-linecap="round" stroke-linejoin="round" />
																			<path fill-rule="evenodd" clip-rule="evenodd" d="M8.52001 2.52986C9.0371 1.91186 9.96666 1.82124 10.5975 2.32782C10.6324 2.35531 11.753 3.22586 11.753 3.22586C12.446 3.64479 12.6613 4.5354 12.2329 5.21506C12.2102 5.25146 5.87463 13.1763 5.87463 13.1763C5.66385 13.4393 5.34389 13.5945 5.00194 13.5982L2.57569 13.6287L2.02902 11.3149C1.95244 10.9895 2.02902 10.6478 2.2398 10.3849L8.52001 2.52986Z" stroke="#0D99FF" stroke-linecap="round" stroke-linejoin="round" />
																			<path d="M7.34723 4.00059L10.9821 6.79201" stroke="#0D99FF" stroke-linecap="round" stroke-linejoin="round" />
																		</svg>

																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="sub-card draggable-handle draggable">
														<div class="d-items">
															<span class="text-success dang d-block mb-2">
																<svg class="me-1" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M15 4.5L6.75 12.75L3 9" stroke="#3AC977" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
																</svg>
																Latest finished to do's
															</span>
															<div class="d-flex justify-content-between flex-wrap">
																<div class="d-items-2">
																	<div>
																		<svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<rect width="1" height="1" fill="#888888" />
																			<rect y="3" width="1" height="1" fill="#888888" />
																			<rect y="6" width="1" height="1" fill="#888888" />
																			<rect y="9" width="1" height="1" fill="#888888" />
																			<rect y="12" width="1" height="1" fill="#888888" />
																			<rect y="15" width="1" height="1" fill="#888888" />
																			<rect x="4" width="1" height="1" fill="#888888" />
																			<rect x="4" y="3" width="1" height="1" fill="#888888" />
																			<rect x="4" y="6" width="1" height="1" fill="#888888" />
																			<rect x="4" y="9" width="1" height="1" fill="#888888" />
																			<rect x="4" y="12" width="1" height="1" fill="#888888" />
																			<rect x="4" y="15" width="1" height="1" fill="#888888" />
																			<rect x="8" width="1" height="1" fill="#888888" />
																			<rect x="8" y="3" width="1" height="1" fill="#888888" />
																			<rect x="8" y="6" width="1" height="1" fill="#888888" />
																			<rect x="8" y="9" width="1" height="1" fill="#888888" />
																			<rect x="8" y="12" width="1" height="1" fill="#888888" />
																			<rect x="8" y="15" width="1" height="1" fill="#888888" />
																		</svg>
																	</div>
																	<div>
																		<div class="form-check custom-checkbox">
																			<input type="checkbox" class="form-check-input" id="customCheckBox02" required>
																			<label class="form-check-label" for="customCheckBox02">Compete this projects Monday</label>
																		</div>
																		<span>2024-12-26 07:15:00</span>
																	</div>
																</div>
																<div>
																	<div class="icon-box icon-box-md icon-danger me-1">
																		<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path d="M12.8833 6.31213C12.8833 6.31213 12.5213 10.8021 12.3113 12.6935C12.2113 13.5968 11.6533 14.1261 10.7393 14.1428C8.99994 14.1741 7.25861 14.1761 5.51994 14.1395C4.64061 14.1215 4.09194 13.5855 3.99394 12.6981C3.78261 10.7901 3.42261 6.31213 3.42261 6.31213" stroke="#FF5E5E" stroke-linecap="round" stroke-linejoin="round" />
																			<path d="M13.8055 4.1598H2.50012" stroke="#FF5E5E" stroke-linecap="round" stroke-linejoin="round" />
																			<path d="M11.6271 4.1598C11.1037 4.1598 10.6531 3.7898 10.5504 3.27713L10.3884 2.46647C10.2884 2.09247 9.94974 1.8338 9.56374 1.8338H6.74174C6.35574 1.8338 6.01707 2.09247 5.91707 2.46647L5.75507 3.27713C5.65241 3.7898 5.20174 4.1598 4.67841 4.1598" stroke="#FF5E5E" stroke-linecap="round" stroke-linejoin="round" />
																		</svg>
																	</div>
																	<div class="icon-box icon-box-md bg-primary-light">
																		<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path d="M9.16492 13.6286H14" stroke="#0D99FF" stroke-linecap="round" stroke-linejoin="round" />
																			<path fill-rule="evenodd" clip-rule="evenodd" d="M8.52001 2.52986C9.0371 1.91186 9.96666 1.82124 10.5975 2.32782C10.6324 2.35531 11.753 3.22586 11.753 3.22586C12.446 3.64479 12.6613 4.5354 12.2329 5.21506C12.2102 5.25146 5.87463 13.1763 5.87463 13.1763C5.66385 13.4393 5.34389 13.5945 5.00194 13.5982L2.57569 13.6287L2.02902 11.3149C1.95244 10.9895 2.02902 10.6478 2.2398 10.3849L8.52001 2.52986Z" stroke="#0D99FF" stroke-linecap="round" stroke-linejoin="round" />
																			<path d="M7.34723 4.00059L10.9821 6.79201" stroke="#0D99FF" stroke-linecap="round" stroke-linejoin="round" />
																		</svg>

																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="sub-card draggable-handle draggable">
														<div class="d-items">
															<div class="d-flex justify-content-between flex-wrap">
																<div class="d-items-2">
																	<div>
																		<svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<rect width="1" height="1" fill="#888888" />
																			<rect y="3" width="1" height="1" fill="#888888" />
																			<rect y="6" width="1" height="1" fill="#888888" />
																			<rect y="9" width="1" height="1" fill="#888888" />
																			<rect y="12" width="1" height="1" fill="#888888" />
																			<rect y="15" width="1" height="1" fill="#888888" />
																			<rect x="4" width="1" height="1" fill="#888888" />
																			<rect x="4" y="3" width="1" height="1" fill="#888888" />
																			<rect x="4" y="6" width="1" height="1" fill="#888888" />
																			<rect x="4" y="9" width="1" height="1" fill="#888888" />
																			<rect x="4" y="12" width="1" height="1" fill="#888888" />
																			<rect x="4" y="15" width="1" height="1" fill="#888888" />
																			<rect x="8" width="1" height="1" fill="#888888" />
																			<rect x="8" y="3" width="1" height="1" fill="#888888" />
																			<rect x="8" y="6" width="1" height="1" fill="#888888" />
																			<rect x="8" y="9" width="1" height="1" fill="#888888" />
																			<rect x="8" y="12" width="1" height="1" fill="#888888" />
																			<rect x="8" y="15" width="1" height="1" fill="#888888" />
																		</svg>
																	</div>
																	<div>
																		<div class="form-check custom-checkbox">
																			<input type="checkbox" class="form-check-input" id="customCheckBox03" required>
																			<label class="form-check-label" for="customCheckBox03">Compete this projects Monday</label>
																		</div>
																		<span>2024-12-26 07:15:00</span>
																	</div>
																</div>
																<div>
																	<div class="icon-box icon-box-md icon-danger me-1">
																		<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path d="M12.8833 6.31213C12.8833 6.31213 12.5213 10.8021 12.3113 12.6935C12.2113 13.5968 11.6533 14.1261 10.7393 14.1428C8.99994 14.1741 7.25861 14.1761 5.51994 14.1395C4.64061 14.1215 4.09194 13.5855 3.99394 12.6981C3.78261 10.7901 3.42261 6.31213 3.42261 6.31213" stroke="#FF5E5E" stroke-linecap="round" stroke-linejoin="round" />
																			<path d="M13.8055 4.1598H2.50012" stroke="#FF5E5E" stroke-linecap="round" stroke-linejoin="round" />
																			<path d="M11.6271 4.1598C11.1037 4.1598 10.6531 3.7898 10.5504 3.27713L10.3884 2.46647C10.2884 2.09247 9.94974 1.8338 9.56374 1.8338H6.74174C6.35574 1.8338 6.01707 2.09247 5.91707 2.46647L5.75507 3.27713C5.65241 3.7898 5.20174 4.1598 4.67841 4.1598" stroke="#FF5E5E" stroke-linecap="round" stroke-linejoin="round" />
																		</svg>
																	</div>
																	<div class="icon-box icon-box-md bg-primary-light">
																		<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path d="M9.16492 13.6286H14" stroke="#0D99FF" stroke-linecap="round" stroke-linejoin="round" />
																			<path fill-rule="evenodd" clip-rule="evenodd" d="M8.52001 2.52986C9.0371 1.91186 9.96666 1.82124 10.5975 2.32782C10.6324 2.35531 11.753 3.22586 11.753 3.22586C12.446 3.64479 12.6613 4.5354 12.2329 5.21506C12.2102 5.25146 5.87463 13.1763 5.87463 13.1763C5.66385 13.4393 5.34389 13.5945 5.00194 13.5982L2.57569 13.6287L2.02902 11.3149C1.95244 10.9895 2.02902 10.6478 2.2398 10.3849L8.52001 2.52986Z" stroke="#0D99FF" stroke-linecap="round" stroke-linejoin="round" />
																			<path d="M7.34723 4.00059L10.9821 6.79201" stroke="#0D99FF" stroke-linecap="round" stroke-linejoin="round" />
																		</svg>

																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="sub-card draggable-handle draggable">
														<div class="d-items">
															<div class="d-flex justify-content-between flex-wrap">
																<div class="d-items-2">
																	<div>
																		<svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<rect width="1" height="1" fill="#888888" />
																			<rect y="3" width="1" height="1" fill="#888888" />
																			<rect y="6" width="1" height="1" fill="#888888" />
																			<rect y="9" width="1" height="1" fill="#888888" />
																			<rect y="12" width="1" height="1" fill="#888888" />
																			<rect y="15" width="1" height="1" fill="#888888" />
																			<rect x="4" width="1" height="1" fill="#888888" />
																			<rect x="4" y="3" width="1" height="1" fill="#888888" />
																			<rect x="4" y="6" width="1" height="1" fill="#888888" />
																			<rect x="4" y="9" width="1" height="1" fill="#888888" />
																			<rect x="4" y="12" width="1" height="1" fill="#888888" />
																			<rect x="4" y="15" width="1" height="1" fill="#888888" />
																			<rect x="8" width="1" height="1" fill="#888888" />
																			<rect x="8" y="3" width="1" height="1" fill="#888888" />
																			<rect x="8" y="6" width="1" height="1" fill="#888888" />
																			<rect x="8" y="9" width="1" height="1" fill="#888888" />
																			<rect x="8" y="12" width="1" height="1" fill="#888888" />
																			<rect x="8" y="15" width="1" height="1" fill="#888888" />
																		</svg>
																	</div>
																	<div>
																		<div class="form-check custom-checkbox">
																			<input type="checkbox" class="form-check-input" id="customCheckBox4" required>
																			<label class="form-check-label" for="customCheckBox4">Compete this projects Monday</label>
																		</div>
																		<span>2024-12-26 07:15:00</span>
																	</div>
																</div>
																<div>
																	<div class="icon-box icon-box-md icon-danger me-1">
																		<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path d="M12.8833 6.31213C12.8833 6.31213 12.5213 10.8021 12.3113 12.6935C12.2113 13.5968 11.6533 14.1261 10.7393 14.1428C8.99994 14.1741 7.25861 14.1761 5.51994 14.1395C4.64061 14.1215 4.09194 13.5855 3.99394 12.6981C3.78261 10.7901 3.42261 6.31213 3.42261 6.31213" stroke="#FF5E5E" stroke-linecap="round" stroke-linejoin="round" />
																			<path d="M13.8055 4.1598H2.50012" stroke="#FF5E5E" stroke-linecap="round" stroke-linejoin="round" />
																			<path d="M11.6271 4.1598C11.1037 4.1598 10.6531 3.7898 10.5504 3.27713L10.3884 2.46647C10.2884 2.09247 9.94974 1.8338 9.56374 1.8338H6.74174C6.35574 1.8338 6.01707 2.09247 5.91707 2.46647L5.75507 3.27713C5.65241 3.7898 5.20174 4.1598 4.67841 4.1598" stroke="#FF5E5E" stroke-linecap="round" stroke-linejoin="round" />
																		</svg>
																	</div>
																	<div class="icon-box icon-box-md bg-primary-light">
																		<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path d="M9.16492 13.6286H14" stroke="#0D99FF" stroke-linecap="round" stroke-linejoin="round" />
																			<path fill-rule="evenodd" clip-rule="evenodd" d="M8.52001 2.52986C9.0371 1.91186 9.96666 1.82124 10.5975 2.32782C10.6324 2.35531 11.753 3.22586 11.753 3.22586C12.446 3.64479 12.6613 4.5354 12.2329 5.21506C12.2102 5.25146 5.87463 13.1763 5.87463 13.1763C5.66385 13.4393 5.34389 13.5945 5.00194 13.5982L2.57569 13.6287L2.02902 11.3149C1.95244 10.9895 2.02902 10.6478 2.2398 10.3849L8.52001 2.52986Z" stroke="#0D99FF" stroke-linecap="round" stroke-linejoin="round" />
																			<path d="M7.34723 4.00059L10.9821 6.79201" stroke="#0D99FF" stroke-linecap="round" stroke-linejoin="round" />
																		</svg>

																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="sub-card draggable-handle draggable">
														<div class="d-items">
															<div class="d-flex justify-content-between flex-wrap">
																<div class="d-items-2">
																	<div>
																		<svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<rect width="1" height="1" fill="#888888" />
																			<rect y="3" width="1" height="1" fill="#888888" />
																			<rect y="6" width="1" height="1" fill="#888888" />
																			<rect y="9" width="1" height="1" fill="#888888" />
																			<rect y="12" width="1" height="1" fill="#888888" />
																			<rect y="15" width="1" height="1" fill="#888888" />
																			<rect x="4" width="1" height="1" fill="#888888" />
																			<rect x="4" y="3" width="1" height="1" fill="#888888" />
																			<rect x="4" y="6" width="1" height="1" fill="#888888" />
																			<rect x="4" y="9" width="1" height="1" fill="#888888" />
																			<rect x="4" y="12" width="1" height="1" fill="#888888" />
																			<rect x="4" y="15" width="1" height="1" fill="#888888" />
																			<rect x="8" width="1" height="1" fill="#888888" />
																			<rect x="8" y="3" width="1" height="1" fill="#888888" />
																			<rect x="8" y="6" width="1" height="1" fill="#888888" />
																			<rect x="8" y="9" width="1" height="1" fill="#888888" />
																			<rect x="8" y="12" width="1" height="1" fill="#888888" />
																			<rect x="8" y="15" width="1" height="1" fill="#888888" />
																		</svg>
																	</div>
																	<div>
																		<div class="form-check custom-checkbox">
																			<input type="checkbox" class="form-check-input" id="customCheckBox5" required>
																			<label class="form-check-label" for="customCheckBox5">Compete this projects Monday</label>
																		</div>
																		<span>2024-12-26 07:15:00</span>
																	</div>
																</div>
																<div>
																	<div class="icon-box icon-box-md icon-danger me-1">
																		<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path d="M12.8833 6.31213C12.8833 6.31213 12.5213 10.8021 12.3113 12.6935C12.2113 13.5968 11.6533 14.1261 10.7393 14.1428C8.99994 14.1741 7.25861 14.1761 5.51994 14.1395C4.64061 14.1215 4.09194 13.5855 3.99394 12.6981C3.78261 10.7901 3.42261 6.31213 3.42261 6.31213" stroke="#FF5E5E" stroke-linecap="round" stroke-linejoin="round" />
																			<path d="M13.8055 4.1598H2.50012" stroke="#FF5E5E" stroke-linecap="round" stroke-linejoin="round" />
																			<path d="M11.6271 4.1598C11.1037 4.1598 10.6531 3.7898 10.5504 3.27713L10.3884 2.46647C10.2884 2.09247 9.94974 1.8338 9.56374 1.8338H6.74174C6.35574 1.8338 6.01707 2.09247 5.91707 2.46647L5.75507 3.27713C5.65241 3.7898 5.20174 4.1598 4.67841 4.1598" stroke="#FF5E5E" stroke-linecap="round" stroke-linejoin="round" />
																		</svg>
																	</div>
																	<div class="icon-box icon-box-md bg-primary-light">
																		<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path d="M9.16492 13.6286H14" stroke="#0D99FF" stroke-linecap="round" stroke-linejoin="round" />
																			<path fill-rule="evenodd" clip-rule="evenodd" d="M8.52001 2.52986C9.0371 1.91186 9.96666 1.82124 10.5975 2.32782C10.6324 2.35531 11.753 3.22586 11.753 3.22586C12.446 3.64479 12.6613 4.5354 12.2329 5.21506C12.2102 5.25146 5.87463 13.1763 5.87463 13.1763C5.66385 13.4393 5.34389 13.5945 5.00194 13.5982L2.57569 13.6287L2.02902 11.3149C1.95244 10.9895 2.02902 10.6478 2.2398 10.3849L8.52001 2.52986Z" stroke="#0D99FF" stroke-linecap="round" stroke-linejoin="round" />
																			<path d="M7.34723 4.00059L10.9821 6.79201" stroke="#0D99FF" stroke-linecap="round" stroke-linejoin="round" />
																		</svg>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="col-xxl-5 col-xl-6 col-md-6">
									<div class="card">
										<div class="card-header pb-0 border-0">
											<h5 class="heading mb-0">Projects Status</h5>
											<select class="default-select status-select normal-select">
												<option value="Today">Today</option>
												<option value="Week">Week</option>
												<option value="Month">Month</option>
											</select>
										</div>
										<div class="card-body">
											<div id="chartProjectChart" class="project-chart d-flex justify-content-center"></div>
											<div class="clearfix mt-3">
												<div class="d-flex justify-content-between mb-3">
													<div class="text-black fs-14">
														<i class="fa-solid fa-square text-primary me-1"></i> Completed Projects
													</div>
													<span class="fs-14">40 Projects</span>
												</div>
												<div class="d-flex justify-content-between mb-3">
													<div class="text-black fs-14">
														<i class="fa-solid fa-square text-success me-1"></i> Progress Projects
													</div>
													<span class="fs-14">20 Projects</span>
												</div>
												<div class="d-flex justify-content-between mb-3">
													<div class="text-black fs-14">
														<i class="fa-solid fa-square text-danger me-1"></i> Cancelled
													</div>
													<span class="fs-14">10 Projects</span>
												</div>
												<div class="d-flex justify-content-between mb-3">
													<div class="text-black fs-14">
														<i class="fa-solid fa-square text-warning me-1"></i> Yet to Start
													</div>
													<span class="fs-14">30 Projects</span>
												</div>
											</div>
										</div>
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

</html>