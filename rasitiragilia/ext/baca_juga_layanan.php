<hr>
<div id="why-choose">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="tittle">
                    <h2>Baca Juga</h2>
                </div>
            </div>
                  
            <div class="col-lg-9">
                <ul class="row">              

                      <?php 
                        $query_services = mysqli_query($koneksi,"SELECT * FROM `services` ");
                        $x=0;
                          while($data_ = mysqli_fetch_assoc($query_services))
                          { 
                            $x = $x + 1; ?>
                            <li class="col-sm-4">
                                <a href="<?= $default.$data_['link'] ?>"><h6><?= strtoupper( $data_['nama'] );?></h6></a>
                                <p style="text-align: justify;"><?= ucfirst($data_['note']); ?></p>
                            </li>
                          <?php 
                            if ( $x % 3 == 0 ) 
                              { ?>
                                </ul>
                                <ul class="row">
                              <?php }
                          } ?> </ul>
                  </ul>
            </div>
        </div>
    </div>                
</div>