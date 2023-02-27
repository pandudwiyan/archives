    <!-- Footer Section Start -->
    <footer class="section footer-section">
        <!-- Footer Top Start -->
        <div class="footer-top section-padding">
            <div class="container">
                <div class="row mb-n10">
                    <div class="col-12 col-sm-6 col-lg-4 col-xl-4 mb-10" data-aos="fade-up" data-aos-delay="200">
                        <div class="single-footer-widget">
                            <h2 class="widget-title">Contact Us</h2>
                            <p class="desc-content" style="text-align: justify;"><?= $desc_1?></p>
                            <!-- Contact Address Start -->
                            <table align="left" style="font-size: 15px;">
                               <tr>
                                  <td style="width: 50px;"><b>Whatsapp </b></td>
                                  <td style="width: 10px;">:</td>
                                  <td><?= $tlp_perusahaan; ?></td>
                               </tr>
                               <tr>
                                  <td style="width: 50px;"><b>Email </b></td>
                                  <td style="width: 10px;">:</td>
                                  <td><?= $email_perusahaan ?></td>
                               </tr>
                               <tr>
                                  <td style="width: 50px; vertical-align: top;"><b>Alamat </b></td>
                                  <td style="width: 10px; vertical-align: top;">:</td>
                                  <td style="vertical-align: top;"><?= $alamat_perusahaan ?></td>
                               </tr>
                            </table>
                            <!-- Contact Address End -->
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 col-xl-4 mb-10" data-aos="fade-up" data-aos-delay="300">
                        <div class="single-footer-widget">
                            <h2 class="widget-title">About</h2>
                            <p style="text-align: justify;"><?= $desc_2 ?></p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 col-xl-4 mb-10" data-aos="fade-up" data-aos-delay="500">
                        <div class="single-footer-widget">
                            <h2 class="widget-title">Google Map</h2>
                            <div class="widget-body">
                                <iframe src="<?= $link_gmap ?>" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Top End -->

        <!-- Footer Bottom Start -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 text-center">
                        <div class="copyright-content">
                            <p class="mb-0">© 2022 <strong><?= $nama_perusahaan ?></strong> Made width <i class="fa fa-heart text-primary"></i> by <a href="<?= $link_author ?>"><?= $nama_author ?></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom End -->
    </footer>
    <!-- Footer Section End -->

    <!-- Scroll Top Start -->
    <a href="#" class="scroll-top" id="scroll-top">
        <i class="arrow-top fa fa-long-arrow-up"></i>
        <i class="arrow-bottom fa fa-long-arrow-up"></i>
    </a>
    <!-- Scroll Top End -->