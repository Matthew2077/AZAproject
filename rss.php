<?php
require_once __DIR__ . '/config/dz.php';
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
		<div class="content-body default-height">
			<div class="container-fluid">
				<!-- row -->
				<div class="row">
					<div class="col-xl-12">
						<div class="alert alert-dismissible ai-header-alert fade show mb-4">
							This is a demo of AIKit plugin made for you to test the experience of using the plugin. Text & images generated in this demo are dummy. In real life, AIKit will call OpenAI API and generate relevant text and images based on your prompts.

							<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
								<span><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
										<g clip-path="url(#clip0_58_5949)">
											<path d="M10.0003 18.3337C14.6027 18.3337 18.3337 14.6027 18.3337 10.0003C18.3337 5.39795 14.6027 1.66699 10.0003 1.66699C5.39795 1.66699 1.66699 5.39795 1.66699 10.0003C1.66699 14.6027 5.39795 18.3337 10.0003 18.3337Z" stroke="#FF5B5B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
											<path d="M12.5 7.5L7.5 12.5" stroke="#FF5B5B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
											<path d="M7.5 7.5L12.5 12.5" stroke="#FF5B5B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
										</g>
										<defs>
											<clipPath id="clip0_58_5949">
												<rect width="20" height="20" fill="white" />
											</clipPath>
										</defs>
									</svg>
								</span>
							</button>
						</div>


						<ul class="nav nav-tabs style-2 mb-4" id="pills-tab" role="tablist">
							<li class="nav-item" role="presentation">
								<a href="auto-write.php" class="nav-link border-s-1">Auto Writer</a>
							</li>
							<li class="nav-item" role="presentation">
								<a href="scheduled.php" class="nav-link">Scheduler</a>
							</li>
							<li class="nav-item" role="presentation">
								<a href="repurpose.php" class="nav-link">Repurpose</a>
							</li>
							<li class="nav-item" role="presentation">
								<a href="rss.php" class="nav-link active">RSS</a>
							</li>
							<li class="nav-item" role="presentation">
								<a href="chatbot.php" class="nav-link">Chatbot</a>
							</li>
							<li class="nav-item" role="presentation">
								<a href="fine-tune-models.php" class="nav-link">Fine-tune Models</a>
							</li>
							<li class="nav-item" role="presentation">
								<a href="prompt.php" class="nav-link">AI Menu Prompts</a>
							</li>
							<li class="nav-item" role="presentation">
								<a href="setting.php" class="nav-link">Settings</a>
							</li>
							<li class="nav-item" role="presentation">
								<a href="import.php" class="nav-link border-s-2">Export/Import Settings</a>
							</li>
						</ul>
						<div class="row">
							<div class="col-xl-4">
								<div class="card  h-auto overflow-hidden">
									<div class="card-header border-0 pb-0">
										<h4 class="heading mb-0">Create Repurpose Job</h4>
										<select class="default-select custom-image-select ai-select image-select">
											<option data-thumbnail="assets/images/svg/england.svg">England</option>
											<option data-thumbnail="assets/images/svg/india.svg">India</option>
											<option data-thumbnail="assets/images/svg/united-arab-emirates.svg">UAE</option>
										</select>
									</div>
									<div class="card-body pb-0 pt-3">
										<div class="row">
											<div class="col-xl-12">
												<div class="mb-3">
													<label for="exampleFormControlInput1" class="form-label">RSS URL</label>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="https://yogacare.dexignzone.com/">
												</div>
												<div class="mb-3">
													<label for="exampleFormControlInput2" class="form-label">Time to wait between generating articles (minutes)</label>
													<input type="number" class="form-control" id="exampleFormControlInput2" placeholder="30">
												</div>
												<label for="exampleFormControlInput2" class="form-label d-block">Post status</label>
												<div class="mb-3">
													<select class="default-select form-control" aria-label="Default select example">
														<option selected>Draft</option>
														<option value="1">Product</option>
													</select>
												</div>
												<label class="form-label">Post type</label>
												<div class="mb-3">
													<select class="default-select form-control" aria-label="Default select example">
														<option selected>Post</option>
														<option value="1">Product</option>
													</select>
												</div>
												<label class="form-label">Post category</label>
												<div class="mb-3">
													<select class="default-select form-control" aria-label="Default select example">
														<option selected>Uncategorized</option>
														<option value="1">Categorized</option>
													</select>
												</div>
												<div class="mb-3">
													<label for="exampleFormControlInput3" class="form-label">Posts to generate</label>
													<input type="number" class="form-control" id="exampleFormControlInput3" placeholder="1">
												</div>
												<label class="form-label">How often to check for new articles in RSS feed</label>
												<div class="mb-3">
													<select class="default-select form-control" aria-label="Default select example">
														<option selected>Hourly</option>
														<option value="1">Weekly</option>
													</select>
												</div>
												<hr style="margin-left:-31px; margin-right:-31px;">
												<div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
													<input type="checkbox" class="btn-check" id="btncheck1">
													<label class="btn btn-outline-primary btn-sm mb-0" for="btncheck1">Include featured image</label>
												</div>
												<hr style="margin-left:-31px; margin-right:-31px; margin-bottom:0;">
											</div>
										</div>
									</div>
									<div class="card-footer border-0">
										<div class="text-center">
											<a href="javascript:void(0);" class="btn btn-primary">
												<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M3.33301 9.16699C5.32213 9.16699 7.22979 9.95717 8.63631 11.3637C10.0428 12.7702 10.833 14.6779 10.833 16.667" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
													<path d="M3.33301 3.33301C6.86923 3.33301 10.2606 4.73777 12.7611 7.23825C15.2616 9.73874 16.6663 13.1301 16.6663 16.6663" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
													<path d="M4.16634 16.6667C4.62658 16.6667 4.99967 16.2936 4.99967 15.8333C4.99967 15.3731 4.62658 15 4.16634 15C3.7061 15 3.33301 15.3731 3.33301 15.8333C3.33301 16.2936 3.7061 16.6667 4.16634 16.6667Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
												</svg>

												Add RSS Job</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-8">
								<div class="accordion">
									<div class="accordion-item">
										<div class="accordion-header prompt-header rounded-lg" id="headingOne" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-controls="collapseOne" aria-expanded="true" role="button">
											<span class="accordion-header-icon"></span>
											<span class="accordion-header-text fw-semibold">Prompts</span>
											<span class="accordion-header-indicator"></span>
										</div>
										<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-bs-parent="#accordion-one">
											<div class="accordion-body-text">
												<div class="d-flex align-items-center mb-1">
													<h6 class="mb-0">article-title:</h6>
													<span class="badge badge-sm badge-danger light ms-1">description</span>
													<span class="mx-1">,</span>
													<span class="badge badge-sm badge-danger light">section-headlines</span>
												</div>
												<div class="mb-3">
													<textarea class="form-control bg-transparent" id="exampleFormControlTextarea1" rows="3">
