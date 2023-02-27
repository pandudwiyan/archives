<div class="col-md-4">
    <div class="latest-tweet">
        <h5>Alamat</h5>
        <ul>
                <li>
                    <p align="justify" style="color: white;"><?= $alamat ?></p>
                </li>
            </ul>
        <div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d32659.88090345993!2d106.88651279928199!3d-6.228713698465628!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f32179b8a271%3A0x118078c85b611344!2sBidan%20Rasiti%20Ragilia!5e0!3m2!1sid!2sid!4v1669359694317!5m2!1sid!2sid" width="100%" height="130px;" style="border-radius: 5px; margin-bottom: 30px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
            
    </div>
</div>

<div class="col-md-6">
    <div class="latest-tweet">
        <div align="center">
        <img src="<?= $default; ?>images/logo_putih.png" alt="<?= $tab_tittle ?>" style="width: 75%;">
        <p align="justify" style="color:white;"><br><?= $deskripsi ?></p>
        <?php include 'sosialmediakit.php' ?>
        </div>
    </div>
</div>

<div class="col-md-2">
    <div class="latest-tweet" align="center">
        <h5 align="center">Resources</h5>
            <ul>
                <li><p style="text-align: center;"><a href="<?= $default;?>artikel">• Artikel Kesehatan •</a><br>
                    <a href="<?= $default;?>gallery">• Gallery Pasien •</a><br>
                <a href="<?= $default;?>about">• Tentang Kami •</a><br>
                <a href="<?= $default;?>kirim_testi">• Kirim Testimoni •</a><br></p>
                </li>
            </ul>

        <div>
        <p align="center">Pengunjung Hari ini</p>
            <div class="container" style="zoom: 0.4;">
                 <div class="row">
                       <div class="col-md-1 col-sm-4" style="visibility: hidden;"></div>
                       <div class="col-md-1 col-sm-4">
                            <div class="counter">
                                    <div class="counter-icon">
                                        <iconify-icon icon="zondicons:stethoscope" style="float: center; margin-top: 15px;"></iconify-icon>
                                    </div>
                              
                                    <h3 style="font-size:12px;"><?= $website ?></h3>
                                    <span id="counternya" class="counter-value">
                                        <?php
                                            $target = $link_counter;
                                            $html = file_get_html($target);
                                            $html = $html->find('table', 1)->plaintext;
                                            $visitor = explode(" ", $html);

                                            echo $visitor[6]; 
                                        ?>
                                    </span>
                            </div>
                        </div>
                        <div class="col-md-1 col-sm-4" style="visibility: hidden;">
                            <!--<script type='text/javascript' src='https://www.freevisitorcounters.com/auth.php?id=1e28a8d4f683ba2ab6b94b604fcdb705809e4ef1'></script>-->
                            <script type="text/javascript" src="https://www.freevisitorcounters.com/en/home/counter/980301/t/5"></script>
                        </div>
                  </div>
            </div>
        </div>
            
    </div>
</div>