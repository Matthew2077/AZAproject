<?php 
	 require_once __DIR__ . '/config/dz.php'; 
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <!-- PAGE TITLE HERE -->
	<title><?php echo $DexignZoneSettings['site_level']['site_title'] ?></title>

	<?php include 'elements/meta.php';?>
	
	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="<?php echo $DexignZoneSettings['site_level']['favicon']?>">
	
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
	<div id="main-wrapper">

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
			<!-- row -->
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-12 px-3">
						<div class="card">
							<div class="card-body">
								<div class="row">
									<div class="col-xl-7 col-xxl-6">
										<h3 class="font-w600">WorldNIC Company Profile Websites</h3>
										<p>Created by <strong class="text-black">WorldNIC</strong> on July 15, 2024</p>
										<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
											doloremque laudantium,
											<a href="https://worldnic.dexignzone.com/"
												class="text-primary">worldnic.dexignlab.com</a>
										</p>

										<div class="d-flex  justify-content-end align-items-center w-sm-50 w-100">
											<h6 class="me-3 mb-0">Total Progress 60%</h6>
											<div class="progress default-progress flex-1">
												<div class="progress-bar bg-gradient1 progress-animated"
													style="width: 45%; height:8px;" role="progressbar">
													<span class="sr-only">45% Complete</span>
												</div>
											</div>
										</div>

									</div>
									<div class="col-xl-5 col-xxl-6">
										<div
											class="d-flex align-items-center mb-xl-4 mb-0 pb-3 justify-content-xl-end justify-content-start flex-wrap mt-xl-0 mt-3">
											<div class="me-3">
												<h4>WorldNIC</h4>
												<p class="mb-0 text-xl-end text-start">Software House</p>
											</div>
											<div class="facebook-icon me-3">
												<a href="javascript:void(0);"><svg width="35" height="35"
														viewBox="0 0 35 35" fill="none"
														xmlns="http://www.w3.org/2000/svg">
														<rect width="35" height="35" rx="6" fill="#0074FF" />
														<mask id="mask0_441_174" style="mask-type:alpha"
															maskUnits="userSpaceOnUse" x="0" y="0" width="35"
															height="35">
															<rect width="35" height="35" rx="6" fill="#AAEEC4" />
														</mask>
														<g mask="url(#mask0_441_174)">
															<path
																d="M17.7488 30.9983L5.56445 12.5421L11.7055 10.6646L18.2944 22.2969L18.4529 22.2484L17.9258 8.76287L22.7594 7.2851L29.8755 18.7995L30.034 18.7511L28.9797 5.38336L35.1207 3.50586L35.34 25.6202L30.0706 27.2312L23.1593 16.9538L23.0009 17.0022L23.0183 29.3873L17.7488 30.9983Z"
																fill="white" />
														</g>
													</svg>
												</a>
											</div>
											<div>
												<div class="dropdown c-pointer">
													<div class="btn-link" data-bs-toggle="dropdown">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
															xmlns="http://www.w3.org/2000/svg">
															<circle cx="12.4999" cy="3.5" r="2.5" fill="#A5A5A5" />
															<circle cx="12.4999" cy="11.5" r="2.5" fill="#A5A5A5" />
															<circle cx="12.4999" cy="19.5" r="2.5" fill="#A5A5A5" />
														</svg>
													</div>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="javascript:void(0)">Delete</a>
														<a class="dropdown-item" href="javascript:void(0)">Edit</a>
													</div>
												</div>
											</div>
										</div>
										<div
											class="d-flex align-items-center pt-sm-4 pt-0 flex-wrap justify-content-xl-end justify-content-start pe-3">
											<div class="ms-0 my-3 my-sm-0 invite">
												<a href="javascript:void(0);"
													class="btn btn-primary light  mb-sm-0 mb-2 me-2 btn-sm"
													data-bs-toggle="modal" data-bs-target="#exampleModal"><i
														class="fas fa-user-plus me-3 scale2"></i>Invite People</a>
												<a href="javascript:void(0);" class="btn btn-primary light  btn-sm"><i
														class="far fa-comment-alt scale2 me-3"></i>45 Comments</a>
											</div>
											<ul class="kanbanimg1 ms-sm-3">
												<li><img src="assets/images/profile/small/pic1.jpg" alt=""></li>
												<li><img src="assets/images/profile/small/pic2.jpg" alt=""></li>
												<li><img src="assets/images/profile/small/pic3.jpg" alt=""></li>
												<li><img src="assets/images/profile/small/pic4.jpg" alt=""></li>
												<li><img src="assets/images/profile/small/pic5.jpg" alt=""></li>
												<li><a href="javascript:void(0);">5+</a></li>
											</ul>

										</div>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row kanban-bx px-3">
					<div class="col-xl-3 col-md-6 px-0">
						<div class="kanbanPreview-bx">
							<div class="draggable-zone dropzoneContainer">
								<div class="sub-card align-items-center d-flex justify-content-between mb-4">
									<div>
										<h4 class="mb-0">To-Do List (<span class="totalCount">24</span>)</h4>
									</div>
									<div class="plus-bx">
										<a href="javascript:void(0);"><i class="fas fa-plus"></i></a>
									</div>
								</div>
								<div class="card draggable-handle draggable">
									<div class="card-body">
										<div class="d-flex justify-content-between mb-2">
											<span class="sub-title">
												<svg class="me-2" width="10" height="10" viewBox="0 0 10 10" fill="none"
													xmlns="http://www.w3.org/2000/svg">
													<circle cx="5" cy="5" r="5" fill="#FFA7D7" />
												</svg>
												Deisgner
											</span>
											<div class="dropdown c-pointer">
												<div class="btn-link" data-bs-toggle="dropdown">
													<svg width="20" height="20" viewBox="0 0 24 24" fill="none"
														xmlns="http://www.w3.org/2000/svg">
														<circle cx="3.5" cy="11.5" r="2.5"
															transform="rotate(-90 3.5 11.5)" fill="#717579" />
														<circle cx="11.5" cy="11.5" r="2.5"
															transform="rotate(-90 11.5 11.5)" fill="#717579" />
														<circle cx="19.5" cy="11.5" r="2.5"
															transform="rotate(-90 19.5 11.5)" fill="#717579" />
													</svg>
												</div>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="javascript:void(0)">Delete</a>
													<a class="dropdown-item" href="javascript:void(0)">Edit</a>
												</div>
											</div>
										</div>
										<h5 class="mb-0"><a href="javascript:void(0);" class="text-black">Create
												wireframe for landing page phase 1</a></h5>
										<div class="progress default-progress my-4">
											<div class="progress-bar bg-design progress-animated"
												style="width: 45%; height:7px;" role="progressbar">
												<span class="sr-only">45% Complete</span>
											</div>
										</div>
										<div class="row justify-content-between align-items-center kanban-user">
											<ul class="users col-6">
												<li><img src="assets/images/contacts/pic11.jpg" alt=""></li>
												<li><img src="assets/images/contacts/pic22.jpg" alt=""></li>
												<li><img src="assets/images/contacts/pic33.jpg" alt=""></li>
											</ul>
											<div class="col-6 d-flex justify-content-end">
												<span class="fs-14"><i class="far fa-clock me-2"></i>Due in 4
													days</span>
											</div>
										</div>
									</div>
								</div>
								<div class="card draggable-handle draggable">
									<div class="card-body">
										<div class="d-flex justify-content-between mb-2">
											<span class="text-warning">
												<svg class="me-2" width="10" height="10" viewBox="0 0 10 10" fill="none"
													xmlns="http://www.w3.org/2000/svg">
													<circle cx="5" cy="5" r="5" fill="#FFCF6D" />
												</svg>
												Important
											</span>
											<div class="dropdown c-pointer">
												<div class="btn-link" data-bs-toggle="dropdown">
													<svg width="20" height="20" viewBox="0 0 24 24" fill="none"
														xmlns="http://www.w3.org/2000/svg">
														<circle cx="3.5" cy="11.5" r="2.5"
															transform="rotate(-90 3.5 11.5)" fill="#717579" />
														<circle cx="11.5" cy="11.5" r="2.5"
															transform="rotate(-90 11.5 11.5)" fill="#717579" />
														<circle cx="19.5" cy="11.5" r="2.5"
															transform="rotate(-90 19.5 11.5)" fill="#717579" />
													</svg>
												</div>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="javascript:void(0)">Delete</a>
													<a class="dropdown-item" href="javascript:void(0)">Edit</a>
												</div>
											</div>
										</div>
										<h5 class="mb-0"><a href="javascript:void(0);" class="text-black">Visual Graphic
												for Presentation to Client</a></h5>
										<div class="progress default-progress my-4">
											<div class="progress-bar bg-warning progress-animated"
												style="width: 45%; height:7px;" role="progressbar">
												<span class="sr-only">45% Complete</span>
											</div>
										</div>
										<div class="row justify-content-between align-items-center kanban-user">
											<ul class="users col-6">
												<li><img src="assets/images/contacts/pic11.jpg" alt=""></li>
												<li><img src="assets/images/contacts/pic22.jpg" alt=""></li>
												<li><img src="assets/images/contacts/pic33.jpg" alt=""></li>
												<li><img src="assets/images/contacts/pic222.jpg" alt=""></li>
											</ul>
											<div class="col-6 d-flex justify-content-end">
												<p class="mb-0"><i class="far fa-clock me-2"></i>Due in 4 days</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-3 col-md-6 px-0">
						<div class="kanbanPreview-bx">
							<div class="draggable-zone dropzoneContainer">
								<div class="sub-card align-items-center d-flex justify-content-between mb-4">
									<div>
										<h4 class="mb-0">Done(<span class="totalCount">3</span>)</h4>
									</div>
									<div class="plus-bx">
										<a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
												class="fas fa-plus"></i></a>
									</div>
								</div>
								<div class="card draggable-handle draggable">
									<div class="card-body">
										<div class="d-flex justify-content-between mb-2">
											<span class="text-danger">
												<svg class="me-2" width="10" height="10" viewBox="0 0 10 10" fill="none"
													xmlns="http://www.w3.org/2000/svg">
													<circle cx="5" cy="5" r="5" fill="#FC2E53" />
												</svg>
												BUGS FIXING
											</span>
											<div class="dropdown c-pointer">
												<div class="btn-link" data-bs-toggle="dropdown">
													<svg width="20" height="20" viewBox="0 0 24 24" fill="none"
														xmlns="http://www.w3.org/2000/svg">
														<circle cx="3.5" cy="11.5" r="2.5"
															transform="rotate(-90 3.5 11.5)" fill="#717579" />
														<circle cx="11.5" cy="11.5" r="2.5"
															transform="rotate(-90 11.5 11.5)" fill="#717579" />
														<circle cx="19.5" cy="11.5" r="2.5"
															transform="rotate(-90 19.5 11.5)" fill="#717579" />
													</svg>
												</div>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="javascript:void(0)">Delete</a>
													<a class="dropdown-item" href="javascript:void(0)">Edit</a>
												</div>
											</div>
										</div>
										<h5 class="mb-0"><a href="javascript:void(0);" class="text-black">Update
												information in footer section</a></h5>
										<div class="progress default-progress my-4">
											<div class="progress-bar bg-danger progress-animated"
												style="width: 45%; height:7px;" role="progressbar">
												<span class="sr-only">45% Complete</span>
											</div>
										</div>
										<div class="row justify-content-between align-items-center kanban-user">
											<ul class="users col-6">
												<li><img src="assets/images/contacts/pic11.jpg" alt=""></li>
												<li><img src="assets/images/contacts/pic22.jpg" alt=""></li>
												<li><img src="assets/images/contacts/pic33.jpg" alt=""></li>
											</ul>
											<div class="col-6 d-flex justify-content-end">
												<p class="mb-0"><i class="far fa-clock me-2"></i>Due in 4 days</p>
											</div>
										</div>
									</div>
								</div>
								<div class="card draggable-handle draggable">
									<div class="card-body">
										<div class="d-flex justify-content-between mb-2">
											<span class="text-danger">
												<svg class="me-2" width="10" height="10" viewBox="0 0 10 10" fill="none"
													xmlns="http://www.w3.org/2000/svg">
													<circle cx="5" cy="5" r="5" fill="#FC2E53" />
												</svg>
												BUGS FIXING
											</span>
											<div class="dropdown c-pointer">
												<div class="btn-link" data-bs-toggle="dropdown">
													<svg width="20" height="20" viewBox="0 0 24 24" fill="none"
														xmlns="http://www.w3.org/2000/svg">
														<circle cx="3.5" cy="11.5" r="2.5"
															transform="rotate(-90 3.5 11.5)" fill="#717579" />
														<circle cx="11.5" cy="11.5" r="2.5"
															transform="rotate(-90 11.5 11.5)" fill="#717579" />
														<circle cx="19.5" cy="11.5" r="2.5"
															transform="rotate(-90 19.5 11.5)" fill="#717579" />
													</svg>
												</div>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="javascript:void(0)">Delete</a>
													<a class="dropdown-item" href="javascript:void(0)">Edit</a>
												</div>
											</div>
										</div>
										<h5 class="mb-0"><a href="javascript:void(0);" class="text-black">Update
												information in footer section</a></h5>
										<div class="progress default-progress my-4">
											<div class="progress-bar bg-danger progress-animated"
												style="width: 45%; height:7px;" role="progressbar">
												<span class="sr-only">45% Complete</span>
											</div>
										</div>
										<div class="row justify-content-between align-items-center kanban-user">
											<ul class="users col-6">
												<li><img src="assets/images/contacts/pic11.jpg" alt=""></li>
												<li><img src="assets/images/contacts/pic22.jpg" alt=""></li>
												<li><img src="assets/images/contacts/pic33.jpg" alt=""></li>
											</ul>
											<div class="col-6 d-flex justify-content-end">
												<p class="mb-0"><i class="far fa-clock me-2"></i>Due in 4 days</p>
											</div>
										</div>
									</div>
								</div>
								<div class="card draggable-handle draggable">
									<div class="card-body">
										<div class="d-flex justify-content-between mb-2">
											<span class="sub-title">
												<svg class="me-2" width="10" height="10" viewBox="0 0 10 10" fill="none"
													xmlns="http://www.w3.org/2000/svg">
													<circle cx="5" cy="5" r="5" fill="#FFA7D7" />
												</svg>
												HTML
											</span>
											<div class="dropdown c-pointer">
												<div class="btn-link" data-bs-toggle="dropdown">
													<svg width="20" height="20" viewBox="0 0 24 24" fill="none"
														xmlns="http://www.w3.org/2000/svg">
														<circle cx="3.5" cy="11.5" r="2.5"
															transform="rotate(-90 3.5 11.5)" fill="#717579" />
														<circle cx="11.5" cy="11.5" r="2.5"
															transform="rotate(-90 11.5 11.5)" fill="#717579" />
														<circle cx="19.5" cy="11.5" r="2.5"
															transform="rotate(-90 19.5 11.5)" fill="#717579" />
													</svg>
												</div>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="javascript:void(0)">Delete</a>
													<a class="dropdown-item" href="javascript:void(0)">Edit</a>
												</div>
											</div>
										</div>
										<h5 class="mb-0"><a href="javascript:void(0);" class="text-black">Create
												wireframe for landing page phase 1</a></h5>
										<div class="progress default-progress my-4">
											<div class="progress-bar bg-design progress-animated"
												style="width: 45%; height:7px;" role="progressbar">
												<span class="sr-only">45% Complete</span>
											</div>
										</div>
										<div class="row justify-content-between align-items-center kanban-user">
											<ul class="users col-6">
												<li><img src="assets/images/contacts/pic11.jpg" alt=""></li>
												<li><img src="assets/images/contacts/pic22.jpg" alt=""></li>
												<li><img src="assets/images/contacts/pic33.jpg" alt=""></li>
											</ul>
											<div class="col-6 d-flex justify-content-end">
												<p class="mb-0"><i class="far fa-clock me-2"></i>Due in 4 days</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-3 col-md-6 px-0">
						<div class="kanbanPreview-bx">
							<div class="draggable-zone dropzoneContainer">
								<div class="sub-card align-items-center d-flex justify-content-between mb-4">
									<div>
										<h4 class="mb-0">On Progress(<span class="totalCount">2</span>)</h4>
									</div>
									<div class="plus-bx">
										<a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
												class="fas fa-plus"></i></a>
									</div>
								</div>
								<div class="card draggable-handle draggable">
									<div class="card-body">
										<div class="d-flex justify-content-between mb-2">
											<span class="text-success">
												<svg class="me-2" width="10" height="10" viewBox="0 0 10 10" fill="none"
													xmlns="http://www.w3.org/2000/svg">
													<circle cx="5" cy="5" r="5" fill="#09BD3C" />
												</svg>
												UPDATE
											</span>
											<div class="dropdown c-pointer">
												<div class="btn-link" data-bs-toggle="dropdown">
													<svg width="20" height="20" viewBox="0 0 24 24" fill="none"
														xmlns="http://www.w3.org/2000/svg">
														<circle cx="3.5" cy="11.5" r="2.5"
															transform="rotate(-90 3.5 11.5)" fill="#717579" />
														<circle cx="11.5" cy="11.5" r="2.5"
															transform="rotate(-90 11.5 11.5)" fill="#717579" />
														<circle cx="19.5" cy="11.5" r="2.5"
															transform="rotate(-90 19.5 11.5)" fill="#717579" />
													</svg>
												</div>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="javascript:void(0)">Delete</a>
													<a class="dropdown-item" href="javascript:void(0)">Edit</a>
												</div>
											</div>
										</div>
										<h5 class="mb-0"><a href="javascript:void(0);" class="text-black">Update
												information in footer section</a></h5>
										<div class="progress default-progress my-4">
											<div class="progress-bar bg-success progress-animated"
												style="width: 45%; height:7px;" role="progressbar">
												<span class="sr-only">45% Complete</span>
											</div>
										</div>
										<div class="row justify-content-between align-items-center kanban-user">
											<ul class="users col-6">
												<li><img src="assets/images/contacts/pic11.jpg" alt=""></li>
												<li><img src="assets/images/contacts/pic22.jpg" alt=""></li>
												<li><img src="assets/images/contacts/pic33.jpg" alt=""></li>
											</ul>
											<div class="col-6 d-flex justify-content-end">
												<p class="mb-0"><i class="far fa-clock me-2"></i>Due in 4 days</p>
											</div>
										</div>
									</div>
								</div>
								<div class="card draggable-handle draggable">
									<div class="card-body">
										<div class="d-flex justify-content-between mb-2">
											<span class="text-info">
												<svg class="me-2" width="10" height="10" viewBox="0 0 10 10" fill="none"
													xmlns="http://www.w3.org/2000/svg">
													<circle cx="5" cy="5" r="5" fill="#D653C1" />
												</svg>
												Video
											</span>
											<div class="dropdown c-pointer">
												<div class="btn-link" data-bs-toggle="dropdown">
													<svg width="20" height="20" viewBox="0 0 24 24" fill="none"
														xmlns="http://www.w3.org/2000/svg">
														<circle cx="3.5" cy="11.5" r="2.5"
															transform="rotate(-90 3.5 11.5)" fill="#717579" />
														<circle cx="11.5" cy="11.5" r="2.5"
															transform="rotate(-90 11.5 11.5)" fill="#717579" />
														<circle cx="19.5" cy="11.5" r="2.5"
															transform="rotate(-90 19.5 11.5)" fill="#717579" />
													</svg>
												</div>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="javascript:void(0)">Delete</a>
													<a class="dropdown-item" href="javascript:void(0)">Edit</a>
												</div>
											</div>
										</div>
										<h5 class="mb-0"><a href="javascript:void(0);" class="text-black">Update
												information in footer section</a></h5>
										<div class="progress default-progress my-4">
											<div class="progress-bar bg-info progress-animated"
												style="width: 45%; height:7px;" role="progressbar">
												<span class="sr-only">45% Complete</span>
											</div>
										</div>
										<div class="row justify-content-between align-items-center kanban-user">
											<ul class="users col-6">
												<li><img src="assets/images/contacts/pic11.jpg" alt=""></li>
												<li><img src="assets/images/contacts/pic22.jpg" alt=""></li>
												<li><img src="assets/images/contacts/pic33.jpg" alt=""></li>
											</ul>
											<div class="col-6 d-flex justify-content-end">
												<p class="mb-0"><i class="far fa-clock me-2"></i>Due in 4 days</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-md-6 px-0">
						<div class="kanbanPreview-bx">
							<div class="draggable-zone dropzoneContainer">
								<div class="sub-card align-items-center d-flex justify-content-between mb-4">
									<div>
										<h4 class="mb-0">Done(<span class="totalCount">3</span>)</h4>
									</div>
									<div class="plus-bx">
										<a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
												class="fas fa-plus"></i></a>
									</div>
								</div>
								<div class="card draggable-handle draggable">
									<div class="card-body">
										<div class="d-flex justify-content-between mb-2">
											<span class="text-danger">
												<svg class="me-2" width="10" height="10" viewBox="0 0 10 10" fill="none"
													xmlns="http://www.w3.org/2000/svg">
													<circle cx="5" cy="5" r="5" fill="#FC2E53" />
												</svg>
												BUGS FIXING
											</span>
											<div class="dropdown c-pointer">
												<div class="btn-link" data-bs-toggle="dropdown">
													<svg width="20" height="20" viewBox="0 0 24 24" fill="none"
														xmlns="http://www.w3.org/2000/svg">
														<circle cx="3.5" cy="11.5" r="2.5"
															transform="rotate(-90 3.5 11.5)" fill="#717579" />
														<circle cx="11.5" cy="11.5" r="2.5"
															transform="rotate(-90 11.5 11.5)" fill="#717579" />
														<circle cx="19.5" cy="11.5" r="2.5"
															transform="rotate(-90 19.5 11.5)" fill="#717579" />
													</svg>
												</div>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="javascript:void(0)">Delete</a>
													<a class="dropdown-item" href="javascript:void(0)">Edit</a>
												</div>
											</div>
										</div>
										<h5 class="mb-0"><a href="javascript:void(0);" class="text-black">Update
												information in footer section</a></h5>
										<div class="progress default-progress my-4">
											<div class="progress-bar bg-danger progress-animated"
												style="width: 45%; height:7px;" role="progressbar">
												<span class="sr-only">45% Complete</span>
											</div>
										</div>
										<div class="row justify-content-between align-items-center kanban-user">
											<ul class="users col-6">
												<li><img src="assets/images/contacts/pic11.jpg" alt=""></li>
												<li><img src="assets/images/contacts/pic22.jpg" alt=""></li>
												<li><img src="assets/images/contacts/pic33.jpg" alt=""></li>
											</ul>
											<div class="col-6 d-flex justify-content-end">
												<p class="mb-0"><i class="far fa-clock me-2"></i>Due in 4 days</p>
											</div>
										</div>
									</div>
								</div>
								<div class="card draggable-handle draggable">
									<div class="card-body">
										<div class="d-flex justify-content-between mb-2">
											<span class="text-danger">
												<svg class="me-2" width="10" height="10" viewBox="0 0 10 10" fill="none"
													xmlns="http://www.w3.org/2000/svg">
													<circle cx="5" cy="5" r="5" fill="#FC2E53" />
												</svg>
												BUGS FIXING
											</span>
											<div class="dropdown c-pointer">
												<div class="btn-link" data-bs-toggle="dropdown">
													<svg width="20" height="20" viewBox="0 0 24 24" fill="none"
														xmlns="http://www.w3.org/2000/svg">
														<circle cx="3.5" cy="11.5" r="2.5"
															transform="rotate(-90 3.5 11.5)" fill="#717579" />
														<circle cx="11.5" cy="11.5" r="2.5"
															transform="rotate(-90 11.5 11.5)" fill="#717579" />
														<circle cx="19.5" cy="11.5" r="2.5"
															transform="rotate(-90 19.5 11.5)" fill="#717579" />
													</svg>
												</div>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="javascript:void(0)">Delete</a>
													<a class="dropdown-item" href="javascript:void(0)">Edit</a>
												</div>
											</div>
										</div>
										<h5 class="mb-0"><a href="javascript:void(0);" class="text-black">Update
												information in footer section</a></h5>
										<div class="progress default-progress my-4">
											<div class="progress-bar bg-danger progress-animated"
												style="width: 45%; height:7px;" role="progressbar">
												<span class="sr-only">45% Complete</span>
											</div>
										</div>
										<div class="row justify-content-between align-items-center kanban-user">
											<ul class="users col-6">
												<li><img src="assets/images/contacts/pic11.jpg" alt=""></li>
												<li><img src="assets/images/contacts/pic22.jpg" alt=""></li>
												<li><img src="assets/images/contacts/pic33.jpg" alt=""></li>
											</ul>
											<div class="col-6 d-flex justify-content-end">
												<p class="mb-0"><i class="far fa-clock me-2"></i>Due in 4 days</p>
											</div>
										</div>
									</div>
								</div>
								<div class="card draggable-handle draggable">
									<div class="card-body">
										<div class="d-flex justify-content-between mb-2">
											<span class="sub-title">
												<svg class="me-2" width="10" height="10" viewBox="0 0 10 10" fill="none"
													xmlns="http://www.w3.org/2000/svg">
													<circle cx="5" cy="5" r="5" fill="#FFA7D7" />
												</svg>
												HTML
											</span>
											<div class="dropdown c-pointer">
												<div class="btn-link" data-bs-toggle="dropdown">
													<svg width="20" height="20" viewBox="0 0 24 24" fill="none"
														xmlns="http://www.w3.org/2000/svg">
														<circle cx="3.5" cy="11.5" r="2.5"
															transform="rotate(-90 3.5 11.5)" fill="#717579" />
														<circle cx="11.5" cy="11.5" r="2.5"
															transform="rotate(-90 11.5 11.5)" fill="#717579" />
														<circle cx="19.5" cy="11.5" r="2.5"
															transform="rotate(-90 19.5 11.5)" fill="#717579" />
													</svg>
												</div>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="javascript:void(0)">Delete</a>
													<a class="dropdown-item" href="javascript:void(0)">Edit</a>
												</div>
											</div>
										</div>
										<h5 class="mb-0"><a href="javascript:void(0);" class="text-black">Create
												wireframe for landing page phase 1</a></h5>
										<div class="progress default-progress my-4">
											<div class="progress-bar bg-design progress-animated"
												style="width: 45%; height:7px;" role="progressbar">
												<span class="sr-only">45% Complete</span>
											</div>
										</div>
										<div class="row justify-content-between align-items-center kanban-user">
											<ul class="users col-6">
												<li><img src="assets/images/contacts/pic11.jpg" alt=""></li>
												<li><img src="assets/images/contacts/pic22.jpg" alt=""></li>
												<li><img src="assets/images/contacts/pic33.jpg" alt=""></li>
											</ul>
											<div class="col-6 d-flex justify-content-end">
												<p class="mb-0"><i class="far fa-clock me-2"></i>Due in 4 days</p>
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
            Content body end
        ***********************************-->
		<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h1 class="modal-title fs-5" id="exampleModalLabel">People Title</h1>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-xl-12">
								<div class="mb-3">
									<label for="exampleFormControlInput1" class="form-label required">People
										Name</label>
									<input type="text" class="form-control" id="exampleFormControlInput1"
										placeholder="WorldNIC">
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
						<button type="button" class="btn btn-primary">Save changes</button>
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

		<!--**********************************
           Support ticket button start
        ***********************************-->

		<!--**********************************
           Support ticket button end
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