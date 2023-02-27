<nav class="webimenu">
    <div class="menu-toggle"> <i class="fa fa-bars" style="margin-top: 15px;"> </i> </div>
        <ul class="ownmenu">
            <li><a href="<?= $default;?>index">Home</a></li>
            <li><a href="#layanan">Layanan</a>
                <ul class="dropdown animated-3s fadeIn">
                    <?php 
                        $query_layanan = mysqli_query($koneksi,"SELECT * FROM `services` ");

                        while($data = mysqli_fetch_assoc($query_layanan))
                        { ?>
                            <li><a href="<?= $default.$data['link'];?>"><?= $data['nama'];?></a></li> 
                        <?php }
                    ?>
                </ul>
            </li>
            <li><a href="<?= $default;?>artikel">Artikel</a></li>
            <li><a href="<?= $default;?>about">Tentang Kami</a></li>
            <li><a href="<?= $default;?>team">Our Team</a></li>
            <li><a href="<?= $default;?>gallery">Gallery</a></li>
        </ul>
</nav>