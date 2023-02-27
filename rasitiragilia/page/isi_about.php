<div class="doctr-list no-padding-b">
      <div class="doctor-list">
        <div class=""> 
          
            <!-------- JUDUL GAP -------->
            <div class="tittle-2">
              <h3 align="center">PMB Rasiti Ragilia A.Md.Keb</h3>
              <hr>
            </div>

            <div class="container">
                <div class="row"> 
          
                    <!------ DESKRIPSI --------->
                    <div class="col-lg-4">
                      <p style="text-align: justify; text-indent: 0.5in;"><?= $deskripsi ?> Dalam pelaksanaanya kami selalu memberikan pelayanan terbaik kepada client kami hal itu yang membuat kami dipercaya oleh masyarakat. Kini kami membuka jangkauan lebih luas agar masyarakat lebih mudah mengakses informasi yang dibutuhkan.</p>
                      <p style="text-align: justify;"><?= $des1; ?>
                        <?php 
                              $query_list = mysqli_query($koneksi,"SELECT * FROM `services`");
                              $total_list = mysqli_num_rows($query_list);
                              $i=0;
                                while($dl_ = mysqli_fetch_assoc($query_list))
                                  { 
                                    $i=$i+1;
                                    if ($i == ($total_list)) 
                                    {
                                      echo "dan ".$dl_['nama'].". "; 
                                    }
                                    else
                                    {
                                      echo $dl_['nama'].", "; 
                                    }
                                  }
                          ?><?= $des2; ?>
                      </p><br><br>
                    </div>
              
                    <div class="col-lg-8">

                          <!------------ SLIDE ------------>
                          <?php include 'galery.php'?>

                    </div>
                    <hr>                
                </div>
            </div>  
        </div>
      </div>
</div>

<section class="contact-info">

    <!------------ Visimisi ------------>
    <?php include 'visimisi.php'?>

</section>

<section class="contact-info" style="background-color: white;">
      <div class="container"> 
        
        <!--Address-->
        <ul class="row">
          <li class="col-md-3"> <iconify-icon icon="ic:outline-social-distance" width="35" height="35"></iconify-icon>
              <h5>Social Media</h5>
              <p>
                <a href="<?= $link_ig_offc; ?>" target="_blank"><iconify-icon icon="mdi:instagram"></iconify-icon>&thinsp;<?= strtolower($instagram_offc); ?></a>
              </p>
          </li>
          
          <!-- Hot line -->
          <li class="col-md-3"> <iconify-icon icon="material-symbols:phone-android-outline-rounded" width="35" height="35" flip="horizontal"></iconify-icon>
            <h5>Kontak</h5>
            <p>
              <a href="<?= $link_telephone; ?>" target="_blank"><iconify-icon icon="material-symbols:phone-enabled-sharp"></iconify-icon>&thinsp;<?= strtolower($telephone); ?></a><br>
              <a href="<?= $link_wa; ?>" target="_blank"><iconify-icon icon="mdi:whatsapp"></iconify-icon>&thinsp;<?= strtolower($wa); ?></a><br>
              <a href="<?= $link_wa2; ?>" target="_blank"><iconify-icon icon="mdi:whatsapp"></iconify-icon>&thinsp;<?= strtolower($wa2); ?></a><br>
            </p>
          </li>
          
          <!--Email Contact-->
          <li class="col-md-3"> <iconify-icon icon="ic:outline-email" width="35" height="35" flip="horizontal"></iconify-icon>
            <h5>Email</h5>
            <p><a href="<?= $link_email; ?>l" target="_blank"><?= strtolower($email); ?></a></p>
          </li>
          
          <!--Website-->
          <li class="col-md-3"> <iconify-icon icon="mdi:earth" width="35" height="35" flip="horizontal"></iconify-icon>
            <h5>Website</h5>
            <p><a href="<?= $$website; ?>l" target="_blank"><?= strtolower($website); ?></a></p>
          </li>
        </ul>
      </div>
</section>

<div id="map" class="g_map">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d32659.88090345993!2d106.88651279928199!3d-6.228713698465628!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f32179b8a271%3A0x118078c85b611344!2sBidan%20Rasiti%20Ragilia!5e0!3m2!1sid!2sid!4v1669359694317!5m2!1sid!2sid" width="100%" height="100%" style="" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

