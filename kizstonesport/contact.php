<?php 
include 'setup.php';
include '_setting/koneksi.php';

$view_kategori = mysqli_query($koneksi,"SELECT * FROM `kategori`");
$view_judul = mysqli_query($koneksi,"SELECT * FROM `kategori`");

?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?= $nama_perusahaan ?> | Contact</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Satimin">
        <meta name="keywords" content="<?= $keyword; ?>">

		<link rel="shortcut icon" type="image/x-icon" href="img/favicon.jpg">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/animate.min.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/fontawesome-all.min.css">
        <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
        <link rel="stylesheet" href="css/bootstrap-datepicker.min.css">
        <link rel="stylesheet" href="css/swiper-bundle.min.css">
        <link rel="stylesheet" href="css/jquery-ui.min.css">
        <link rel="stylesheet" href="css/nice-select.css">
        <link rel="stylesheet" href="css/jarallax.css">
        <link rel="stylesheet" href="css/flaticon.css">
        <link rel="stylesheet" href="css/slick.css">
        <link rel="stylesheet" href="css/default.css">
        <link rel="stylesheet" href="css/style_dw.css">
        <link rel="stylesheet" href="css/responsive.css">
    </head>
    <body>

		<!-- Scroll-top -->
        <button class="scroll-top scroll-to-target" data-target="html">
            <i class="fas fa-angle-up"></i>
        </button>
        <!-- Scroll-top-end-->

        <!-- header-area -->
        <header>
            <div id="sticky-header" class="main-header menu-area black-bg">
                <div class="container custom-container">
                    <div class="row">
                        <?php include 'part/menu.php'; ?>
                    </div>
                </div>
            </div>

            <!-- Modal Search -->
            <div class="modal fade" id="search-modal" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <form action="catalog.php">
                            <input id="search" name="search" type="text" placeholder="Input code here . . .">
                            <button id="tombol_search"><i class="flaticon-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Modal Search-end -->

        </header>
        <!-- header-area-end -->

        <!-- main-area -->
        <main>

            <!-- AWAL DISINI -->
            <!-- breadcrumb-area -->
            <section class="breadcrumb-area breadcrumb-bg" data-background="img/bg/newsletter_bg02.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadcrumb-content">
                                <h2 style="color: #ee4d2d;">CONTACT US</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Contact</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="exclusive-services pt-100 pb-100">
                <div class="container">
                    <div class="row no-gutters justify-content-center">
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                            <div class="ex-services-item text-center">
                                <div class="overlay-bg"></div>
                                <div class="content">
                                    <i><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6b/WhatsApp.svg/2044px-WhatsApp.svg.png" style="width:80px;"></i>
                                    <h5>Whatsapp</h5>
                                    <p>
                                        Admin 1 : <?= "0".substr($tlp_perusahaan1,2); ?><br>
                                        Admin 2 : <?= "0".substr($tlp_perusahaan2,2); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                            <div class="ex-services-item yellow text-center">
                                <div class="overlay-bg"></div>
                                <div class="content">
                                    <i><img src="https://cdn-icons-png.flaticon.com/512/281/281769.png" style="width:80px;"></i>
                                    <h5>Gmail</h5>
                                    <p><?= $email_perusahaan;?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                            <div class="ex-services-item text-center">
                                <div class="overlay-bg" data-background=""></div>
                                <div class="content">
                                    <i><img src="https://www.logo.wine/a/logo/Instagram/Instagram-Glyph-Color-Logo.wine.svg" style="width:150px;"></i>
                                    <h5>Instagram</h5>
                                    <p><?= $instagram; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                            <div class="ex-services-item orange text-center">
                                <div class="overlay-bg" data-background=""></div>
                                <div class="content">
                                    <i><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/aa/Google_Maps_icon_%282020%29.svg/536px-Google_Maps_icon_%282020%29.svg.png" style="width:50px;"></i>
                                    <h5 style="color: #312620;">Alamat</h5>
                                    <p style="color: #414141;">Jl. Pajak II No.30, RT.005/RW.004, Cipadu Jaya, Kec. Larangan, Kota Tangerang, Banten 15155</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->
            <!-- END DISINI -->

            
            <?php include 'part/instagram.php'; ?>
            

        </main>
        <!-- main-area-end -->


        <!-- footer-area -->
        <?php include 'part/footer.php'; ?>
        <!-- footer-area-end -->

		<!-- JS here -->
        <script type="text/javascript"></script>
        <script src="js/vendor/jquery-3.5.0.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/isotope.pkgd.min.js"></script>
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="js/bootstrap-datepicker.min.js"></script>
        <script src="js/jquery.nice-select.min.js"></script>
        <script src="js/jquery.countdown.min.js"></script>
        <script src="js/swiper-bundle.min.js"></script>
        <script src="js/jarallax.min.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/nav-tool.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
