
<?php
   include 'setting/setting_client.php'; 
   include 'setting/koneksi.php';
   include 'setting/dw_function.php';
?>
<?php include 'part/head.php'; ?>

<body onload="load_isi_cart()">
    <div class="header section">

        <!-- Header Top Start -->
        <?php include 'part/kontak_alamat.php'; ?>
        <!-- Header Top End -->

        <!-- Header Bottom Start -->
        <div class="header-bottom">
            <div class="header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <!-- Header Logo Start -->
                        <?php include 'part/logo.php'; ?>
                        <!-- Header Logo End -->

                        <!-- Header Menu Start -->
                        <?php include 'part/menu.php'; ?>
                        <!-- Header Menu End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Bottom End -->

        <!-- Mobile Menu Start -->
        <?php include 'part/untuk_hp.php'; ?>
        <!-- Mobile Menu End -->

        <!-- Cart Offcanvas Start -->
        <?php include 'part/s_cart.php'; ?>
        <!-- Cart Offcanvas End -->

    </div>

    <!-- Product Section Start -->
        <?php include "part/contact.php" ?>
    <!-- Product Section End -->

    <?php include 'part/footer.php'; ?>

        <!-- Modal Start  -->
    <div class="modalquickview modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button class="btn close" data-bs-dismiss="modal">×</button>
                <div class="row" id="modal_detail">
                    <div class="col-md-6 col-12">

                        <!-- Product Details Image Start -->
                        <div class="modal-product-carousel">

                            <!-- Single Product Image Start -->
                            <div class="swiper-container">
                                <div class="swiper-wrapper" id="get_image">
                                    <a class="swiper-slide" href="#">
                                        <img class="w-100" src="assets2/images/products/large-size/1.jpg" alt="Product">
                                    </a>
                                </div>

                                <!-- Next Previous Button Start -->
                                <div class="swiper-product-button-next swiper-button-next"><i class="pe-7s-angle-right"></i></div>
                                <div class="swiper-product-button-prev swiper-button-prev"><i class="pe-7s-angle-left"></i></div>
                                <!-- Next Previous Button End -->
                            </div>
                            <!-- Single Product Image End -->

                        </div>
                        <!-- Product Details Image End -->

                    </div>
                    <div class="col-md-6 col-12 overflow-hidden position-relative">

                        <!-- Product Summery Start -->
                        <div class="product-summery">
                            <div id="ambil_data">
                            <!-- Product Head Start -->
                            <div class="product-head mb-3">
                                <h2 class="product-title">Sample product</h2>
                            </div>
                            <!-- Product Head End -->

                            <!-- Price Box Start -->
                            <div class="price-box mb-2">
                                <span class="regular-price">$80.00</span>
                                <span class="old-price"><del>$90.00</del></span>
                            </div>
                            <!-- Price Box End -->

                            <!-- SKU Start -->
                            <div class="sku mb-3">
                                <span>Stok: 12345</span>
                            </div>
                            <!-- SKU End -->

                            <!-- Description Start -->
                            <p class="desc-content mb-5">I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.</p>
                            <!-- Description End -->

                            <!-- Product Meta Start -->
                            <div class="product-meta mb-3">
                                <!-- Product Size Start -->
                                <div class="product-size">
                                    <span>Size : </span>
                                    <a href=""><strong>S</strong></a>
                                    <a href=""><strong>M</strong></a>
                                    <a href=""><strong>L</strong></a>
                                    <a href=""><strong>XL</strong></a>
                                </div>
                                <!-- Product Size End -->
                            </div>
                            <!-- Product Meta End -->
                            </div>
                            <!-- Quantity Start -->
                            <div class="quantity mb-5" onclick="berhitung()">
                                <div class="cart-plus-minus">
                                    <input class="cart-plus-minus-box" id="berapa" name="berapa" type="text" onkeyup="berhitung()" oninput="this.value = this.value.replace(/[^0-9.]/g, '0').replace(/(\..*?)\..*/g, '$1').replace(/^0[^.]/, '0'); ">
                                </div>
                                <!-- Product Head Start -->
                                <b id="totaltemporary" style="float:right; margin-top: -25px; font-size: 20px; color: #007bff;"></b>
                            <!-- Product Head End -->
                            </div>
                            </form>
                            <div>
                            <!-- Quantity End -->
                            <hr>
                            <!-- Cart & Wishlist Button Start -->
                            <div class="cart-wishlist-btn pb-4 mb-n3" style="float:right;">
                                <div class="add-to_cart mb-3">
                                    <a data-bs-dismiss="modal"    class="btn btn-outline-dark btn-hover-primary" onclick="add_to_cart();">Add to cart</a>
                                </div>
                                <div class="add-to-wishlist mb-3">
                                    <a class="btn btn-outline-dark btn-hover-primary">Checkout</a>
                                </div>
                            </div>
                            <!-- Cart & Wishlist Button End -->
                        </div>
                        <!-- Product Summery End -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal End  -->

    <!-- Scripts -->
    <!-- Scripts -->
    <!-- Global Vendor, plugins JS -->

         <script type="text/javascript" src="https://www.freevisitorcounters.com/en/home/counter/953045/t/0"></script>

    <!-- Vendors JS -->


    <script src="assets2/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="assets2/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets2/js/vendor/jquery-migrate-3.3.2.min.js"></script>
    <script src="assets2/js/vendor/modernizr-3.11.2.min.js"></script>
    <script src="assets2/js/dw.js"></script>


    <!-- Plugins JS -->


    <script src="assets2/js/plugins/countdown.min.js"></script>
    <script src="assets2/js/plugins/aos.min.js"></script>
    <script src="assets2/js/plugins/swiper-bundle.min.js"></script>
    <script src="assets2/js/plugins/nice-select.min.js"></script>
    <script src="assets2/js/plugins/jquery.ajaxchimp.min.js"></script>
    <script src="assets2/js/plugins/jquery-ui.min.js"></script>
    <script src="assets2/js/plugins/lightgallery-all.min.js"></script>
    <script src="assets2/js/plugins/thia-sticky-sidebar.min.js"></script>


    <!-- Use the minified version files listed below for better performance and remove the files listed above -->


    <!-- 
   <script src="assets2/js/vendor.min.js"></script>
   <script src="assets2/js/plugins.min.js"></script> 
   -->



    <!--Main JS-->
    <script src="assets2/js/main.js"></script>
</body>

