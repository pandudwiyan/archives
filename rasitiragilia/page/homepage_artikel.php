<section class="blog blog-pages" style="background: #f4f4f4;">
    <div class="container"> 
        
        <!--======= Blog POST =========-->
        <ul>

             <?php
                $query_artikel = mysqli_query($koneksi,"SELECT * FROM `artikel` ORDER BY `tanggal` DESC LIMIT 4");
                while($data_artikel = mysqli_fetch_assoc($query_artikel))
                { ?>
                    <li class="row">             

                        <div class="col-md-5">
                            <div class="text-section">
                                <a href="#."><?= $data_artikel['judul']; ?></a>
                                    <span>post by <strong><?= $data_artikel['penulis']; ?></strong> on <strong><?= date('d M Y', strtotime($data_artikel['tanggal'])); ?></strong></span>
                            <hr>
                            <p style="text-align: justify;"><?= $data_artikel['deskripsi']; ?></p>
                            <a href="#." class="btn btn-1">View more</a> 
                            </div><br><br>
                        </div>

                        <div class="col-md-7 text-center">
                          <img class="img-responsive" src="<?= $data_artikel['gambar']; ?>"  style="object-fit:cover; width: 100%; height: 350px; border-radius: 8px;"alt="">                        
                        </div>

                    </li>
              <?php } ?>
        </ul>
        
        <!--======= PAGINATION =========-->
        <nav>
          <ul class="pagination">
            <li class="active"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">...</a></li>
            <li><a href="#">8</a></li>
            <li><a href="#">9</a></li>
          </ul>
        </nav>
        <div> 
</section>