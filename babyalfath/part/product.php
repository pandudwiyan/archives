<div class="luc2 v4 breadcrumb-shoppage7">
	<h2>Products</h2>
	<ul class="breadcrumb">
		<li><a href="index">Home</a></li>
		<li style="color: white;">/</li>
		<li><a href="#">Product</a></li>
	</ul>
</div>

<div class="shop-page">
	<div class="container">
		<div class="row shop">
			<div class="col-md-8 col-sm-6 col-xs-12 shoppage1 found-shoppage7">
				<div class="we-found s4 we-found-shoppage7">
					<?php
								$query = "SELECT * FROM produk";
								$result = mysqli_query($conn, $query);
								$hasil = mysqli_num_rows($result);
							?>
					<h4>We found <strong><?= $hasil; ?></strong> products available for you</h4>
				</div>
				
			</div>
			
			<div class="col-md-4 col-sm-6 col-xs-12 shoppage1">
				<div class="wrappage">
					<div class="dropdown drop-filter">
						<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
						<span class="caret"></span><img class="img-filter" src="images/icon7.png" alt="">Filters</button>
						<?php include 'menu_filter.php' ?>
						<?php include 'menu_filter_mobile.php' ?>				
					</div>
				</div> 
			</div>
		</div>
		
		<div class="border shopv1"></div>
	</div>
</div>

<!-- Content -->
<div class="container">
	<div class="shop-top page-7">
		<div class="shop-element right shop-7"></div>
	</div>

	<div class="product-collection-grid product-grid bd-bottom">

		<div class="row">
			<?php
				$query = "SELECT * FROM produk";
				$result = mysqli_query($conn, $query);
				while($row = mysqli_fetch_assoc($result)){
				$msg = "Hi kak, apakah untuk produk ".$row['nama']." masih tersedia?";
			?>
				<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 product-item">
					<div class="product-img">
						<a href="#"><img src="<?= $row['Note'] ?>.jpg" alt="" class="img-responsive"></a>
						<div class="product-button-group product-details">
							<a href="#" class="zoa-btn zoa-quickview" onclick="add_keranjang('<?= $row['id_produk'] ?>')"><span class="fa fa-shopping-bag"></span></a>
							<a href="https://wa.me/6281910429293?text=<?= $msg ?>" target="_blank" class="zoa-btn zoa-addcart"><span class="fa fa-phone"></span></a>
						</div>
					</div>

					<div class="product-info">
						<div class="sale-para2 shop-1 pro-v1 shop-5 shop-6 shop-7">
							<a><?= ucwords($row['nama'])?></a>
							<ul>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li class="st-rv"><i class="fa fa-star" aria-hidden="true"></i><em><span>6 Review(s)</span></em></li>
								<li><p>Rp. <?= number_format($row['Harga']/30, 0, ",", "."); ?> / Hari</p>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<?php }	?>
		</div>

	</div><br>
	<!-- <div class="loadmore"><a href="#">load more</a></div> -->
</div>