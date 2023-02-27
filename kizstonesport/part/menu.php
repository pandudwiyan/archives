<div class="col-12">
                            <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                            <div class="menu-wrap">
                                <nav class="menu-nav show">
                                    <div class="logo d-block d-lg-none">
                                        <a href="index.php" class="main-logo"><img src="img/logo/logo_white.png" style="width: 180px;" alt="<?= $alt ?>"></a>
                                        <a href="index.php" class="sticky-logo"><img src="img/logo/logo_hitam.png" style="width: 180px;" alt="<?= $alt ?>"></a>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 d-none d-lg-block">
                                        <div class="logo">
                                            <a href="index.php"><img id="logo_berubah" src="img/logo/logo_white.png" style="width: 200px;" alt="<?= $alt ?>"></a>
                                        </div>
                                    </div>
                                    <div class="navbar-wrap main-menu d-none d-lg-flex">
                                        <ul class="navigation">
                                            <li><a href="index.php">Home</a></li>
                                            <!--<li class="menu-item-has-children has--mega--menu"><a href="#">Products</a>
                                                <ul class="mega--menu--wrap scroll">
                                                    <?php                                         
                                                        while ($data_judul = mysqli_fetch_assoc($view_judul)) 
                                                        { 
                                                    ?>
                                                    <li class="" >
                                                        <a href="products/<?= $data_judul['nama_kategori'] ?>.php">
                                                            <span class="img"><img src="img/product_menu/<?= $data_judul['nama_kategori'] ?>.jpg" alt="" style=" object-fit:cover;"></span>
                                                            <span class="text"><?= $data_judul['nama_kategori'] ?></span>
                                                        </a>
                                                    </li>
                                                <?php } ?>
                                                </ul>
                                            </li>-->
                                            <li><a href="about.php">About</a></li>
                                            <li><a href="contact.php">Contact</a></li>
                                            <li><a href="catalog.php">Katalog</a></li>
                                            <li><a href="" data-toggle="modal" data-target="#search-modal">Code</a></li>
                                        </ul>
                                    </div>
                                    <div class="header-action d-none d-md-block">
                                        <ul>
                                            <li class="shipping-offer">Gratis Ongkir<span style="color: #FFD101; font-size:13px;"> Extra</span> melalui aplikasi <a href="<?= $link_shopee;?>" target="_blank" style="color: #ee4d2d; font-size:14px;"> Shopee</a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <!-- Mobile Menu  -->
                            <div class="mobile-menu">
                                <div class="close-btn"><i class="flaticon-targeting-cross"></i></div>
                                <nav class="menu-box">
                                    <div class="nav-logo"><a href="index.php"><img src="img/logo/logo_hitam.png" style="width: 180px;" alt="<?= $alt ?>"></a>
                                    </div>
                                    <div class="menu-outer">
                                        <ul class="navigation">
                                            <li><a href="about.php">About</a></li>
                                            <li><a href="contact.php">Contact</a></li>
                                            <li><a href="catalog.php">Katalog</a></li>
                                            <li><a href="" data-toggle="modal" data-target="#search-modal">Code</a></li>
                                        </ul>
                                    </div>
                                    <div class="social-links">
                                        <ul class="clearfix">
                                            <li><a href="<?= $link_instagram; ?>" target="_blank"><span class="fab fa-instagram"></span> kizstonesport</a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <div class="menu-backdrop"></div>
                            <!-- End Mobile Menu -->
                        </div>