Generate a title for an article that discusses the following topic:
[[description]]
The article will include the following sections:
[[section-headlines]]

Title:
												  </textarea>
												</div>
												<div class="d-flex align-items-center mb-1">
													<h6 class="mb-0">article-title:</h6>
													<span class="badge badge-sm badge-danger light ms-1">description</span>
													<span class="mx-1">,</span>
													<span class="badge badge-sm badge-danger light">section-headlines</span>
												</div>
												<div class="mb-3">
													<textarea class="form-control bg-transparent" id="exampleFormControlTextarea2" rows="3">
Generate a title for an article that discusses the following topic:
[[description]]
The article will include the following sections:
[[section-headlines]]

Title:
												  </textarea>
												</div>
												<div class="d-flex align-items-center mb-1">
													<h6 class="mb-0">article-title:</h6>
													<span class="badge badge-sm badge-danger light ms-1">description</span>
													<span class="mx-1">,</span>
													<span class="badge badge-sm badge-danger light">section-headlines</span>
												</div>
												<div class="mb-3">
													<textarea class="form-control bg-transparent" id="exampleFormControlTextarea3" rows="3">
Generate a title for an article that discusses the following topic:
[[description]]
The article will include the following sections:
[[section-headlines]]

Title:
												  </textarea>
												</div>
												<div class="d-flex align-items-center mb-1">
													<h6 class="mb-0">article-title:</h6>
													<span class="badge badge-sm badge-danger light ms-1">description</span>
													<span class="mx-1">,</span>
													<span class="badge badge-sm badge-danger light">section-headlines</span>
												</div>
												<div class="mb-3">
													<textarea class="form-control bg-transparent" id="exampleFormControlTextarea4" rows="3">
