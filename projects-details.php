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
								<a href="projects.php"
									class="nav-link py-3 border-3 text-black active">Projects</a>
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
					<div class="d-flex justify-content-between align-items-center mb-3">
						<h5 class="mb-0">Projects Details</h5>
						<div class="d-flex align-items-center">
							<a href="projects.php" class="btn-link ms-2">More Project</a>
						</div>
					</div>
					<div class="row">
						<div class="col-xl-4 col-lg-6">
							<div class="card">
								<div class="card-header pb-0 border-0">
									<div class="clearfix">
										<h5 class="mb-0">Tasks Summary</h5>
										<small class="d-block">24 Overdue Tasks</small>
									</div>
									<a href="javascript:void(0);" class="btn btn-sm btn-light">View Tasks</a>
								</div>
								<div class="card-body">
									<div class="row align-items-center">
										<div class="col-sm-6 mb-3">
											<div id="chartTasksSummary" class="project-chart"></div>
										</div>
										<div class="col-sm-6 mb-3">
											<div class="d-flex justify-content-between mb-3">
												<div class="text-black">
													<i class="fa-solid fa-square text-primary me-1"></i> Employee
												</div>
												<span>25</span>
											</div>
											<div class="d-flex justify-content-between mb-3">
												<div class="text-black">
													<i class="fa-solid fa-square text-success me-1"></i> Present
												</div>
												<span>17</span>
											</div>
											<div class="d-flex justify-content-between mb-3">
												<div class="text-black">
													<i class="fa-solid fa-square text-danger me-1"></i> Absent
												</div>
												<span>20</span>
											</div>
											<div class="d-flex justify-content-between">
												<div class="text-black">
													<i class="fa-solid fa-square text-warning me-1"></i> Holiday
												</div>
												<span>38</span>
											</div>
										</div>
									</div>
									<div class="alert alert-outline-light outline-dashed p-3 mb-0 text-black">
										<strong class="text-primary">Intive New .NET Collaborators</strong> to creating
										great outstanding business to business .jsp modutr class scripts
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-lg-6">
							<div class="card" id="user-activity">
								<div class="card-header pb-0 border-0 align-items-start">
									<div class="clearfix">
										<h5 class="mb-0">Tasks Over Time</h5>
										<div class="clearfix d-flex">
											<div class="chart-series me-3" id="seriesIncomplete">
												<svg width="8" height="3" viewBox="0 0 8 3" fill="none"
													xmlns="http://www.w3.org/2000/svg">
													<rect width="8" height="3" rx="1.5" fill="var(--bs-danger)" />
												</svg>
												<input class="d-none" type="checkbox" id="checkSeriesIncomplete"
													name="chart-series" value="Incomplete">
												<label class="mb-0 fs-14" for="checkSeriesIncomplete">Incomplete</label>
											</div>
											<div class="chart-series" id="seriesComple">
												<svg width="8" height="3" viewBox="0 0 8 3" fill="none"
													xmlns="http://www.w3.org/2000/svg">
													<rect width="8" height="3" rx="1.5" fill="var(--primary)" />
												</svg>
												<input class="d-none" type="checkbox" id="checkSeriesComple"
													name="chart-series" value="Comple">
												<label class="mb-0 fs-14" for="checkSeriesComple">Complete</label>
											</div>
										</div>
									</div>
									<select class="default-select status-select normal-select">
										<option value="2024">2024</option>
										<option value="2021">2021</option>
										<option value="2022">2022</option>
										<option value="2024">2024</option>
										<option value="2024">2024</option>
									</select>
								</div>
								<div class="card-body ps-0 pe-1 pb-1">
									<div id="chartTasksOverTime"></div>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-lg-6">
							<div class="card">
								<div class="card-header pb-0 border-0">
									<div class="clearfix">
										<h5 class="mb-0">Projects Contributions</h5>
										<small class="d-block">84 New Tasks & 29 Guides</small>
									</div>
									<div class="clearfix ms-auto">
										<button type="button"
											class="btn btn-light btn-icon-xxs tp-btn fs-18 align-self-start"><i
												class="flaticon-app"></i></button>
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
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-lg-6">
							<div class="card">
								<div class="card-header pb-0 border-0">
									<div class="clearfix">
										<h5 class="mb-0">New Contributors</h5>
										<small class="d-block">From total 482 Participants</small>
									</div>
									<a href="javascript:void(0);" class="btn btn-sm btn-light">View All</a>
								</div>
								<div class="card-body">
									<div class="d-flex align-items-center py-2">
										<div class="d-inline-block position-relative">
											<img src="assets/images/avatar/5.jpg" alt=""
												class="rounded-circle avatar avatar-sm">
											<span
												class="fa fa-circle text-success position-absolute bottom-0 end-0 fs-8"></span>
										</div>
										<div class="clearfix ms-3">
											<h6 class="mb-0 fw-semibold">Karina Clark</h6>
											<span class="fs-13">8 Pending & 97 Completed Tasks</span>
										</div>
										<div class="clearfix ms-auto">
											<span class="badge badge-sm badge-light">8</span>
										</div>
									</div>
									<div class="d-flex align-items-center py-2">
										<div class="d-inline-block position-relative">
											<img src="assets/images/avatar/6.jpg" alt=""
												class="rounded-circle avatar avatar-sm">
											<span
												class="fa fa-circle text-success position-absolute bottom-0 end-0 fs-8"></span>
										</div>
										<div class="clearfix ms-3">
											<h6 class="mb-0 fw-semibold">Rober Doe</h6>
											<span class="fs-13">8 Pending & 97 Completed Tasks</span>
										</div>
										<div class="clearfix ms-auto">
											<span class="badge badge-sm badge-light">6</span>
										</div>
									</div>
									<div class="d-flex align-items-center py-2">
										<div
											class="avatar avatar-sm bg-success-light text-success rounded-circle d-flex align-items-center justify-content-center">
											N</div>
										<div class="clearfix ms-3">
											<h6 class="mb-0 fw-semibold">Neil Owen</h6>
											<span class="fs-13">8 Pending & 97 Completed Tasks</span>
										</div>
										<div class="clearfix ms-auto">
											<span class="badge badge-sm badge-light">7</span>
										</div>
									</div>
									<div class="d-flex align-items-center py-2">
										<div class="d-inline-block position-relative">
											<img src="assets/images/avatar/7.jpg" alt=""
												class="rounded-circle avatar avatar-sm">
											<span
												class="fa fa-circle text-success position-absolute bottom-0 end-0 fs-8"></span>
										</div>
										<div class="clearfix ms-3">
											<h6 class="mb-0 fw-semibold">Olivia Wild</h6>
											<span class="fs-13">8 Pending & 97 Completed Tasks</span>
										</div>
										<div class="clearfix ms-auto">
											<span class="badge badge-sm badge-light">5</span>
										</div>
									</div>
									<div class="d-flex align-items-center py-2">
										<div class="d-inline-block position-relative">
											<div
												class="avatar avatar-sm bg-info-light text-info rounded-circle d-flex align-items-center justify-content-center">
												S</div>
											<span
												class="fa fa-circle bored border-light text-success position-absolute bottom-0 end-0 fs-8"></span>
										</div>
										<div class="clearfix ms-3">
											<h6 class="mb-0 fw-semibold">Sean Bean</h6>
											<span class="fs-13">8 Pending & 97 Completed Tasks</span>
										</div>
										<div class="clearfix ms-auto">
											<span class="badge badge-sm badge-light">3</span>
										</div>
									</div>
									<div class="d-flex align-items-center py-2">
										<div class="d-inline-block position-relative">
											<img src="assets/images/avatar/6.jpg" alt=""
												class="rounded-circle avatar avatar-sm">
											<span
												class="fa fa-circle text-success position-absolute bottom-0 end-0 fs-8"></span>
										</div>
										<div class="clearfix ms-3">
											<h6 class="mb-0 fw-semibold">Rober Doe</h6>
											<span class="fs-13">8 Pending & 97 Completed Tasks</span>
										</div>
										<div class="clearfix ms-auto">
											<span class="badge badge-sm badge-light">6</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-lg-6">
							<div class="card">
								<div class="card-header pb-0 border-0">
									<div class="clearfix">
										<h5 class="mb-0">My Tasks</h5>
										<small class="d-block">From total 482 Participants</small>
									</div>
									<a href="javascript:void(0);" class="btn btn-sm btn-light">View All</a>
								</div>
								<div class="card-body">
									<div class="d-flex align-items-center py-2">
										<div class="timeline-vr-badge bg-light me-2"></div>
										<div class="form-check custom-checkbox">
											<input type="checkbox" class="form-check-input" id="customCheckBox1"
												required="">
											<label class="form-check-label" for="customCheckBox1"></label>
										</div>
										<div class="clearfix ms-2">
											<h6 class="mb-0 fw-semibold">Create FureStibe branding logo</h6>
											<span class="fs-13">Due in 1 day <span class="text-primary">Karina
													Clark</span></span>
										</div>
										<div class="clearfix ms-auto">
											<button type="button"
												class="btn btn-light btn-icon-xxs tp-btn fs-18 align-self-start"><i
													class="flaticon-app"></i></button>
										</div>
									</div>
									<div class="d-flex align-items-center py-2">
										<div class="timeline-vr-badge bg-light me-2"></div>
										<div class="form-check custom-checkbox">
											<input type="checkbox" class="form-check-input" id="customCheckBox2"
												required="">
											<label class="form-check-label" for="customCheckBox2"></label>
										</div>
										<div class="clearfix ms-2">
											<h6 class="mb-0 fw-semibold">Schedule a meeting with FireBear CTO John</h6>
											<span class="fs-13">Due in 3 days <span class="text-primary">Rober
													Doe</span></span>
										</div>
										<div class="clearfix ms-auto">
											<button type="button"
												class="btn btn-light btn-icon-xxs tp-btn fs-18 align-self-start"><i
													class="flaticon-app"></i></button>
										</div>
									</div>
									<div class="d-flex align-items-center py-2">
										<div class="timeline-vr-badge bg-light me-2"></div>
										<div class="form-check custom-checkbox">
											<input type="checkbox" class="form-check-input" id="customCheckBox3"
												required="">
											<label class="form-check-label" for="customCheckBox3"></label>
										</div>
										<div class="clearfix ms-2">
											<h6 class="mb-0 fw-semibold">9 Degree Porject Estimation</h6>
											<span class="fs-13">Due in 1 week <span class="text-primary">Neil
													Owen</span></span>
										</div>
										<div class="clearfix ms-auto">
											<button type="button"
												class="btn btn-light btn-icon-xxs tp-btn fs-18 align-self-start"><i
													class="flaticon-app"></i></button>
										</div>
									</div>
									<div class="d-flex align-items-center py-2">
										<div class="timeline-vr-badge bg-light me-2"></div>
										<div class="form-check custom-checkbox">
											<input type="checkbox" class="form-check-input" id="customCheckBox4"
												required="">
											<label class="form-check-label" for="customCheckBox4"></label>
										</div>
										<div class="clearfix ms-2">
											<h6 class="mb-0 fw-semibold">Dashgboard UI & UX for Leafr CRM</h6>
											<span class="fs-13">Due in 1 week <span class="text-primary">Olivia
													Wild</span></span>
										</div>
										<div class="clearfix ms-auto">
											<button type="button"
												class="btn btn-light btn-icon-xxs tp-btn fs-18 align-self-start"><i
													class="flaticon-app"></i></button>
										</div>
									</div>
									<div class="d-flex align-items-center py-2">
										<div class="timeline-vr-badge bg-light me-2"></div>
										<div class="form-check custom-checkbox">
											<input type="checkbox" class="form-check-input" id="customCheckBox5"
												required="">
											<label class="form-check-label" for="customCheckBox5"></label>
										</div>
										<div class="clearfix ms-2">
											<h6 class="mb-0 fw-semibold">Mivy App R&D, Meeting with clients</h6>
											<span class="fs-13">Due in 2 weeks <span class="text-primary">Sean
													Bean</span></span>
										</div>
										<div class="clearfix ms-auto">
											<button type="button"
												class="btn btn-light btn-icon-xxs tp-btn fs-18 align-self-start"><i
													class="flaticon-app"></i></button>
										</div>
									</div>
									<div class="d-flex align-items-center py-2">
										<div class="timeline-vr-badge bg-light me-2"></div>
										<div class="form-check custom-checkbox">
											<input type="checkbox" class="form-check-input" id="customCheckBox6"
												required="">
											<label class="form-check-label" for="customCheckBox6"></label>
										</div>
										<div class="clearfix ms-2">
											<h6 class="mb-0 fw-semibold">Create FureStibe branding logo</h6>
											<span class="fs-13">Due in 1 day <span class="text-primary">Karina
													Clark</span></span>
										</div>
										<div class="clearfix ms-auto">
											<button type="button"
												class="btn btn-light btn-icon-xxs tp-btn fs-18 align-self-start"><i
													class="flaticon-app"></i></button>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-lg-6">
							<div class="card">
								<div class="card-header pb-0 border-0">
									<div class="clearfix">
										<h5 class="mb-0">Latest Files</h5>
										<small class="d-block">Total 382 fiels, 2,6GB space usage</small>
									</div>
									<a href="javascript:void(0);" class="btn btn-sm btn-light">View All</a>
								</div>
								<div class="card-body">
									<div class="d-flex align-items-center py-2">
										<div class="d-flex align-items-center">
											<div class="me-2">
												<img src="assets/images/files/pdf.png" width="32" alt="">
											</div>
											<div class="clearfix">
												<h6 class="mb-0 fw-semibold">Project tech requirements</h6>
												<span class="fs-13">2 days ago <span class="text-primary">Karina
														Clark</span></span>
											</div>
										</div>
										<div class="clearfix ms-auto">
											<button type="button"
												class="btn btn-light btn-icon-xxs tp-btn fs-18 align-self-start"><i
													class="flaticon-app"></i></button>
										</div>
									</div>
									<div class="d-flex align-items-center py-2">
										<div class="d-flex align-items-center">
											<div class="me-2">
												<img src="assets/images/files/css.png" width="32" alt="">
											</div>
											<div class="clearfix">
												<h6 class="mb-0 fw-semibold">Create FureStibe branding logo</h6>
												<span class="fs-13">Due in 1 day <span class="text-primary">Karina
														Clark</span></span>
											</div>
										</div>
										<div class="clearfix ms-auto">
											<button type="button"
												class="btn btn-light btn-icon-xxs tp-btn fs-18 align-self-start"><i
													class="flaticon-app"></i></button>
										</div>
									</div>
									<div class="d-flex align-items-center py-2">
										<div class="d-flex align-items-center">
											<div class="me-2">
												<img src="assets/images/files/csv.png" width="32" alt="">
											</div>
											<div class="clearfix">
												<h6 class="mb-0 fw-semibold">Create FureStibe branding logo</h6>
												<span class="fs-13">Due in 1 day <span class="text-primary">Karina
														Clark</span></span>
											</div>
										</div>
										<div class="clearfix ms-auto">
											<button type="button"
												class="btn btn-light btn-icon-xxs tp-btn fs-18 align-self-start"><i
													class="flaticon-app"></i></button>
										</div>
									</div>
									<div class="d-flex align-items-center py-2">
										<div class="d-flex align-items-center">
											<div class="me-2">
												<img src="assets/images/files/mp3.png" width="32" alt="">
											</div>
											<div class="clearfix">
												<h6 class="mb-0 fw-semibold">Create FureStibe branding logo</h6>
												<span class="fs-13">Due in 1 day <span class="text-primary">Karina
														Clark</span></span>
											</div>
										</div>
										<div class="clearfix ms-auto">
											<button type="button"
												class="btn btn-light btn-icon-xxs tp-btn fs-18 align-self-start"><i
													class="flaticon-app"></i></button>
										</div>
									</div>
								</div>
								<div class="card-footer border-0">
									<div class="alert alert-primary border-primary outline-dashed py-3 px-3 d-flex align-items-center mb-0">
										<svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path opacity="0.25"
												d="M4.125 5.5C4.125 3.22183 5.97183 1.375 8.25 1.375H21.6664C22.7604 1.375 23.8096 1.8096 24.5832 2.58318L27.6668 5.66682C28.4404 6.4404 28.875 7.48961 28.875 8.58363V27.5C28.875 29.7782 27.0282 31.625 24.75 31.625H8.25C5.97183 31.625 4.125 29.7782 4.125 27.5V5.5Z"
												fill="#0D99FF" />
											<path
												d="M20.625 2.60123C20.625 1.924 21.174 1.375 21.8512 1.375C22.8269 1.375 23.7626 1.76258 24.4525 2.45247L27.7975 5.79753C28.4874 6.48742 28.875 7.42312 28.875 8.39877C28.875 9.076 28.326 9.625 27.6488 9.625H22C21.2406 9.625 20.625 9.00939 20.625 8.25V2.60123Z"
												fill="#0D99FF" />
											<path
												d="M15.9737 12.4793C15.8115 12.5464 15.6596 12.6459 15.5277 12.7777L11.4027 16.9027C10.8658 17.4397 10.8658 18.3103 11.4027 18.8473C11.9397 19.3842 12.8103 19.3842 13.3473 18.8473L15.125 17.0695V23.375C15.125 24.1344 15.7406 24.75 16.5 24.75C17.2594 24.75 17.875 24.1344 17.875 23.375V17.0695L19.6527 18.8473C20.1897 19.3842 21.0603 19.3842 21.5973 18.8473C22.1342 18.3103 22.1342 17.4397 21.5973 16.9027L17.4723 12.7777C17.0671 12.3726 16.4721 12.2731 15.9737 12.4793Z"
												fill="#0D99FF" />
										</svg>
										<div class="mx-3">
											<h6 class="fw-semibold mb-1">Quick file uploader</h6>
											<p class="fs-14 mb-0 text-black">Drag & Drop or choose files from computer
											</p>
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
</body>

</html>