<section id="team">
    <div class="container">

            <div class="col-md-12">
                <ul class="row">
                    
                    <?php 
                        $query_team= mysqli_query($koneksi,"SELECT * FROM `team` LIMIT 50");
                        while($data_team = mysqli_fetch_assoc($query_team))
                        { 
                    ?>

                    <li class="col-sm-3" style="padding: 10px;">
                        <div class="team"> <img class="img-responsive" src="kel/<?= $data_team['img'] ?>.jpg" alt="">
                            <!--<div class="team-over"> 
                              <ul class="social_icons animated-6s fadeInUp">
                                <li class="facebook"><a href="#."><iconify-icon icon="ri:facebook-fill" width="25" style="margin-top: 4px;" ></iconify-icon></a></li>
                                <li class="instagram"><a href="#."><iconify-icon icon="mdi:instagram" width="25" style="margin-top: 4px;" ></iconify-icon></a></li>
                              </ul>
                            </div>-->
                            
                            <div class="team-detail">
                              <h6 style="text-transform: capitalize;"><?= $data_team['nama']; ?></h6>
                              <p><?= strtoupper($data_team['jabatan']); ?></p>
                            </div>
                        </div>
                    </li>

                  <?php } ?>

                </ul>
            </div>

      </div>
</section>