<section id="prople-says">
    <div class="overlay">
        <div class="container"> 
            <div class="tittle tittle-2 ">
                <h3>Apa kata mereka ?</h3>
            </div>
            <div class="testi">
                <div class="testi-slide">
                  <?php
                      $query_testimoni = mysqli_query($koneksi,"SELECT * FROM `testimoni` WHERE `status`='aktif' ORDER BY `tanggal` DESC limit 10");
                      while($data_testimoni = mysqli_fetch_assoc($query_testimoni))
                      {
                  ?>
                      <div class="item">
                          <p align="center"><?= $data_testimoni['testimoni'] ?></p><br>
                          <div class="avatar"><img src="<?= $data_testimoni['username'] ?>" alt="" ></div>
                          <h5><?= $data_testimoni['nama'] ?></h5>
                          <span><?= $data_testimoni['pekerjaan'] ?></span>
                      </div>
                  <?php } ?>
            </div>
          </div>
        </div>
      </div>
</section>