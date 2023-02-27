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
        <title><?= $nama_perusahaan ?></title>
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

            <!-- slider-area -->
            <section class="slider-area position-relative">
                <div class="container-fluid p-0 fix">
                    <div class="main-slider-active">
                        <div class="single-slider">
                            <div class="row no-gutters">
                                <div class="col-md-6">
                                    <div class="slider-main-img" data-background="img/slider/fiturterbarubg.jpg"></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="slider-bg" data-background="img/slider/bg_productbaru.jpg">
                                        <div class="slider-content">
                                            <h3 class="sub-title animated" data-animation-in="fadeInUp" data-delay-in=".2">New Product !</h3>
                                            <h2 class="title animated" data-animation-in="fadeInUp" data-delay-in=".4">Available</h2>
                                            <p class="animated" data-animation-in="fadeInUp" data-delay-in=".6">- J A S M I N E -</p>
                                            <a href="catalog.php?search=jsm" class="btn animated" data-animation-in="fadeInUp" data-delay-in=".8" style="color: <?= $bg_new_product ?>;">View Collection</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- slider-area-end -->

            <!-- promo-services -->
            <section class="promo-services pt-50 pb-25">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-3 col-md-6 col-sm-8">
                            <div class="promo-services-item mb-40">
                                <div class="icon"><img src="img/icon/trusted.png" alt=""></div>
                                <div class="content">
                                    <h6>Custom Order</h6>
                                    <p>Menerima pesanan custom ataupun pre-order dengan model yang disediakan.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-8">
                            <div class="promo-services-item mb-40">
                                <div class="icon"><img src="img/icon/trusted.png" alt=""></div>
                                <div class="content">
                                    <h6>Trusted</h6>
                                    <p>100 % Amanah, tersedia di platform terpercaya.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-8">
                            <div class="promo-services-item mb-40">
                                <div class="icon"><img src="img/icon/trusted.png" alt=""></div>
                                <div class="content">
                                    <h6>Cooperation</h6>
                                    <p>Bisa bekerjasama untuk membuka usaha pakaian olahraga wanita.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-8">
                            <div class="promo-services-item mb-40">
                                <div class="icon"><img src="img/icon/trusted.png" alt=""></div>
                                <div class="content">
                                    <h6>Quality support</h6>
                                    <p>Admin tersedia untuk anda yang masih penasaran dengan kami.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- promo-services-end -->

            <!-- features-product-area -->
            <section class="features-products white-bg pt-95 pb-100">
                <div class="container custom-container" style="margin-top: -100px;">
                    <div class="row justify-content-center">
                        <div class="col-xl-4 col-lg-6">
                            <div class="section-title title-style-two text-center mb-50">
                                <h3 class="title">Our Product</h3>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content" id="myTabContent" style="margin-top: 10px;">
                        <div class="tab-pane show active" id="men" role="tabpanel" aria-labelledby="men-tab">
                            <div class="row features-product-active">
                                <?php                                         
                                        while ($data_kategori = mysqli_fetch_assoc($view_kategori)) 
                                        { 
                                    ?>
                                    <div class="col-md-6" align="center">
                                        <div class="cat-banner-item banner-animation mb-20">
                                            <div class="thumb">
                                                <a href="shop-sidebar.html"><img src="img/cover/<?=$data_kategori['nama_kategori'];?>.jpg" alt="<?=$data_kategori['nama_kategori'];?>" style="width: 362px; height: 470px; object-fit:cover;"></a>
                                                    <p class="animated" data-animation-in="fadeInUp" data-delay-in=".6" style="margin-top:5px; text-align: center"><i>- <?=  ucfirst($data_kategori['nama_kategori']);?> -</i></p>
                                                    <a href="catalog.php?search=<?= strtolower($data_kategori['code'])?>" class="btn animated" data-animation-in="fadeInUp" data-delay-in=".8" style="margin-top: -200px; float: top;">View Collection</a>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- features-product-area-end -->

            <!-- discount-area -->
            <section class="discount-area discount-bg jarallax parallax-img" data-background="img/bg/huge.jpg">
                <div class="container">
                    <div class="row justify-content-center justify-content-lg-start">
                        <div class="col-lg-6 col-md-10">
                            <div class="discount-content text-center">
                                <div class="icon mb-15"><img src="img/logo/kiz_putih.png" style="width: 180px;" alt="<?= $alt ?>"></div>
                                <span>TERSEDIA DI <span style="color: #ee4d2d;">SHOPEE</span></span>
                                <h2>Nikmati layanan gratis ongkir melalui aplikasi terpercaya.</h2>
                                <a href="<?= $link_shopee;?>" class="btn" target="_blank">Kunjungi Toko</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- discount-area-end -->

            <!-- brand-area -->
            <div class="brand-area pt-100 pb-100">
                <div class="container">
                    <div class="row brand-active">
                        <div class="col">
                            <div class="brand-item">
                                <a href="#"><img src="https://static.domainesia.com/assets/images/logo-domainesia-2021.svg" style="width: 190px;" alt="Domainesia"></a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="brand-item">
                                <a href="#"><img src="img/logo/logo_hitam.png" style="width: 190px; margin-top: 30px;" alt="<?= $alt ?>"></a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="brand-item">
                                <a href="#"><img src="https://upload.wikimedia.org/wikipedia/commons/f/fe/Shopee.svg" style="width: 190px;" alt="Shopee"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- brand-area-end -->

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
