<section class="blog">
      <div class="container">
          <ul class="row">
              <li class="col-lg-4">
                <div class="tittle">
                  <h2>Article Updates</h2>
                </div>
              </li>
              
              <?php
                $query_artikel = mysqli_query($koneksi,"SELECT * FROM `artikel` ORDER BY `tanggal` DESC LIMIT 4");
                $hitungan = 0;
                while($data_artikel = mysqli_fetch_assoc($query_artikel))
                {
                  $hitungan = $hitungan +1;
                  if ($hitungan > 1) 
                      { ?>
                          <li class="col-md-4"> 
                              <div class="post-img up"> <img class="img-responsive" src="<?= $data_artikel['gambar']; ?>"  style="object-fit:cover; width: 400px; height: 223px;" alt="" ></div>
                              <div class="col-md-12 text-section text-center"> <a href="<?= "artikel/q=".$data_artikel['id']; ?>"><?= $data_artikel['judul']; ?></a> <span>post by <strong><?= $data_artikel['penulis']; ?></strong> on <strong><?= date('d M Y', strtotime($data_artikel['tanggal'])); ?></strong></span>
                                  <hr>
                                  <p style="text-align: justify"><?= $data_artikel['deskripsi']; ?></p>
                              </div>
                          </li>
                      <?php }
                  else
                      { ?>
                          <li class="col-lg-8">
                            <div class="row">
                              <div class="col-md-6"> 
                                <!-- Post Image -->
                                <div class="post-img right"><img class="img-responsive" src="<?= $data_artikel['gambar']; ?>"  style="object-fit:cover; width: 400px; height: 223px;" alt="" > </div>
                              </div>
                              <!-- Post Text Sec -->
                              <div class="col-md-6 text-center">
                                <div class="text-section"> <a href="<?= "artikel/q=".$data_artikel['id']; ?>"><?= $data_artikel['judul']; ?></a> <span>post by <strong><?= $data_artikel['penulis']; ?></strong> on <strong><?= date('d M Y', strtotime($data_artikel['tanggal'])); ?></strong></span>
                                  <hr>
                                  <p style="text-align: justify"><?= $data_artikel['deskripsi']; ?></p>
                                </div>
                              </div>
                            </div>
                          </li>
                      </ul>
                      <ul class="row">
                      <?php }}?>
          </ul>        
      </div>
</section>