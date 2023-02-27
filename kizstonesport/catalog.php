<?php 
include 'setup.php';
include '_setting/koneksi.php';

$view_kategori = mysqli_query($koneksi,"SELECT * FROM `kategori`");
$view_judul = mysqli_query($koneksi,"SELECT * FROM `kategori`");

if (isset($_GET['search']) && $_GET['search']!= "") 
{   
    $search = preg_replace('/[^A-Za-z0-9\-]/', '', $_GET['search']);
    $query_katalog = mysqli_query($koneksi,"SELECT * FROM `katalog` where `id_katalog` LIKE '%$search%' ");
    $query_label = mysqli_query($koneksi,"SELECT * FROM `katalog` GROUP BY `label`");
}
else
{
    $query_katalog = mysqli_query($koneksi,"SELECT * FROM `katalog` order by `id_katalog`");
    $query_label = mysqli_query($koneksi,"SELECT * FROM `katalog` GROUP BY `label`");
}

?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?= $nama_perusahaan ?> | About</title>
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
            <section class="breadcrumb-area breadcrumb-bg" data-background="img/bg/newsletter_bg02.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadcrumb-content">
                                <h2 style="color: #ee4d2d;">KATALOG</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Katalog</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="row justify-content-center" style="margin-top: 50px;">
                        <div class="col-xl-4 col-lg-6">
                            <div class="section-title title-style-two text-center mb-20">
                                <h3 class="title">Collcetion</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="new-arrival-nav mb-35">
                                <?php
                                    $query_label = mysqli_query($koneksi,"SELECT * FROM `katalog` GROUP BY `label`");

                                    while ($data_label = mysqli_fetch_assoc($query_label)) 
                                    { 
                                        $kelas_label = str_replace(" ","_", $data_label['label']);
                                        ?>
                                        <button data-filter="<?= ".".$kelas_label?>"><?= $data_label['label'];?></button>
                                    <?php }
                                ?>
                                <!--<button class="" data-filter=".cat-one">New Products</button>
                                <button class="" data-filter=".cat-two">Sales Products</button> -->
                            </div>
                        </div>
                    </div>
                    <div class="row Satu_Stel-active">
                         <?php 
                            $jumlah = mysqli_num_rows($query_katalog);

                            if ($jumlah > 0 ) 
                            {
                                 while ($data = mysqli_fetch_assoc($query_katalog)) 
                                 {  
                                    $kelas_label2 = str_replace(" ","_", $data['label']);
                                    ?>
                                <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer">
                                    <div class="<?= $kelas_label2." ";?>new-arrival-item text-center mb-50">
                                        <div class="thumb mb-25">
                                            <a href="shop-details.html"><img src="img/katalog/<?= $id=$data['id_katalog'] ?>.jpg" alt=""></a>
                                            <div class="" style="text-align: right; background: #202026;color: white;">
                                            <table width="100%">
                                                <tr>
                                                    <td style="width:40%; padding: 10px;" align="left">
                                                        <img src="img/logo/logo_white.png" alt="" style="width:80px;">
                                                    </td>
                                                    <td style="width:30%; background:#2eb629; padding: 10px; font-size: 11px;" align="center">
                                                        <a href="https://wa.me/<?=$tlp_perusahaan1;?>?text=Hi saya tertarik dengan produk <?= $id ?>. Apakah produknya masih tersedia?" style="color: white;">
                                                        <div>
                                                            📱 Whatsapp
                                                        </div>
                                                        </a>
                                                    </td>
                                                    <td style="width:30%; background:#ee4d2d; padding: 10px; font-size: 11px;" align="center">
                                                        <a href="<?= $data['link_shopee']; ?>" style="color: white;">
                                                        <div>
                                                            🛒 Shopee
                                                        </div>
                                                        </a>
                                                    </td>
                                                </tr>  
                                            </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php }
                            } 
                                else
                            { ?>
                                <div class="col-xl-12 col-lg-12 col-sm-12" style="padding: 100px;">
                                    <p align="center">Data tidak ditemukan.</p>
                                </div>
                            <?php }
                        ?>
                    </div>
            <!--<section class="cosmetics-area">
                <div class="container-fluid">
                    <div class="row ">
                        <?php 
                            $jumlah = mysqli_num_rows($query_katalog);

                            if ($jumlah > 0 ) 
                            {
                                 while ($data = mysqli_fetch_assoc($query_katalog)) 
                                 {  ?>
                                <div class="col-xl-3 col-lg-3 col-md-6 grid-item grid-sizer">
                                    <div class="cosmetics-item mb-10">
                                        <div class="thumb"><a href=""> <img src="img/katalog/<?= $data['id_katalog'] ?>.jpg" alt="" style="box-shadow:5px;"></a></div>

                                    </div>
                                </div>
                                <?php }
                            } 
                                else
                            { ?>
                                <img src="https://freefrontend.com/assets/img/html-funny-404-pages/HTML-Beer-404-Page.gif" style="width:100%">
                            <?php }
                        ?>
                    </div>
                </div>
            </section>-->
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