Generate a title for an article that discusses the following topic:
[[description]]
The article will include the following sections:
[[section-headlines]]

Title:
												  </textarea>
												</div>
												<div class="d-flex align-items-center mb-1">
													<h6 class="mb-0">article-title:</h6>
													<span class="badge badge-sm badge-danger light ms-1">description</span>
													<span class="mx-1">,</span>
													<span class="badge badge-sm badge-danger light">section-headlines</span>
												</div>
												<div class="mb-3">
													<textarea class="form-control bg-transparent" id="exampleFormControlTextarea5" rows="3">
Generate a title for an article that discusses the following topic:
[[description]]
The article will include the following sections:
[[section-headlines]]

Title:
												  </textarea>
												</div>
												<div class="d-flex align-items-center mb-1">
													<h6 class="mb-0">article-title:</h6>
													<span class="badge badge-sm badge-danger light ms-1">description</span>
													<span class="mx-1">,</span>
													<span class="badge badge-sm badge-danger light">section-headlines</span>
												</div>
												<div class="mb-3">
													<textarea class="form-control bg-transparent" id="exampleFormControlTextarea6" rows="3">
Generate a title for an article that discusses the following topic:
[[description]]
The article will include the following sections:
[[section-headlines]]

Title:
												  </textarea>
												</div>
												<div class="d-flex align-items-center mb-1">
													<h6 class="mb-0">article-title:</h6>
													<span class="badge badge-sm badge-danger light ms-1">description</span>
													<span class="mx-1">,</span>
													<span class="badge badge-sm badge-danger light">section-headlines</span>
												</div>
												<div class="mb-3">
													<textarea class="form-control bg-transparent" id="exampleFormControlTextarea10" rows="3">
Generate a title for an article that discusses the following topic:
[[description]]
The article will include the following sections:
[[section-headlines]]

Title:
												  </textarea>
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
		<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
			<div class="modal-dialog modal-dialog-center">
				<div class="modal-content">
					<div class="modal-header">
						<h1 class="modal-title fs-5" id="exampleModalLabel1">Invite Employee</h1>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-xl-12">
								<label class="form-label">Email ID<span class="text-danger">*</span></label>
								<input type="email" class="form-control" placeholder="hello@gmail.com">
								<label class="form-label mt-3">Employment date<span class="text-danger">*</span></label>
								<input class="form-control" type="date">
								<div class="row">
									<div class="col-xl-6">
										<label class="form-label mt-3">First Name<span class="text-danger">*</span></label>
										<div class="input-group">
											<input type="text" class="form-control" placeholder="Name">
										</div>
									</div>
									<div class="col-xl-6">
										<label class="form-label mt-3">Last Name<span class="text-danger">*</span></label>
										<div class="input-group">
											<input type="text" class="form-control" placeholder="Surname">
										</div>
									</div>
								</div>
								<div class="mt-3 invite">
									<label class="form-label">Send invitation email<span class="text-danger">*</span></label>
									<input type="email" class="form-control " placeholder="+ invite">
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