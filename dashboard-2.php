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
				<div class="row">
					<div class="col-xl-3 col-sm-6">
						<div class="card">
							<div class="card-header border-0 pb-0">
								<h6 class="mb-0">Sales</h6>
								<div class="dropdown ms-auto c-pointer">
									<div class="btn-link" data-bs-toggle="dropdown">
										<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="0" y="0" width="24" height="24"></rect>
												<circle fill="#000000" cx="5" cy="12" r="2"></circle>
												<circle fill="#000000" cx="12" cy="12" r="2"></circle>
												<circle fill="#000000" cx="19" cy="12" r="2"></circle>
											</g>
										</svg>
									</div>
									<div class="dropdown-menu dropdown-menu-end">
										<a class="dropdown-item" href="javascript:void(0);">Edit</a>
										<a class="dropdown-item" href="javascript:void(0);">Delete</a>
									</div>
								</div>
							</div>
							<div class="card-body pt-2">
								<div class="d-flex align-items-center justify-content-between">
									<div>
										<h2 class="card-title">69,700</h2>
										<span><small class="text-success font-w600 me-1">+1.6%</small>than last
											week</span>
									</div>

									<div id="totalInvoices"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-sm-6">
						<div class="card">
							<div class="card-header border-0 pb-0">
								<h6 class="mb-0">Earnings</h6>
								<div class="dropdown ms-auto c-pointer">
									<div class="btn-link" data-bs-toggle="dropdown">
										<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="0" y="0" width="24" height="24"></rect>
												<circle fill="#000000" cx="5" cy="12" r="2"></circle>
												<circle fill="#000000" cx="12" cy="12" r="2"></circle>
												<circle fill="#000000" cx="19" cy="12" r="2"></circle>
											</g>
										</svg>
									</div>
									<div class="dropdown-menu dropdown-menu-end">
										<a class="dropdown-item" href="javascript:void(0);">Edit</a>
										<a class="dropdown-item" href="javascript:void(0);">Delete</a>
									</div>
								</div>
							</div>
							<div class="card-body pt-2">
								<div class="d-flex align-items-center justify-content-between">
									<div>
										<h2 class="card-title">40,700</h2>
										<span><small class="text-danger font-w600 me-1">-1.6%</small>than last
											week</span>
									</div>

									<div id="chart"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-sm-6">
						<div class="card">
							<div class="card-header border-0 pb-0">
								<h6 class="mb-0">Users</h6>
								<div class="dropdown ms-auto c-pointer">
									<div class="btn-link" data-bs-toggle="dropdown">
										<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="0" y="0" width="24" height="24"></rect>
												<circle fill="#000000" cx="5" cy="12" r="2"></circle>
												<circle fill="#000000" cx="12" cy="12" r="2"></circle>
												<circle fill="#000000" cx="19" cy="12" r="2"></circle>
											</g>
										</svg>
									</div>
									<div class="dropdown-menu dropdown-menu-end">
										<a class="dropdown-item" href="javascript:void(0);">Edit</a>
										<a class="dropdown-item" href="javascript:void(0);">Delete</a>
									</div>
								</div>
							</div>
							<div class="card-body pt-2">
								<div class="d-flex align-items-center justify-content-between">
									<div>
										<h2 class="card-title">5.2700</h2>
										<span><small class="text-danger font-w600 me-1">-1.6%</small>than last
											week</span>
									</div>

									<div id="chart-1"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-sm-6">
						<div class="card">
							<div class="card-header border-0 pb-0">
								<h6 class="mb-0">View</h6>
								<div class="dropdown ms-auto c-pointer">
									<div class="btn-link" data-bs-toggle="dropdown">
										<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="0" y="0" width="24" height="24"></rect>
												<circle fill="#000000" cx="5" cy="12" r="2"></circle>
												<circle fill="#000000" cx="12" cy="12" r="2"></circle>
												<circle fill="#000000" cx="19" cy="12" r="2"></circle>
											</g>
										</svg>
									</div>
									<div class="dropdown-menu dropdown-menu-end">
										<a class="dropdown-item" href="javascript:void(0);">Edit</a>
										<a class="dropdown-item" href="javascript:void(0);">Delete</a>
									</div>
								</div>
							</div>
							<div class="card-body pt-2">
								<div class="d-flex align-items-center justify-content-between">
									<div>
										<h2 class="card-title">6.2589</h2>
										<span><small class="text-success font-w600 me-1">+1.6%</small>than last
											week</span>
									</div>
									<div id="totalInvoices-1"></div>

								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-8">
						<div class="card">
							<div class="card-header">
								<h4 class="mb-0">Earnings Prediction</h4>
							</div>
							<div class="card-body">
								<div id="EarningsPrediction"></div>
							</div>
						</div>
					</div>
					<div class="col-xl-4">
						<div class="card">
							<div class="card-header border-0 pb-0">
								<h4 class="mb-0">Users</h4>
							</div>
							<div class="card-body">
								<div class="row g-4">
									<div class="col-xl-4 col-md-4 col-6">
										<div class="avatar-card text-center border-dashed rounded px-2 py-3">
											<img class="avatar avatar-lg avatar-circle mb-2"
												src="assets/images/avatar/avatar1.jpg" alt="">
											<h6 class="mb-0">Jordana Niclany</h6>
											<span class="fs-12">jordan@mail.com</span>
										</div>
									</div>
									<div class="col-xl-4 col-md-4 col-6">
										<div class="avatar-card text-center border-dashed rounded px-2 py-3">
											<div
												class="avatar avatar-label avatar-lg bg-success-light text-success avatar-circle mb-2 mx-auto">
												KD</div>
											<h6 class="mb-0">Jacob Jack</h6>
											<span class="fs-12">jordan@mail.com</span>
										</div>
									</div>
									<div class="col-xl-4 col-md-4 col-6">
										<div
											class="avatar-card text-center border-dashed rounded px-2 py-3 bg-purple-light">
											<img class="avatar avatar-lg avatar-circle mb-2"
												src="assets/images/avatar/avatar3.jpg" alt="">
											<h6 class="mb-0">Sammy Nico</h6>
											<span class="fs-12">jordan@mail.com</span>
										</div>
									</div>
									<div class="col-xl-4 col-md-4 col-6">
										<div
											class="avatar-card text-center border-dashed rounded px-2 py-3 bg-cream-light">
											<img class="avatar avatar-lg avatar-circle mb-2"
												src="assets/images/avatar/avatar4.jpg" alt="">
											<h6 class="mb-0">Gibs Gibsy</h6>
											<span class="fs-12">jordan@mail.com</span>
										</div>
									</div>
									<div class="col-xl-4 col-md-4 col-6">
										<div class="avatar-card text-center border-dashed rounded px-2 py-3">
											<img class="avatar avatar-lg avatar-circle mb-2"
												src="assets/images/avatar/avatar5.jpg" alt="">
											<h6 class="mb-0">Sam Sammy</h6>
											<span class="fs-12">jordan@mail.com</span>
										</div>
									</div>
									<div class="col-xl-4 col-md-4 col-6">
										<div class="avatar-card text-center border-dashed rounded px-2 py-3">
											<img class="avatar avatar-lg avatar-circle mb-2"
												src="assets/images/avatar/avatar6.jpg" alt="">
											<h6 class="mb-0">Corey Core</h6>
											<span class="fs-12">jordan@mail.com</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-6">
						<div class="card">
							<div class="card-header">
								<h4 class="mb-0">Product Specific Earnings</h4>
							</div>
							<div class="card-body px-0">
								<ul class="nav nav-pills success-tab" id="pills-tab" role="tablist">
									<li class="nav-item" role="presentation">
										<button class="nav-link active" data-series="social" id="pills-social-tab"
											data-bs-toggle="pill" data-bs-target="#pills-social" type="button"
											role="tab" aria-selected="true">
											<svg xmlns="http://www.w3.org/2000/svg"
												xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
												viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<polygon points="0 0 24 0 24 24 0 24" />
													<path
														d="M16.5,4.5 C14.8905,4.5 13.00825,6.32463215 12,7.5 C10.99175,6.32463215 9.1095,4.5 7.5,4.5 C4.651,4.5 3,6.72217984 3,9.55040872 C3,12.6834696 6,16 12,19.5 C18,16 21,12.75 21,9.75 C21,6.92177112 19.349,4.5 16.5,4.5 Z"
														fill="var(--text-dark)" fill-rule="nonzero" opacity="0.3" />
													<path
														d="M12,19.5 C6,16 3,12.6834696 3,9.55040872 C3,6.72217984 4.651,4.5 7.5,4.5 C9.1095,4.5 10.99175,6.32463215 12,7.5 L12,19.5 Z"
														fill="var(--text-dark)" fill-rule="nonzero" />
												</g>
											</svg>
											<span>Social</span>
										</button>
									</li>
									<li class="nav-item" role="presentation">
										<button class="nav-link" data-series="project" id="pills-project-tab"
											data-bs-toggle="pill" data-bs-target="#pills-project" type="button"
											role="tab" aria-selected="false">
											<svg xmlns="http://www.w3.org/2000/svg"
												xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
												viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24" />
													<path
														d="M5.84026576,8 L18.1597342,8 C19.1999115,8 20.0664437,8.79732479 20.1528258,9.83390904 L20.8194924,17.833909 C20.9112219,18.9346631 20.0932459,19.901362 18.9924919,19.9930915 C18.9372479,19.9976952 18.8818364,20 18.8264009,20 L5.1735991,20 C4.0690296,20 3.1735991,19.1045695 3.1735991,18 C3.1735991,17.9445645 3.17590391,17.889153 3.18050758,17.833909 L3.84717425,9.83390904 C3.93355627,8.79732479 4.80008849,8 5.84026576,8 Z M10.5,10 C10.2238576,10 10,10.2238576 10,10.5 L10,11.5 C10,11.7761424 10.2238576,12 10.5,12 L13.5,12 C13.7761424,12 14,11.7761424 14,11.5 L14,10.5 C14,10.2238576 13.7761424,10 13.5,10 L10.5,10 Z"
														fill="var(--text-dark)" />
													<path
														d="M10,8 L8,8 L8,7 C8,5.34314575 9.34314575,4 11,4 L13,4 C14.6568542,4 16,5.34314575 16,7 L16,8 L14,8 L14,7 C14,6.44771525 13.5522847,6 13,6 L11,6 C10.4477153,6 10,6.44771525 10,7 L10,8 Z"
														fill="var(--text-dark)" fill-rule="nonzero" opacity="0.3" />
												</g>
											</svg>
											<span>Project</span>
										</button>
									</li>
									<li class="nav-item" role="presentation">
										<button class="nav-link" data-series="sale" id="pills-sale-tab"
											data-bs-toggle="pill" data-bs-target="#pills-sale" type="button" role="tab"
											aria-selected="false">
											<svg xmlns="http://www.w3.org/2000/svg"
												xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
												viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24" />
													<path
														d="M5,19 L20,19 C20.5522847,19 21,19.4477153 21,20 C21,20.5522847 20.5522847,21 20,21 L4,21 C3.44771525,21 3,20.5522847 3,20 L3,4 C3,3.44771525 3.44771525,3 4,3 C4.55228475,3 5,3.44771525 5,4 L5,19 Z"
														fill="var(--text-dark)" fill-rule="nonzero" />
													<path
														d="M8.7295372,14.6839411 C8.35180695,15.0868534 7.71897114,15.1072675 7.31605887,14.7295372 C6.9131466,14.3518069 6.89273254,13.7189711 7.2704628,13.3160589 L11.0204628,9.31605887 C11.3857725,8.92639521 11.9928179,8.89260288 12.3991193,9.23931335 L15.358855,11.7649545 L19.2151172,6.88035571 C19.5573373,6.44687693 20.1861655,6.37289714 20.6196443,6.71511723 C21.0531231,7.05733733 21.1271029,7.68616551 20.7848828,8.11964429 L16.2848828,13.8196443 C15.9333973,14.2648593 15.2823707,14.3288915 14.8508807,13.9606866 L11.8268294,11.3801628 L8.7295372,14.6839411 Z"
														fill="var(--text-dark)" fill-rule="nonzero" opacity="0.3"
														transform="translate(14.000019, 10.749981) scale(1, -1) translate(-14.000019, -10.749981) " />
												</g>
											</svg>
											<span>Sale</span></button>
									</li>
									<li class="nav-item" role="presentation">
										<button class="nav-link" data-series="all" id="pills-mobile-tab"
											data-bs-toggle="pill" data-bs-target="#pills-mobile" type="button"
											role="tab" aria-selected="false">
											<svg xmlns="http://www.w3.org/2000/svg"
												xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
												viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24" />
													<path
														d="M8,2.5 C7.30964406,2.5 6.75,3.05964406 6.75,3.75 L6.75,20.25 C6.75,20.9403559 7.30964406,21.5 8,21.5 L16,21.5 C16.6903559,21.5 17.25,20.9403559 17.25,20.25 L17.25,3.75 C17.25,3.05964406 16.6903559,2.5 16,2.5 L8,2.5 Z"
														fill="var(--text-dark)" opacity="0.3" />
													<path
														d="M8,2.5 C7.30964406,2.5 6.75,3.05964406 6.75,3.75 L6.75,20.25 C6.75,20.9403559 7.30964406,21.5 8,21.5 L16,21.5 C16.6903559,21.5 17.25,20.9403559 17.25,20.25 L17.25,3.75 C17.25,3.05964406 16.6903559,2.5 16,2.5 L8,2.5 Z M8,1 L16,1 C17.5187831,1 18.75,2.23121694 18.75,3.75 L18.75,20.25 C18.75,21.7687831 17.5187831,23 16,23 L8,23 C6.48121694,23 5.25,21.7687831 5.25,20.25 L5.25,3.75 C5.25,2.23121694 6.48121694,1 8,1 Z M9.5,1.75 L14.5,1.75 C14.7761424,1.75 15,1.97385763 15,2.25 L15,3.25 C15,3.52614237 14.7761424,3.75 14.5,3.75 L9.5,3.75 C9.22385763,3.75 9,3.52614237 9,3.25 L9,2.25 C9,1.97385763 9.22385763,1.75 9.5,1.75 Z"
														fill="var(--text-dark)" fill-rule="nonzero" />
												</g>
											</svg>
											<span>Mobile</span>
										</button>
									</li>
									<li class="nav-item" role="presentation">
										<button class="nav-link" data-series="all" id="pills-all1-tab"
											data-bs-toggle="pill" data-bs-target="#pills-all1" type="button" role="tab"
											aria-selected="false">
											<svg xmlns="http://www.w3.org/2000/svg"
												xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
												viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24" />
													<path
														d="M3.5,21 L20.5,21 C21.3284271,21 22,20.3284271 22,19.5 L22,8.5 C22,7.67157288 21.3284271,7 20.5,7 L10,7 L7.43933983,4.43933983 C7.15803526,4.15803526 6.77650439,4 6.37867966,4 L3.5,4 C2.67157288,4 2,4.67157288 2,5.5 L2,19.5 C2,20.3284271 2.67157288,21 3.5,21 Z"
														fill="var(--text-dark)" opacity="0.3" />
													<path
														d="M14.35,10.5 C13.54525,10.5 12.604125,11.4123161 12.1,12 C11.595875,11.4123161 10.65475,10.5 9.85,10.5 C8.4255,10.5 7.6,11.6110899 7.6,13.0252044 C7.6,14.5917348 9.1,16.25 12.1,18 C15.1,16.25 16.6,14.625 16.6,13.125 C16.6,11.7108856 15.7745,10.5 14.35,10.5 Z"
														fill="var(--text-dark)" fill-rule="nonzero" opacity="0.3" />
												</g>
											</svg>
											<span>All</span>
										</button>
									</li>
								</ul>
								<div class="tab-content" id="pills-tabContent">
									<div class="tab-pane fade show active" id="pills-social" role="tabpanel"
										aria-labelledby="pills-social-tab">
										<div class="table-responsive">
											<table class="table  card-table border-no success-tbl">
												<thead>
													<tr>
														<th>Project</th>
														<th>Avg.</th>
														<th>Date</th>
														<th>status</th>
														<th>Budget</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<img src="assets/images/earning/1.jpg" class="avatar avatar-xl"
																	alt="">
																<div class="ms-2 cat-name">
																	<h6 class="mb-0">Block Craft 3D</h6>
																	<span>A free game</span>
																</div>
															</div>
														</td>
														<td>66.99%</td>
														<td>20 Aug 2024</td>
														<td><span
																class="badge badge-primary light border-0">Inprogress</span>
														</td>
														<td>
															$4.5k
														</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<img src="assets/images/earning/2.jpg" class="avatar avatar-xl"
																	alt="">
																<div class="ms-2 cat-name">
																	<h6 class="mb-0">Survivalcraft</h6>
																	<span>A game with a focus</span>
																</div>
															</div>
														</td>
														<td>90.99%</td>
														<td>20 Aug 2024</td>
														<td><span
																class="badge badge-danger light border-0">Pending</span>
														</td>
														<td>
															$15.5k
														</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<img src="assets/images/earning/3.jpg" class="avatar avatar-xl"
																	alt="">
																<div class="ms-2 cat-name">
																	<h6 class="mb-0">Creativerse</h6>
																	<span>A free-to-play game</span>
																</div>
															</div>
														</td>
														<td>90.99%</td>
														<td>20 Aug 2024</td>
														<td><span
																class="badge badge-danger light border-0">Pending</span>
														</td>
														<td>
															$15.5k
														</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<img src="assets/images/earning/4.jpg" class="avatar avatar-xl"
																	alt="">
																<div class="ms-2 cat-name">
																	<h6 class="mb-0">Block Craft 3D</h6>
																	<span>A free game</span>
																</div>
															</div>
														</td>
														<td>66.99%</td>
														<td>20 Aug 2024</td>
														<td><span
																class="badge badge-primary light border-0">Inprogress</span>
														</td>
														<td>
															$4.5k
														</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<img src="assets/images/earning/5.jpg" class="avatar avatar-xl"
																	alt="">
																<div class="ms-2 cat-name">
																	<h6 class="mb-0">Survivalcraft</h6>
																	<span>A game with a focus</span>
																</div>
															</div>
														</td>
														<td>90.99%</td>
														<td>20 Aug 2024</td>
														<td><span
																class="badge badge-danger light border-0">Pending</span>
														</td>
														<td>
															$15.5k
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
									<div class="tab-pane fade" id="pills-project" role="tabpanel"
										aria-labelledby="pills-project-tab">
										<div class="table-responsive">
											<table class="table  card-table border-no success-tbl">
												<thead>
													<tr>
														<th>Project</th>
														<th>Avg.</th>
														<th>Date</th>
														<th>status</th>
														<th>Budget</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<img src="assets/images/earning/4.jpg" class="avatar avatar-xl"
																	alt="">
																<div class="ms-2 cat-name">
																	<h6 class="mb-0">Block Craft 3D</h6>
																	<span>A free game</span>
																</div>
															</div>
														</td>
														<td>66.99%</td>
														<td>20 Aug 2024</td>
														<td><span
																class="badge badge-primary light border-0">Inprogress</span>
														</td>
														<td>
															$4.5k
														</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<img src="assets/images/earning/5.jpg" class="avatar avatar-xl"
																	alt="">
																<div class="ms-2 cat-name">
																	<h6 class="mb-0">Survivalcraft</h6>
																	<span>A game with a focus</span>
																</div>
															</div>
														</td>
														<td>90.99%</td>
														<td>20 Aug 2024</td>
														<td><span
																class="badge badge-danger light border-0">Pending</span>
														</td>
														<td>
															$15.5k
														</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<img src="assets/images/earning/6.jpg" class="avatar avatar-xl"
																	alt="">
																<div class="ms-2 cat-name">
																	<h6 class="mb-0">Creativerse</h6>
																	<span>A free-to-play game</span>
																</div>
															</div>
														</td>
														<td>90.99%</td>
														<td>20 Aug 2024</td>
														<td><span
																class="badge badge-success light border-0">Success</span>
														</td>
														<td>
															$15.5k
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
									<div class="tab-pane fade" id="pills-sale" role="tabpanel"
										aria-labelledby="pills-sale-tab">
										<div class="table-responsive">
											<table class="table  card-table border-no success-tbl">
												<thead>
													<tr>
														<th>Project</th>
														<th>Avg.</th>
														<th>Date</th>
														<th>status</th>
														<th>Budget</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<img src="assets/images/earning/1.jpg" class="avatar avatar-xl"
																	alt="">
																<div class="ms-2 cat-name">
																	<h6 class="mb-0">Block Craft 3D</h6>
																	<span>A free game</span>
																</div>
															</div>
														</td>
														<td>66.99%</td>
														<td>20 Aug 2024</td>
														<td><span
																class="badge badge-primary light border-0">Inprogress</span>
														</td>
														<td>
															$4.5k
														</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<img src="assets/images/earning/2.jpg" class="avatar avatar-xl"
																	alt="">
																<div class="ms-2 cat-name">
																	<h6 class="mb-0">Survivalcraft</h6>
																	<span>A game with a focus</span>
																</div>
															</div>
														</td>
														<td>90.99%</td>
														<td>20 Aug 2024</td>
														<td><span
																class="badge badge-danger light border-0">Pending</span>
														</td>
														<td>
															$15.5k
														</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<img src="assets/images/earning/3.jpg" class="avatar avatar-xl"
																	alt="">
																<div class="ms-2 cat-name">
																	<h6 class="mb-0">Creativerse</h6>
																	<span>A free-to-play game</span>
																</div>
															</div>
														</td>
														<td>90.99%</td>
														<td>20 Aug 2024</td>
														<td><span
																class="badge badge-danger light border-0">Pending</span>
														</td>
														<td>
															$15.5k
														</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<img src="assets/images/earning/4.jpg" class="avatar avatar-xl"
																	alt="">
																<div class="ms-2 cat-name">
																	<h6 class="mb-0">Block Craft 3D</h6>
																	<span>A free game</span>
																</div>
															</div>
														</td>
														<td>66.99%</td>
														<td>20 Aug 2024</td>
														<td><span
																class="badge badge-primary light border-0">Inprogress</span>
														</td>
														<td>
															$4.5k
														</td>
													</tr>

												</tbody>
											</table>
										</div>
									</div>
									<div class="tab-pane fade" id="pills-mobile" role="tabpanel"
										aria-labelledby="pills-mobile-tab">
										<div class="table-responsive">
											<table class="table  card-table border-no success-tbl">
												<thead>
													<tr>
														<th>Project</th>
														<th>Avg.</th>
														<th>Date</th>
														<th>status</th>
														<th>Budget</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<img src="assets/images/earning/1.jpg" class="avatar avatar-xl"
																	alt="">
																<div class="ms-2 cat-name">
																	<h6 class="mb-0">Block Craft 3D</h6>
																	<span>A free game</span>
																</div>
															</div>
														</td>
														<td>66.99%</td>
														<td>20 Aug 2024</td>
														<td><span
																class="badge badge-primary light border-0">Inprogress</span>
														</td>
														<td>
															$4.5k
														</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<img src="assets/images/earning/2.jpg" class="avatar avatar-xl"
																	alt="">
																<div class="ms-2 cat-name">
																	<h6 class="mb-0">Survivalcraft</h6>
																	<span>A game with a focus</span>
																</div>
															</div>
														</td>
														<td>90.99%</td>
														<td>20 Aug 2024</td>
														<td><span
																class="badge badge-danger light border-0">Pending</span>
														</td>
														<td>
															$15.5k
														</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<img src="assets/images/earning/3.jpg" class="avatar avatar-xl"
																	alt="">
																<div class="ms-2 cat-name">
																	<h6 class="mb-0">Creativerse</h6>
																	<span>A free-to-play game</span>
																</div>
															</div>
														</td>
														<td>90.99%</td>
														<td>20 Aug 2024</td>
														<td><span
																class="badge badge-danger light border-0">Pending</span>
														</td>
														<td>
															$15.5k
														</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<img src="assets/images/earning/4.jpg" class="avatar avatar-xl"
																	alt="">
																<div class="ms-2 cat-name">
																	<h6 class="mb-0">Block Craft 3D</h6>
																	<span>A free game</span>
																</div>
															</div>
														</td>
														<td>66.99%</td>
														<td>20 Aug 2024</td>
														<td><span
																class="badge badge-primary light border-0">Inprogress</span>
														</td>
														<td>
															$4.5k
														</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<img src="assets/images/earning/5.jpg" class="avatar avatar-xl"
																	alt="">
																<div class="ms-2 cat-name">
																	<h6 class="mb-0">Survivalcraft</h6>
																	<span>A game with a focus</span>
																</div>
															</div>
														</td>
														<td>90.99%</td>
														<td>20 Aug 2024</td>
														<td><span
																class="badge badge-danger light border-0">Pending</span>
														</td>
														<td>
															$15.5k
														</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<img src="assets/images/earning/6.jpg" class="avatar avatar-xl"
																	alt="">
																<div class="ms-2 cat-name">
																	<h6 class="mb-0">Creativerse</h6>
																	<span>A free-to-play game</span>
																</div>
															</div>
														</td>
														<td>90.99%</td>
														<td>20 Aug 2024</td>
														<td><span
																class="badge badge-success light border-0">Success</span>
														</td>
														<td>
															$15.5k
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
									<div class="tab-pane fade" id="pills-all1" role="tabpanel"
										aria-labelledby="pills-all1-tab">
										<div class="table-responsive">
											<table class="table  card-table border-no success-tbl">
												<thead>
													<tr>
														<th>Project</th>
														<th>Avg.</th>
														<th>Date</th>
														<th>status</th>
														<th>Budget</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<img src="assets/images/earning/1.jpg" class="avatar avatar-xl"
																	alt="">
																<div class="ms-2 cat-name">
																	<h6 class="mb-0">Block Craft 3D</h6>
																	<span>A free game</span>
																</div>
															</div>
														</td>
														<td>66.99%</td>
														<td>20 Aug 2024</td>
														<td><span
																class="badge badge-primary light border-0">Inprogress</span>
														</td>
														<td>
															$4.5k
														</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<img src="assets/images/earning/2.jpg" class="avatar avatar-xl"
																	alt="">
																<div class="ms-2 cat-name">
																	<h6 class="mb-0">Survivalcraft</h6>
																	<span>A game with a focus</span>
																</div>
															</div>
														</td>
														<td>90.99%</td>
														<td>20 Aug 2024</td>
														<td><span
																class="badge badge-danger light border-0">Pending</span>
														</td>
														<td>
															$15.5k
														</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<img src="assets/images/earning/3.jpg" class="avatar avatar-xl"
																	alt="">
																<div class="ms-2 cat-name">
																	<h6 class="mb-0">Creativerse</h6>
																	<span>A free-to-play game</span>
																</div>
															</div>
														</td>
														<td>90.99%</td>
														<td>20 Aug 2024</td>
														<td><span
																class="badge badge-danger light border-0">Pending</span>
														</td>
														<td>
															$15.5k
														</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<img src="assets/images/earning/4.jpg" class="avatar avatar-xl"
																	alt="">
																<div class="ms-2 cat-name">
																	<h6 class="mb-0">Block Craft 3D</h6>
																	<span>A free game</span>
																</div>
															</div>
														</td>
														<td>66.99%</td>
														<td>20 Aug 2024</td>
														<td><span
																class="badge badge-primary light border-0">Inprogress</span>
														</td>
														<td>
															$4.5k
														</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<img src="assets/images/earning/5.jpg" class="avatar avatar-xl"
																	alt="">
																<div class="ms-2 cat-name">
																	<h6 class="mb-0">Survivalcraft</h6>
																	<span>A game with a focus</span>
																</div>
															</div>
														</td>
														<td>90.99%</td>
														<td>20 Aug 2024</td>
														<td><span
																class="badge badge-danger light border-0">Pending</span>
														</td>
														<td>
															$15.5k
														</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<img src="assets/images/earning/6.jpg" class="avatar avatar-xl"
																	alt="">
																<div class="ms-2 cat-name">
																	<h6 class="mb-0">Creativerse</h6>
																	<span>A free-to-play game</span>
																</div>
															</div>
														</td>
														<td>90.99%</td>
														<td>20 Aug 2024</td>
														<td><span
																class="badge badge-success light border-0">Success</span>
														</td>
														<td>
															$15.5k
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
					<div class="col-xl-3">
						<div class="card">
							<div class="card-header">
								<h4 class="mb-0">Activity</h4>
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
												<span class="text-black fs-14 fw-semibold">john just buy your product
													Sell <span class="text-primary">$250</span></span>
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
												<span class="text-black fs-14 fw-semibold">StumbleUpon is acquired by
													<span class="text-primary">eBay</span></span>
											</div>
										</li>
										<li>
											<span class="timeline-status">11:12</span>
											<div class="timeline-badge border-primary"></div>
											<div class="timeline-panel">
												<span>shared this on my fb wall a few months back.</span>
											</div>
										</li>
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
												<span class="text-black fs-14 fw-semibold">john just buy your product
													Sell <span class="text-primary">$250</span></span>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3">
						<div class="card">
							<div class="card-header pb-0 border-0">
								<div class="clearfix">
									<h5 class=" mb-0">Projects Contributions</h5>
									<small class="d-block">84 New Tasks & 29 Guides</small>
								</div>
								<div class="clearfix ms-auto">
									<button type="button"
										class="btn btn-light btn-icon-xxs tp-btn fs-18 align-self-start"><i
											class="bi bi-grid"></i></button>
								</div>
							</div>
							<div class="card-body">
								<div class="d-flex align-items-center py-2 hover-bg-light rounded my-1">
									<div
										class="avatar avatar-md style-1 border border-opacity-10 rounded d-flex align-items-center justify-content-center bg-white">
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
									<div
										class="avatar avatar-md style-1 border border-opacity-10 rounded d-flex align-items-center justify-content-center bg-white">
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
									<div
										class="avatar avatar-md style-1 border border-opacity-10 rounded d-flex align-items-center justify-content-center bg-white">
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
								<div class="d-flex align-items-center py-2 hover-bg-light rounded my-1">
									<div
										class="avatar avatar-md style-1 border border-opacity-10 rounded d-flex align-items-center justify-content-center bg-white">
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
									<div
										class="avatar avatar-md style-1 border border-opacity-10 rounded d-flex align-items-center justify-content-center bg-white">
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
									<div
										class="avatar avatar-md style-1 border border-opacity-10 rounded d-flex align-items-center justify-content-center bg-white">
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
								<div class="d-flex align-items-center py-2 hover-bg-light rounded my-1">
									<div
										class="avatar avatar-md style-1 border border-opacity-10 rounded d-flex align-items-center justify-content-center bg-white">
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
								<div
									class="alert alert-primary border-primary outline-dashed py-3 px-3 mt-4 mb-0 text-black">
									<strong class="text-primary">Intive New .NET Collaborators</strong> to creating
									great outstanding business to business .jsp modutr class scripts
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
</body>

</html>