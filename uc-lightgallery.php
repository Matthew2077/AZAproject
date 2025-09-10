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
            <div class="container-fluid">
                <div class="row page-titles">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Plugins</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Light Gallery</a></li>
                    </ol>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Light Gallery</h4>
                            </div>
                            <div class="card-body pb-1">
                                <div id="lightgallery" class="row">
                                    <a href="assets/images/big/img1.jpg" data-exthumbimage="assets/images/big/img1.jpg" data-src="images/big/img1.jpg" class="col-lg-3 col-md-6 mb-4">
                                        <img src="assets/images/big/img1.jpg" alt="" style="width:100%;">
                                    </a>
                                    <a href="assets/images/big/img2.jpg" data-exthumbimage="assets/images/big/img2.jpg" data-src="images/big/img2.jpg" class="col-lg-3 col-md-6 mb-4">
                                        <img src="assets/images/big/img2.jpg" alt="" style="width:100%;">
                                    </a>
                                    <a href="assets/images/big/img3.jpg" data-exthumbimage="assets/images/big/img3.jpg" data-src="images/big/img3.jpg" class="col-lg-3 col-md-6 mb-4">
                                        <img src="assets/images/big/img3.jpg" alt="" style="width:100%;">
                                    </a>
                                    <a href="assets/images/big/img4.jpg" data-exthumbimage="assets/images/big/img4.jpg" data-src="images/big/img4.jpg" class="col-lg-3 col-md-6 mb-4">
                                        <img src="assets/images/big/img4.jpg" alt="" style="width:100%;">
                                    </a>
                                    <a href="assets/images/big/img5.jpg" data-exthumbimage="assets/images/big/img5.jpg" data-src="images/big/img5.jpg" class="col-lg-3 col-md-6 mb-4">
                                        <img src="assets/images/big/img5.jpg" alt="" style="width:100%;">
                                    </a>
                                    <a href="assets/images/big/img6.jpg" data-exthumbimage="assets/images/big/img6.jpg" data-src="images/big/img6.jpg" class="col-lg-3 col-md-6 mb-4">
                                        <img src="assets/images/big/img6.jpg" alt="" style="width:100%;">
                                    </a>
                                    <a href="assets/images/big/img7.jpg" data-exthumbimage="assets/images/big/img7.jpg" data-src="images/big/img7.jpg" class="col-lg-3 col-md-6 mb-4">
                                        <img src="assets/images/big/img7.jpg" alt="" style="width:100%;">
                                    </a>
                                    <a href="assets/images/big/img8.jpg" data-exthumbimage="assets/images/big/img8.jpg" data-src="images/big/img8.jpg" class="col-lg-3 col-md-6 mb-4">
                                        <img src="assets/images/big/img8.jpg" alt="" style="width:100%;">
                                    </a>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                    </div>
                </div>
            </div>
            <!--**********************************
            Content body end
        ***********************************-->


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