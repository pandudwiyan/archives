<?php 
$query = mysqli_query($koneksi,"SELECT * FROM `t_product` WHERE `status` ='aktif'");
$x = 0;
?>
<?php while ($data = mysqli_fetch_assoc($query)) 
{
$id_prdk = $data['id']; 
$x = $x + 1;
?>
        <?php if ($x % 2 != 0) 
        { ?>
            <div class="swiper-slide product-wrapper">
        <?php } ?>
        
            <!-- Single Product Start -->
            <div class="product product-border-left mb-10" data-aos="fade-up" data-aos-delay="300">
                <div class="thumb">
                    <?php
                     $tanggal_input = DateTime::createFromFormat('Y-m-d', $data['tgl_input']); 
                     $tanggal_tidak_new = strtotime("+8 day", $tanggal_input);

                     if ($hari_ini <= $tanggal_tidak_new) {?>
                         <span class="badges">
                            <span class="sale">New</span>
                        </span>
                     <?php }
                    ?>

                    <a class="image" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" style="cursor: pointer;" onclick="detail_product('<?= $id_prdk ?>')">
                        <img class="first-image" src="<?= $link_thumbnail.$data['thumbnail']; ?>" alt="Product" onclick="detail_product('<?= $id_prdk ?>')" />
                        <img class="second-image" src="<?= $link_thumbnail.$data['thumbnail']; ?>" alt="Product" onclick="detail_product('<?= $id_prdk ?>')" />
                    </a>

                    <div class="actions">
                        <a href="#" class="action quickview" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" onclick="detail_product('<?= $id_prdk ?>')"><i class="pe-7s-search"></i></a>
                    </div>
                </div>

                <div class="content">
                    <h4 class="sub-title"><a href="<?= $default_link ?>"><?= $nama_perusahaan ?></a></h4>
                    <span class="title" style="font-size: 13px;"><a href="single-product.html"><?= $data['nama']; ?></a></span>
                    <span class="price">

                    <?php if ($data['current_price'] != 0) 
                    { ?>
                        <span class="new"><?= "Rp. ".number_format($data['current_price'],0,",","."); ?></span>
                        <span class="old"><?= "Rp. ".number_format($data['price'],0,",","."); ?></span>
                    <?php } else { ?>
                        <span class="new"><?= "Rp. ".number_format($data['price'],0,",","."); ?></span>
                    <?php } ?>  
                    </span>
                    <button class="btn btn-sm btn-outline-dark btn-hover-primary" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" onclick="detail_product('<?= $id_prdk ?>')">Add To Cart</button>
                </div>
            </div>
            <!-- Single Product End -->

        <?php if ($x % 2 == 0) 
        { ?>
        </div>
        <?php } ?>
<?php }?>
    