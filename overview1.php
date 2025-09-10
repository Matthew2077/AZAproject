<?php
require_once __DIR__ . '/config/dz.php';
session_start()
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<!-- PAGE TITLE HERE -->
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
		<div class="content-body default-height">
			<div class="container-fluid">
				<div class="card profile-overview">
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
									<a href="javascript:void(0);" class="btn btn-primary ms-2">Hire Me</a>
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
					<div class="card-footer py-0 d-flex flex-wrap justify-content-between align-items-center">
						<ul class="nav nav-underline nav-underline-primary nav-underline-text-dark nav-underline-gap-x-0"
							id="tabMyProfileBottom" role="tablist">
							<li class="nav-item ms-1" role="presentation">
								<a href="overview1.php"
									class="nav-link py-3 border-3 text-black active">Overview</a>
							</li>
							<li class="nav-item ms-1" role="presentation">
								<a href="settings.php" class="nav-link py-3 border-3 text-black">Settings</a>
							</li>
							<li class="nav-item ms-1" role="presentation">
								<a href="security.php" class="nav-link py-3 border-3 text-black">Security</a>
							</li>
							<li class="nav-item ms-1" role="presentation">
								<a href="activity1.php" class="nav-link py-3 border-3 text-black">Activity</a>
							</li>
							<li class="nav-item ms-1" role="presentation">
								<a href="billing.php" class="nav-link py-3 border-3 text-black">Billing</a>
							</li>
							<li class="nav-item ms-1" role="presentation">
								<a href="statements.php"
									class="nav-link py-3 border-3 text-black">Statements</a>
							</li>
							<li class="nav-item ms-1" role="presentation">
								<a href="referrals.php" class="nav-link py-3 border-3 text-black">Referrals</a>
							</li>
							<li class="nav-item ms-1" role="presentation">
								<a href="api-keys.php" class="nav-link py-3 border-3 text-black">API Keys</a>
							</li>
							<li class="nav-item ms-1" role="presentation">
								<a href="logs.php" class="nav-link py-3 border-3 text-black">Logs</a>
							</li>
						</ul>
						<ul class="d-xl-flex d-none py-2">
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
						<div class="col-xl-5">
							<div class="card">
								<div class="card-header py-3">
									<h6 class="card-title">Profile Details</h6>
									<a href="javascript:void(0);" class="btn btn-sm btn-primary">Edit Profile</a>
								</div>
								<div class="card-body">
									<div class="row py-2">
										<div class="col-6">
											<span class="fs-13">Full Name</span>
										</div>
										<div class="col-6">
											<span class="fs-13 fw-semibold">Brad Dennis</span>
										</div>
									</div>
									<div class="row py-2">
										<div class="col-6">
											<span class="fs-13">Company</span>
										</div>
										<div class="col-6">
											<span class="fs-13 fw-semibold">DexignZone</span>
										</div>
									</div>
									<div class="row py-2">
										<div class="col-6">
											<span class="fs-13">Contact Phone</span>
										</div>
										<div class="col-6">
											<span class="fs-13 fw-semibold">123 456 7890</span>
										</div>
									</div>
									<div class="row py-2">
										<div class="col-6">
											<span class="fs-13">Company Site</span>
										</div>
										<div class="col-6">
											<span class="fs-13 fw-semibold">dexignzone.com</span>
										</div>
									</div>
									<div class="row py-2">
										<div class="col-6">
											<span class="fs-13">Country</span>
										</div>
										<div class="col-6">
											<span class="fs-13 fw-semibold">United States</span>
										</div>
									</div>
									<div class="row py-2">
										<div class="col-6">
											<span class="fs-13">Allow Changes</span>
										</div>
										<div class="col-6">
											<span class="fs-13 fw-semibold">Yes</span>
										</div>
									</div>
									<div class="row py-2">
										<div class="col-6">
											<span class="fs-13">Company Site</span>
										</div>
										<div class="col-6">
											<span class="fs-13 fw-semibold">dexignzone.com</span>
										</div>
									</div>
									<div
										class="alert alert-warning border-warning outline-dashed py-3 px-3 mt-4 mb-0 d-flex align-items-center">
										<div class="clearfix">
											<svg width="30" height="30" viewBox="0 0 30 30" fill="none"
												xmlns="http://www.w3.org/2000/svg">
												<path
													d="M15 30C18.9782 30 22.7936 28.4196 25.6066 25.6066C28.4196 22.7936 30 18.9782 30 15C30 11.0218 28.4196 7.20644 25.6066 4.3934C22.7936 1.58035 18.9782 0 15 0C11.0218 0 7.20644 1.58035 4.3934 4.3934C1.58035 7.20644 0 11.0218 0 15C0 18.9782 1.58035 22.7936 4.3934 25.6066C7.20644 28.4196 11.0218 30 15 30ZM12.6562 19.6875H14.0625V15.9375H12.6562C11.877 15.9375 11.25 15.3105 11.25 14.5312C11.25 13.752 11.877 13.125 12.6562 13.125H15.4688C16.248 13.125 16.875 13.752 16.875 14.5312V19.6875H17.3438C18.123 19.6875 18.75 20.3145 18.75 21.0938C18.75 21.873 18.123 22.5 17.3438 22.5H12.6562C11.877 22.5 11.25 21.873 11.25 21.0938C11.25 20.3145 11.877 19.6875 12.6562 19.6875ZM15 7.5C15.4973 7.5 15.9742 7.69754 16.3258 8.04918C16.6775 8.40081 16.875 8.87772 16.875 9.375C16.875 9.87228 16.6775 10.3492 16.3258 10.7008C15.9742 11.0525 15.4973 11.25 15 11.25C14.5027 11.25 14.0258 11.0525 13.6742 10.7008C13.3225 10.3492 13.125 9.87228 13.125 9.375C13.125 8.87772 13.3225 8.40081 13.6742 8.04918C14.0258 7.69754 14.5027 7.5 15 7.5Z"
													fill="#FF8A11"></path>
											</svg>
										</div>
										<div class="mx-3">
											<h6 class="mb-0 fw-semibold">We need your attention!</h6>
											<p class="mb-0 fs-13">Your Payment was declined. To start using tools,
												please <a href="javascript:void(0);" class="text-warning">Add Payment
													Method</a></p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-lg-6">
							<div class="card">
								<div class="card-header pb-0 border-0">
									<div class="clearfix">
										<h4 class="card-title mb-0">Projects Contributions</h4>
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
											class="avatar avatar-md border border-opacity-10 rounded d-flex align-items-center justify-content-center bg-white">
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
											class="avatar avatar-md border border-opacity-10 rounded d-flex align-items-center justify-content-center bg-white">
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
											class="avatar avatar-md border border-opacity-10 rounded d-flex align-items-center justify-content-center bg-white">
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
											class="avatar avatar-md border border-opacity-10 rounded d-flex align-items-center justify-content-center bg-white">
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
						<div class="col-xl-3 col-lg-6">
							<div class="card">
								<div class="card-body text-center p-3 pb-1">
									<div class="clearfix">
										<h4>Upgrade to Pro <br> Create Limitless Deals</h4>
										<p>Craft a headline that is both informative and will capture creating an
											outline, and checking facts</p>
										<a href="javascript:void(0);" class="btn btn-primary">Upgrade Now</a>
									</div>
									<div class="px-md-4">
										<img class="view-light w-100" src="assets/images/upgrade-light.png" alt="">
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-5">
							<div class="card">
								<div class="card-header pb-0 border-0">
									<div class="clearfix">
										<h4 class="card-title mb-0">Top Selling Categories</h4>
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
													<i class="fa-solid fa-square me-1"></i> Earbuds
												</div>
												<span>25</span>
											</div>
										</div>
									</div>
									<div
										class="alert alert-outline-light outline-dashed p-3 d-sm-flex align-items-center justify-content-between mb-0">
										<p class="mb-0">Category report for a company's quarterly sales performance</p>
										<div class="clearfix w-100 ms-auto text-sm-end mt-2 mt-sm-0">
											<a href="javascript:void(0);" class="btn btn-primary">Download Report</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-7">
							<div class="card">
								<div class="card-header border-0 py-3 pb-0">
									<h4 class="heading mb-0">Stock Report</h4>
									<div class="clearfix">
										<select class="default-select status-select normal-select">
											<option value="Slow All">Slow All</option>
											<option value="In Stock">In Stock</option>
											<option value="Out of Stock">Out of Stock</option>
										</select>
										<button type="button" class="btn btn-sm btn-primary ms-2">View All</button>
									</div>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table
											class="table mb-1 table-striped-thead table-wide table-md table-border-last-0">
											<thead>
												<tr>
													<th>Item</th>
													<th>Product Id</th>
													<th>Date Added</th>
													<th>Status</th>
													<th>Price</th>
													<th class="text-end">Qty</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>AudioEngine HD3</td>
													<td>#PXF-578</td>
													<td>Nov 01, 2024</td>
													<td><span class="badge badge-sm badge-success light border-0">In
															Stock</span></td>
													<td>$1,120</td>
													<td class="text-end">58 PCS</td>
												</tr>
												<tr>
													<td>Google Pixel 6 Pro</td>
													<td>#XGY-356</td>
													<td>Sep 27, 2024</td>
													<td><span class="badge badge-sm badge-danger light border-0">Out of
															Stock</span></td>
													<td>$440</td>
													<td class="text-end">14 PCS</td>
												</tr>
												<tr>
													<td>Dell 32 UltraSharp</td>
													<td>#SRR-678</td>
													<td>Jul 09, 2024</td>
													<td><span class="badge badge-sm badge-danger light border-0">Out of
															Stock</span></td>
													<td>$4,720</td>
													<td class="text-end">58 PCS</td>
												</tr>
												<tr>
													<td>Google Pixel 6 Pro</td>
													<td>#XGY-356</td>
													<td>May 14, 2024</td>
													<td><span class="badge badge-sm badge-success light border-0">In
															Stock</span></td>
													<td>$120</td>
													<td class="text-end">11 PCS</td>
												</tr>
												<tr>
													<td>AudioEngine HD3</td>
													<td>#XGY-356</td>
													<td>Dec 30, 2024</td>
													<td><span class="badge badge-sm badge-success light border-0">In
															Stock</span></td>
													<td>$503</td>
													<td class="text-end">58 PCS</td>
												</tr>
												<tr>
													<td>Google Pixel 6 Pro</td>
													<td>#SRR-678</td>
													<td>Oct 25, 2024</td>
													<td><span class="badge badge-sm badge-danger light border-0">Out of
															Stock</span></td>
													<td>$102</td>
													<td class="text-end">96 PCS</td>
												</tr>
											</tbody>
										</table>
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