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
		<div class="content-body">
			<div class="container-fluid">
				<!-- Page Head -->
				<div class="page-head">
					<div class="row">
						<div class="col-sm-6 mb-sm-4 mb-3">
							<h3 class="mb-0">Good Morning, Hanuman</h3>
							<p class="mb-0">Here’s what’s happening with your store today</p>
						</div>
						<div class="col-sm-6 mb-4 text-sm-end">
							<a href="javascript:voit(0);" class="btn btn-outline-secondary">Add Task</a>
							<a href="javascript:voit(0);" class="btn btn-primary ms-2">New Project</a>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-xl-9">
						<div class="row">
							<div class="col-xl-3">
								<div class="card ic-chart-card">
									<div class="card-header d-block border-0 pb-0">
										<div class="d-flex justify-content-between">
											<h6 class="mb-0">Weekly Sales</h6>
											<span class="badge badge-sm badge-success light">+2.7%</span>
										</div>
										<span class="data-value">$92k</span>
									</div>
									<div class="card-body p-0">
										<div id="handleWeeklySales" class="chart-offset"></div>
									</div>
								</div>
							</div>
							<div class="col-xl-3">
								<div class="card ic-chart-card">
									<div class="card-header d-block border-0">
										<div class="d-flex justify-content-between">
											<h6 class="mb-0">Total Order</h6>
											<span class="badge badge-sm badge-info light">+7.2%</span>
										</div>
										<span class="data-value">$34.2k</span>
									</div>
									<div class="card-body p-0 pb-3">
										<div id="handleOrderChart"></div>
									</div>
								</div>
							</div>
							<div class="col-xl-3">
								<div class="card ic-chart-card">
									<div class="card-header d-block border-0 pb-0">
										<div class="d-flex justify-content-between">
											<h6 class="mb-0">Market Share</h6>
											<span class="badge badge-sm badge-success light">80%</span>
										</div>
										<span class="data-value">20M</span>
									</div>
									<div class="card-body d-flex align-items-center justify-content-between py-2 pe-1">
										<div class="clearfix">
											<div class="d-flex align-items-center mb-2">
												<svg class="me-2" width="13" height="12" viewBox="0 0 13 12" fill="none"
													xmlns="http://www.w3.org/2000/svg">
													<path
														d="M6.5 0L12.6819 4.49139L10.3206 11.7586H2.6794L0.318133 4.49139L6.5 0Z"
														fill="#0074FF" />
												</svg>
												<span class="text-dark fs-13">Mobile</span>
											</div>
											<div class="d-flex align-items-center mb-2">
												<svg class="me-2" width="13" height="12" viewBox="0 0 13 12" fill="none"
													xmlns="http://www.w3.org/2000/svg">
													<path
														d="M6.5 0L12.6819 4.49139L10.3206 11.7586H2.6794L0.318133 4.49139L6.5 0Z"
														fill="#01BD9B" />
												</svg>
												<span class="text-dark fs-13">Laptop</span>
											</div>
											<div class="d-flex align-items-center mb-2">
												<svg class="me-2" width="13" height="12" viewBox="0 0 13 12" fill="none"
													xmlns="http://www.w3.org/2000/svg">
													<path
														d="M6.5 0L12.6819 4.49139L10.3206 11.7586H2.6794L0.318133 4.49139L6.5 0Z"
														fill="#738293" />
												</svg>
												<span class="text-dark fs-13">Cloths</span>
											</div>
										</div>
										<div id="handleMarketShare"></div>
									</div>
								</div>
							</div>
							<div class="col-xl-3">
								<div class="card ic-chart-card">
									<div class="card-header d-block border-0 pb-0">
										<div class="d-flex justify-content-between">
											<h6 class="mb-0">New Customer</h6>
											<span class="badge badge-sm badge-success light">15%</span>
										</div>
										<span class="data-value">1.2K</span>
									</div>
									<div class="card-footer border-0 mt-auto">
										<h6>Today Customer</h6>
										<ul class="avtar-list">
											<li><img class="avatar avatar-circle borderd"
													src="assets/images/avatar/avatar1.jpg" alt=""></li>
											<li><img class="avatar avatar-circle borderd"
													src="assets/images/avatar/avatar2.jpg" alt=""></li>
											<li><img class="avatar avatar-circle borderd"
													src="assets/images/avatar/avatar3.jpg" alt=""></li>
											<li><img class="avatar avatar-circle borderd"
													src="assets/images/avatar/avatar4.jpg" alt=""></li>
											<li><img class="avatar avatar-circle borderd"
													src="assets/images/avatar/avatar5.jpg" alt=""></li>
											<li><img class="avatar avatar-circle borderd"
													src="assets/images/avatar/avatar6.jpg" alt=""></li>
											<li>
												<div class="avatar-label avatar-light avatar-circle">+4K</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-xl-5">
								<div class="card">
									<div class="card-header border-0 pb-0">
										<h5>People Contact</h5>
										<!-- <form action="#">
											<div class="input-group">
												<input type="text" class="form-control" placeholder="Search">
												<span class="input-group-text">
													<button type="button"><i class="flaticon-search-interface-symbol"></i></button>
												</span>
											</div>
										</form> -->
									</div>
									<div class="card-body">
										<div class="row g-2">
											<div class="col-xl-4 col-sm-4 col-6">
												<div class="avatar-card text-center border-dashed rounded px-2 py-3">
													<img class="avatar avatar-lg avatar-circle mb-2"
														src="assets/images/avatar/avatar1.jpg" alt="">
													<h6 class="mb-0">Jordana Niclany</h5>
														<span class="fs-12">jordan@mail.com</span>
												</div>
											</div>
											<div class="col-xl-4 col-sm-4 col-6">
												<div class="avatar-card text-center border-dashed rounded px-2 py-3">
													<div
														class="avatar avatar-label avatar-lg bg-success-light text-success avatar-circle mb-2 mx-auto">
														KD</div>
													<h6 class="mb-0">Jacob Jack</h5>
														<span class="fs-12">jordan@mail.com</span>
												</div>
											</div>
											<div class="col-xl-4 col-sm-4 col-6">
												<div
													class="avatar-card text-center border-dashed rounded px-2 py-3 bg-purple-light">
													<img class="avatar avatar-lg avatar-circle mb-2"
														src="assets/images/avatar/avatar3.jpg" alt="">
													<h6 class="mb-0">Sammy Nico</h5>
														<span class="fs-12">jordan@mail.com</span>
												</div>
											</div>
											<div class="col-xl-4 col-sm-4 col-6">
												<div
													class="avatar-card text-center border-dashed rounded px-2 py-3 bg-cream-light">
													<img class="avatar avatar-lg avatar-circle mb-2"
														src="assets/images/avatar/avatar4.jpg" alt="">
													<h6 class="mb-0">Gibs Gibsy</h5>
														<span class="fs-12">jordan@mail.com</span>
												</div>
											</div>
											<div class="col-xl-4 col-sm-4 col-6">
												<div class="avatar-card text-center border-dashed rounded px-2 py-3">
													<img class="avatar avatar-lg avatar-circle mb-2"
														src="assets/images/avatar/avatar5.jpg" alt="">
													<h6 class="mb-0">Sam Sammy</h5>
														<span class="fs-12">jordan@mail.com</span>
												</div>
											</div>
											<div class="col-xl-4 col-sm-4 col-6">
												<div class="avatar-card text-center border-dashed rounded px-2 py-3">
													<img class="avatar avatar-lg avatar-circle mb-2"
														src="assets/images/avatar/avatar6.jpg" alt="">
													<h6 class="mb-0">Corey Core</h5>
														<span class="fs-12">jordan@mail.com</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-md-6">
								<div class="card">
									<div class="card-body mb-0">
										<div id="redial"></div>
										<div class="redia-date text-center">
											<h4>My Progress</h4>
											<p class="mb-0">Lorem ipsum dolor sit amet, consectetur</p>
										</div>
									</div>
									<div class="card-footer text-center border-0 pt-0">
										<a href="" class="btn btn-primary">More Details</a>
									</div>
								</div>

							</div>
							<div class="col-xl-4 col-md-6">
								<div class="card blance">
									<div class="card-header align-items-baseline border-0 pb-0">
										<div>
											<h5 class="mb-0">Your Balance</h5>
											<h4 class="mb-0">$25,217k</h4>
										</div>
										<p class="mb-0 fs-14 ms-auto"><span class="text-success">+2.7% </span>than last
											week
										<p>
									</div>
									<div class="card-body pt-0">
										<div id="blanceChart"></div>
									</div>
								</div>

							</div>
						</div>
					</div>
					<div class="col-xl-3">
						<div class="card saller">
							<div class="card-header border-0 d-block text-white pb-0">
								<h4 class="text-white mb-0">Top Sellers</h4>
								<span>Users from all channels</span>
							</div>
							<div class="card-body">
								<div class="seller-slider">
									<div class="swiper mySwiper swiper-lr">
										<div class="swiper-wrapper">
											<div class="swiper-slide">
												<div class="card">
													<div class="card-body product">
														<img src="assets/images/swiper/shirt1.jpg">
														<div class="product-imfo">
															<div class="d-flex justify-content-between">
																<span class="text-danger">up to 79% off</span>
																<h6 class="font-w600">$80</h6>
															</div>
															<div class="d-flex justify-content-between">
																<h6 class="font-w600">Block Tiered Dress.</h6>
																<span><del>$95</del></span>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="swiper-slide">
												<div class="card">
													<div class="card-body product">
														<img src="assets/images/swiper/shirt1.jpg">
														<div class="product-imfo">
															<div class="d-flex justify-content-between">
																<span class="text-danger">up to 79% off</span>
																<h6 class="font-w600">$80</h6>
															</div>
															<div class="d-flex justify-content-between">
																<h6 class="font-w600">Block Tiered Dress.</h6>
																<span><del>$95</del></span>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="swiper-slide">
												<div class="card">
													<div class="card-body product">
														<img src="assets/images/swiper/shirt1.jpg">
														<div class="product-imfo">
															<div class="d-flex justify-content-between">
																<span class="text-danger">up to 79% off</span>
																<h6 class="font-w600">$80</h6>
															</div>
															<div class="d-flex justify-content-between">
																<h6 class="font-w600">Block Tiered Dress.</h6>
																<span><del>$95</del></span>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="swiper-slide">
												<div class="card">
													<div class="card-body product">
														<img src="assets/images/swiper/shirt1.jpg">
														<div class="product-imfo">
															<div class="d-flex justify-content-between">
																<span class="text-danger">up to 79% off</span>
																<h6 class="font-w600">$80</h6>
															</div>
															<div class="d-flex justify-content-between">
																<h6 class="font-w600">Block Tiered Dress.</h6>
																<span><del>$95</del></span>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="product-details">
									<h4>Your Finances, safe and Secure</h4>
									<p>
										It is a long established fact that a reader will be distracted by the readable
										content of a page when looking at its layout.
									</p>
									<div class="d-flex align-items-center">
										<ul class="avtar-list">
											<li><img class="avatar avatar-circle borderd"
													src="assets/images/avatar/avatar1.jpg" alt=""></li>
											<li><img class="avatar avatar-circle borderd"
													src="assets/images/avatar/avatar2.jpg" alt=""></li>
											<li><img class="avatar avatar-circle borderd"
													src="assets/images/avatar/avatar3.jpg" alt=""></li>
											<li><img class="avatar avatar-circle borderd"
													src="assets/images/avatar/avatar4.jpg" alt=""></li>
											<li><img class="avatar avatar-circle borderd"
													src="assets/images/avatar/avatar5.jpg" alt=""></li>
											<li><img class="avatar avatar-circle borderd"
													src="assets/images/avatar/avatar6.jpg" alt=""></li>
											<li>
												<div class="avatar-label avatar-light avatar-circle">+4K</div>
											</li>
										</ul>
										<div class="ms-3">
											<h4 class="mb-0 ">15k+</h4>
											<span>Happy Clients</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-6">
						<div class="card overflow-hidden">
							<div class="card-header pb-2 flex-wrap">
								<div class="blance-media">
									<h5 class="mb-0">Your Balance</h5>
									<h4 class="mb-0">$25,217k <span
											class="badge badge-sm badge-success light">+2.7%</span></h4>
								</div>
							</div>
							<div class="card-body p-0">
								<div id="chartBarRunning" class="pt-0"></div>
								<div class="ttl-project">
									<div class="pr-data">
										<h5>12,721</h5>
										<span>Number of Projects</span>
									</div>
									<div class="pr-data">
										<h5 class="text-primary">721</h5>
										<span>Active Projects</span>
									</div>
									<div class="pr-data">
										<h5>$2,50,523</h5>
										<span>Revenue</span>
									</div>
									<div class="pr-data">
										<h5 class="text-success">12,275h</h5>
										<span>Working Hours</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-6">
						<div class="card">
							<div class="card-header flex-wrap">
								<h4 class="mb-0">Transaction Details</h4>
								<div class="d-flex align-items-center justify-content-between transaction flex-wrap">
									<div class="input-group search-area style-1">
										<span class="input-group-text"><a href="javascript:void(0)"><i
													class="flaticon-search-interface-symbol"></i></a></span>
										<input type="text" class="form-control" placeholder="Search">
									</div>
									<a href="javascript:void(0);" class="btn">
										<svg width="16" height="16" viewBox="0 0 16 16" fill="none"
											xmlns="http://www.w3.org/2000/svg">
											<path d="M2.66699 4.66699H13.3337" stroke="black" stroke-linecap="round"
												stroke-linejoin="round" />
											<path d="M2.66699 8L9.33366 8" stroke="black" stroke-linecap="round"
												stroke-linejoin="round" />
											<path d="M2.66699 11.333H4.00033" stroke="black" stroke-linecap="round"
												stroke-linejoin="round" />
										</svg>
										Sort By
									</a>
									<a href="javascript:void(0);" class="btn">
										<svg width="16" height="16" viewBox="0 0 16 16" fill="none"
											xmlns="http://www.w3.org/2000/svg">
											<path
												d="M11.1594 3.33301H4.84121C3.98686 3.33301 3.52595 4.33513 4.08196 4.9838L6.42625 7.71881C6.5816 7.90005 6.66699 8.13089 6.66699 8.3696V11.3816C6.66699 11.7604 6.881 12.1067 7.21978 12.2761L7.88645 12.6094C8.55135 12.9419 9.33366 12.4584 9.33366 11.715V8.3696C9.33366 8.13089 9.41905 7.90005 9.5744 7.71881L11.9187 4.9838C12.4747 4.33513 12.0138 3.33301 11.1594 3.33301Z"
												stroke="#1C2430" stroke-linecap="round" stroke-linejoin="round" />
										</svg>
										Filter
									</a>
								</div>
							</div>
							<div class="card-body pb-2">
								<div class="table-responsive">
									<table id="transaction-tbl" class="table transaction-tbl ItemsCheckboxSec">
										<thead class="border-self">
											<tr>
												<th>
													<div class="form-check custom-checkbox ms-0">
														<input type="checkbox" class="form-check-input checkAllInput"
															id="checkAll" required="">
														<label class="form-check-label" for="checkAll"></label>
													</div>
													<span>ID</span>
												</th>
												<th>Date</th>
												<th>Client</th>
												<th>Payment</th>
												<th>Status</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>
													<div class="form-check custom-checkbox">
														<input type="checkbox" class="form-check-input"
															id="customCheckBox33" required="">
														<label class="form-check-label" for="customCheckBox33"></label>
													</div>
													<span>129361171</span>
												</td>
												<td>
													<p class="mb-0 ms-2">18 Feb 2024</p>
												</td>
												<td class="">
													<span>Rolex leo</span>
												</td>
												<td>
													<span class="text-success">$376.24</span>
												</td>
												<td class="pe-0">
													<span class="badge badge-primary light border-0">Completed</span>
												</td>
												<td>
													<div class="dropdown ms-2">
														<div class="btn-link custome-d" data-bs-toggle="dropdown">
															<svg width="9" height="9" viewBox="0 0 9 9" fill="none"
																xmlns="http://www.w3.org/2000/svg">
																<rect y="7" width="2" height="2" fill="black" />
																<rect width="2" height="2" fill="black" />
																<rect x="7" y="7" width="2" height="2" fill="black" />
																<rect x="7" width="2" height="2" fill="black" />
															</svg>
														</div>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item"
																href="javascript:void(0)">Delete</a>
															<a class="dropdown-item" href="javascript:void(0)">Edit</a>
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="form-check custom-checkbox">
														<input type="checkbox" class="form-check-input"
															id="customCheckBox33" required="">
														<label class="form-check-label" for="customCheckBox2"></label>
													</div>
													<span>129361178</span>
												</td>
												<td>
													<p class="mb-0 ms-2">18 Feb 2024</p>
												</td>
												<td class="">
													<span>Jaction leo</span>
												</td>
												<td>
													<span class="text-success">$376.24</span>
												</td>
												<td class="pe-0">
													<span class="badge badge-primary light border-0">Completed</span>
												</td>
												<td>
													<div class="dropdown ms-2">
														<div class="btn-link custome-d" data-bs-toggle="dropdown">
															<svg width="9" height="9" viewBox="0 0 9 9" fill="none"
																xmlns="http://www.w3.org/2000/svg">
																<rect y="7" width="2" height="2" fill="black" />
																<rect width="2" height="2" fill="black" />
																<rect x="7" y="7" width="2" height="2" fill="black" />
																<rect x="7" width="2" height="2" fill="black" />
															</svg>
														</div>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item"
																href="javascript:void(0)">Delete</a>
															<a class="dropdown-item" href="javascript:void(0)">Edit</a>
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="form-check custom-checkbox">
														<input type="checkbox" class="form-check-input"
															id="customCheckBox33" required="">
														<label class="form-check-label" for="customCheckBox3"></label>
													</div>
													<span>129361179</span>
												</td>
												<td>
													<p class="mb-0 ms-2">18 Feb 2024</p>
												</td>
												<td class="">
													<span>Rolex leo</span>
												</td>
												<td>
													<span class="text-warning">$254.24</span>
												</td>
												<td class="pe-0">
													<span class="badge badge-warning light border-0">Inprogress</span>
												</td>
												<td>
													<div class="dropdown ms-2">
														<div class="btn-link custome-d" data-bs-toggle="dropdown">
															<svg width="9" height="9" viewBox="0 0 9 9" fill="none"
																xmlns="http://www.w3.org/2000/svg">
																<rect y="7" width="2" height="2" fill="black" />
																<rect width="2" height="2" fill="black" />
																<rect x="7" y="7" width="2" height="2" fill="black" />
																<rect x="7" width="2" height="2" fill="black" />
															</svg>
														</div>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item"
																href="javascript:void(0)">Delete</a>
															<a class="dropdown-item" href="javascript:void(0)">Edit</a>
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="form-check custom-checkbox">
														<input type="checkbox" class="form-check-input"
															id="customCheckBox33" required="">
														<label class="form-check-label" for="customCheckBox3"></label>
													</div>
													<span>129361179</span>
												</td>
												<td>
													<p class="mb-0 ms-2">18 Feb 2024</p>
												</td>
												<td class="">
													<span>Meview Otis</span>
												</td>
												<td>
													<span class="text-danger">$254.24</span>
												</td>
												<td class="pe-0">
													<span class="badge badge-danger light border-0">Pending</span>
												</td>
												<td>
													<div class="dropdown ms-2">
														<div class="btn-link custome-d" data-bs-toggle="dropdown">
															<svg width="9" height="9" viewBox="0 0 9 9" fill="none"
																xmlns="http://www.w3.org/2000/svg">
																<rect y="7" width="2" height="2" fill="black" />
																<rect width="2" height="2" fill="black" />
																<rect x="7" y="7" width="2" height="2" fill="black" />
																<rect x="7" width="2" height="2" fill="black" />
															</svg>
														</div>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item"
																href="javascript:void(0)">Delete</a>
															<a class="dropdown-item" href="javascript:void(0)">Edit</a>
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="form-check custom-checkbox">
														<input type="checkbox" class="form-check-input"
															id="customCheckBox33" required="">
														<label class="form-check-label" for="customCheckBox33"></label>
													</div>
													<span>129361171</span>
												</td>
												<td>
													<p class="mb-0 ms-2">18 Feb 2024</p>
												</td>
												<td class="">
													<span>Rolex leo</span>
												</td>
												<td>
													<span class="text-success">$376.24</span>
												</td>
												<td class="pe-0">
													<span class="badge badge-primary light border-0">Completed</span>
												</td>
												<td>
													<div class="dropdown ms-2">
														<div class="btn-link custome-d" data-bs-toggle="dropdown">
															<svg width="9" height="9" viewBox="0 0 9 9" fill="none"
																xmlns="http://www.w3.org/2000/svg">
																<rect y="7" width="2" height="2" fill="black" />
																<rect width="2" height="2" fill="black" />
																<rect x="7" y="7" width="2" height="2" fill="black" />
																<rect x="7" width="2" height="2" fill="black" />
															</svg>
														</div>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item"
																href="javascript:void(0)">Delete</a>
															<a class="dropdown-item" href="javascript:void(0)">Edit</a>
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="form-check custom-checkbox">
														<input type="checkbox" class="form-check-input"
															id="customCheckBox33" required="">
														<label class="form-check-label" for="customCheckBox2"></label>
													</div>
													<span>129361178</span>
												</td>
												<td>
													<p class="mb-0 ms-2">18 Feb 2024</p>
												</td>
												<td class="">
													<span>Jaction leo</span>
												</td>
												<td>
													<span class="text-success">$376.24</span>
												</td>
												<td class="pe-0">
													<span class="badge badge-primary light border-0">Completed</span>
												</td>
												<td>
													<div class="dropdown ms-2">
														<div class="btn-link custome-d" data-bs-toggle="dropdown">
															<svg width="9" height="9" viewBox="0 0 9 9" fill="none"
																xmlns="http://www.w3.org/2000/svg">
																<rect y="7" width="2" height="2" fill="black" />
																<rect width="2" height="2" fill="black" />
																<rect x="7" y="7" width="2" height="2" fill="black" />
																<rect x="7" width="2" height="2" fill="black" />
															</svg>
														</div>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item"
																href="javascript:void(0)">Delete</a>
															<a class="dropdown-item" href="javascript:void(0)">Edit</a>
														</div>
													</div>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-6">
						<div class="card">
							<div class="card-header border-dashed border-top-0 border-end-0 border-start-0 flex-wrap">
								<h4 class="mb-0">Best Selling Products</h4>
								<div class="d-flex align-items-center justify-content-between transaction">
									<a href="javascript:void(0);" class="btn">
										<svg width="16" height="16" viewBox="0 0 16 16" fill="none"
											xmlns="http://www.w3.org/2000/svg">
											<path d="M2.66699 4.66699H13.3337" stroke="black" stroke-linecap="round"
												stroke-linejoin="round"></path>
											<path d="M2.66699 8L9.33366 8" stroke="black" stroke-linecap="round"
												stroke-linejoin="round"></path>
											<path d="M2.66699 11.333H4.00033" stroke="black" stroke-linecap="round"
												stroke-linejoin="round"></path>
										</svg>
										Sort By
									</a>
									<a href="javascript:void(0);" class="btn">
										<svg width="16" height="16" viewBox="0 0 16 16" fill="none"
											xmlns="http://www.w3.org/2000/svg">
											<path
												d="M11.1594 3.33301H4.84121C3.98686 3.33301 3.52595 4.33513 4.08196 4.9838L6.42625 7.71881C6.5816 7.90005 6.66699 8.13089 6.66699 8.3696V11.3816C6.66699 11.7604 6.881 12.1067 7.21978 12.2761L7.88645 12.6094C8.55135 12.9419 9.33366 12.4584 9.33366 11.715V8.3696C9.33366 8.13089 9.41905 7.90005 9.5744 7.71881L11.9187 4.9838C12.4747 4.33513 12.0138 3.33301 11.1594 3.33301Z"
												stroke="#1C2430" stroke-linecap="round" stroke-linejoin="round"></path>
										</svg>
										Filter
									</a>
								</div>
							</div>
							<div class="card-body">
								<div class="best-selling-slider">
									<div class="swiper mySwiper1 swiper-lr">
										<div class="swiper-wrapper">
											<div class="swiper-slide">
												<div class="card">
													<div class="card-body product">
														<img src="assets/images/swiper/shirt2.jpg">
														<div class="product-imfo">
															<div class="d-flex justify-content-between">
																<span class="text-danger">up to 79% off</span>
																<h6 class="font-w600">$80</h6>
															</div>
															<div class="d-flex justify-content-between">
																<h6 class="font-w600">Block Tiered Dress.</h6>
																<span><del>$95</del></span>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="swiper-slide">
												<div class="card">
													<div class="card-body product">
														<img src="assets/images/swiper/shirt1.jpg">
														<div class="product-imfo">
															<div class="d-flex justify-content-between">
																<span class="text-danger">up to 79% off</span>
																<h6 class="font-w600">$80</h6>
															</div>
															<div class="d-flex justify-content-between">
																<h6 class="font-w600">Block Tiered Dress.</h6>
																<span><del>$95</del></span>
															</div>
														</div>
													</div>

												</div>
											</div>
											<div class="swiper-slide">
												<div class="card">
													<div class="card-body product">
														<img src="assets/images/swiper/shirt2.jpg">
														<div class="product-imfo">
															<div class="d-flex justify-content-between">
																<span class="text-danger">up to 79% off</span>
																<h6 class="font-w600">$80</h6>
															</div>
															<div class="d-flex justify-content-between">
																<h6 class="font-w600">Block Tiered Dress.</h6>
																<span><del>$95</del></span>
															</div>
														</div>
													</div>

												</div>
											</div>
											<div class="swiper-slide">
												<div class="card">
													<div class="card-body product">
														<img src="assets/images/swiper/shirt1.jpg">
														<div class="product-imfo">
															<div class="d-flex justify-content-between">
																<span class="text-danger">up to 79% off</span>
																<h6 class="font-w600">$80</h6>
															</div>
															<div class="d-flex justify-content-between">
																<h6 class="font-w600">Block Tiered Dress.</h6>
																<span><del>$95</del></span>
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
					<div class="col-xl-6 flag">
						<div class="card overflow-hidden">
							<div class="card-header border-0">
								<h4 class="mb-0">Active users</h4>
							</div>
							<div class="card-body pe-0">
								<div class="row">
									<div class="col-xl-8 active-map-main">
										<div id="world-map" class="active-map"></div>
									</div>
									<div class="col-xl-4 active-country dz-scroll">
										<div class="">
											<div class="country-list">
												<img src="assets/images/country/india.png" alt="">
												<div class="progress-box mt-0">
													<div class="d-flex justify-content-between">
														<p class="mb-0 c-name">India</p>
														<p class="mb-0">50%</p>
													</div>
													<div class="progress">
														<div class="progress-bar bg-primary"
															style="width:60%; height:5px; border-radius:4px;"
															role="progressbar"></div>
													</div>
												</div>
											</div>
											<div class="country-list">
												<img src="assets/images/country/canada.png" alt="">
												<div class="progress-box mt-0">
													<div class="d-flex justify-content-between">
														<p class="mb-0 c-name">Canada</p>
														<p class="mb-0">30%</p>
													</div>
													<div class="progress">
														<div class="progress-bar bg-primary"
															style="width:30%; height:5px; border-radius:4px;"
															role="progressbar"></div>
													</div>
												</div>
											</div>
											<div class="country-list">
												<img src="assets/images/country/russia.png" alt="">
												<div class="progress-box mt-0">
													<div class="d-flex justify-content-between">
														<p class="mb-0 c-name">Russia</p>
														<p class="mb-0">20%</p>
													</div>
													<div class="progress">
														<div class="progress-bar bg-primary"
															style="width:20%; height:5px; border-radius:4px;"
															role="progressbar"></div>
													</div>
												</div>
											</div>
											<div class="country-list">
												<img src="assets/images/country/uk.png" alt="">
												<div class="progress-box mt-0">
													<div class="d-flex justify-content-between">
														<p class="mb-0 c-name">United Kingdom</p>
														<p class="mb-0">40%</p>
													</div>
													<div class="progress">
														<div class="progress-bar bg-primary"
															style="width:40%; height:5px; border-radius:4px;"
															role="progressbar"></div>
													</div>
												</div>
											</div>
											<div class="country-list">
												<img src="assets/images/country/aus.png" alt="">
												<div class="progress-box mt-0">
													<div class="d-flex justify-content-between">
														<p class="mb-0 c-name">Australia</p>
														<p class="mb-0">60%</p>
													</div>
													<div class="progress">
														<div class="progress-bar bg-primary"
															style="width:70%; height:5px; border-radius:4px;"
															role="progressbar"></div>
													</div>
												</div>
											</div>
											<div class="country-list">
												<img src="assets/images/country/usa.png" alt="">
												<div class="progress-box mt-0">
													<div class="d-flex justify-content-between">
														<p class="mb-0 c-name">United States</p>
														<p class="mb-0">20%</p>
													</div>
													<div class="progress">
														<div class="progress-bar bg-primary"
															style="width:80%; height:5px; border-radius:4px;"
															role="progressbar"></div>
													</div>
												</div>
											</div>
											<div class="country-list">
												<img src="assets/images/country/pak.png" alt="">
												<div class="progress-box mt-0">
													<div class="d-flex justify-content-between">
														<p class="mb-0 c-name">Pakistan</p>
														<p class="mb-0">20%</p>
													</div>
													<div class="progress">
														<div class="progress-bar bg-primary"
															style="width:20%; height:5px; border-radius:4px;"
															role="progressbar"></div>
													</div>
												</div>
											</div>
											<div class="country-list">
												<img src="assets/images/country/germany.png" alt="">
												<div class="progress-box mt-0">
													<div class="d-flex justify-content-between">
														<p class="mb-0 c-name">Germany</p>
														<p class="mb-0">80%</p>
													</div>
													<div class="progress">
														<div class="progress-bar bg-primary"
															style="width:80%; height:5px; border-radius:4px;"
															role="progressbar"></div>
													</div>
												</div>
											</div>
											<div class="country-list">
												<img src="assets/images/country/uae.png" alt="">
												<div class="progress-box mt-0">
													<div class="d-flex justify-content-between">
														<p class="mb-0 c-name">UAE</p>
														<p class="mb-0">30%</p>
													</div>
													<div class="progress">
														<div class="progress-bar bg-primary"
															style="width:30%; height:5px; border-radius:4px;"
															role="progressbar"></div>
													</div>
												</div>
											</div>
											<div class="country-list">
												<img src="assets/images/country/china.png" alt="">
												<div class="progress-box mt-0">
													<div class="d-flex justify-content-between">
														<p class="mb-0 c-name">China</p>
														<p class="mb-0">40%</p>
													</div>
													<div class="progress">
														<div class="progress-bar bg-primary"
															style="width:40%; height:5px; border-radius:4px;"
															role="progressbar"></div>
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


		<!-- Initialize Swiper -->
		<script>
			var swiper = new Swiper(".mySwiper", {
				slidesPerView: 1.5,
				spaceBetween: 15,
				navigation: {
					nextEl: "",
					prevEl: "",
				},
				breakpoints: {
					360: {
						slidesPerView: 1.5,
						spaceBetween: 20,
					},
					768: {
						slidesPerView: 2.5,
						spaceBetween: 40,
					},
					1200: {
						slidesPerView: 1.5,
						spaceBetween: 20,
					},
				},
			});
			var swiper = new Swiper(".mySwiper1", {
				slidesPerView: 3.5,
				spaceBetween: 15,
				navigation: {
					nextEl: "",
					prevEl: "",
				},
				breakpoints: {
					360: {
						slidesPerView: 1.5,
						spaceBetween: 20,
					},
					768: {
						slidesPerView: 3.5,
						spaceBetween: 20,
					},
				},
			});
			jQuery(document).ready(function() {
				setTimeout(function() {
					icSettingsOptions.version = 'dark';
					new icSettings(icSettingsOptions);
					setCookie('version', 'dark');
				}, 1000)
			});
		</script>
</body>

</html>