<div class="kids-winter">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-sm-12 col-xs-12 kids">
						<div class="kids-st">
							<div class="owl-carousel owl-theme owl-cate v2 js-owl-cate-hp1">
								<div class="shop-now hp1">
									<img src="images/img80.jpg" alt="">
									<h4>Mesin Capit<br>
									<span>Melatih Konsentrasi</span></h4>
									<p>New Product</p>
									<a href="product">Shop now</a>
								</div>
								<div class="shop-now hp1">
									<img src="images/img85.jpg" alt="">
									<h4><br><br>Buruan !!<span><br>
									Jangan Sampai kehabisan<span></h4>
								</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-12 col-xs-12">
					<div class="backpack img81">
						<img src="images/img81.jpg" alt="">
							<div class="pos">
								<p>New Product</p>
								<h4 class="st-font"><span>Pompa ASI</span></h4>
								<span>Huki</span>
							</div>
					</div>
					<div class="backpack">
						<img src="images/img82.jpg" alt="">
							<div class="pos-st2" style="margin-top: -50px;">
								<h4>Diskon <span>50%</span> off</h4>
								<p>This weekend only</p>
							</div>
					</div>
				</div>
				</div>
			</div>
		</div>
		
			<!-- Featured -->
			<div class="featured-homepage1">
				<div class="container">
					<div class="product-related hp1 featured-home1">
						<div class="title-pro-v1 hp1">
							<h3 class="related-title text-center hp1">Featured</h3>
						</div>
						<div class="owl-carousel owl-theme owl-cate v2 js-owl-cate-feat owl-feat-hp1">

							<?php
								$query = "SELECT * FROM produk ORDER BY RAND() LIMIT 6";
								$result = mysqli_query($conn, $query);
								while($row = mysqli_fetch_assoc($result)){
								$msg = "Hi kak, apakah untuk produk ".$row['nama']." masih tersedia?";
							?>
							<div class="product-item pro-v1 home1 ">
								<div class="product-item product-img-home3">
									<a href="#"><img src="<?= $row['Note'] ?>.jpg" alt="" class="img-responsive"></a>
									<div class="product-button-group product-details">
										<a href="" class="zoa-btn zoa-quickview" onclick="add_keranjang('<?= $row['id_produk'] ?>')"><span class="fa fa-shopping-bag"></span></a>
										<a href="https://wa.me/6281910429293?text=<?= $msg ?>" target="_blank" class="zoa-btn zoa-addcart"><span class="fa fa-phone"></span></a>
									</div>
								</div>
								<div class="sale-para2 shop-1 pro-v1 hp2-para home1">
									<div class="product-info">
										<div class="shop-1 pro-v1 shop-5 shop-6 shop-7">
											<a style="margin-top: 15px;"><?= ucwords($row['nama'])?></a>
											<ul>
												<li><p>Rp. <?= number_format($row['Harga']/30, 0, ",", "."); ?> / Hari</p>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<?php }?>


						</div>
					</div>
				</div>
			</div>
			<!-- Banner -->
			<div class="banner-homepage1">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-sm-8 col-xs-12 banner">
							<div class="banner-right">
								<img src="images/banner.png" alt="">
							</div>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12 banner">
							<div class="banner-right">
								<img src="images/banner2.png" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Bestseller -->
			<div class="bestseller">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-sm-12 col-xs-12">
							<div class="product-related best">
								<div class="title-pro-v1 hp1">
									<h3 class="related-title text-center hp1 best">Bestseller</h3>
								</div>
								<div class="owl-carousel owl-theme owl-cate v2 js-owl-cate-bestseller owl-best-hp1">
									<div class="item">
										<?php
											$query = "SELECT * FROM produk ORDER BY RAND() LIMIT 2";
											$result = mysqli_query($conn, $query);
											while($row = mysqli_fetch_assoc($result)){
											$msg = "Hi kak, apakah untuk produk ".$row['nama']." masih tersedia?";
										?>

											<div class="best-seller">
												<div class="img-bestseller">
													<a href="#" class=" hover-img-home1"><img src="<?= $row['Note'] ?>.jpg" alt=""></a>
													<div class="sale-img shop1 shop2 st-v2">
													</div>
												</div>
												<div class="para-best-home1">
													<h4><?= ucwords($row['nama'])?></h4>
													<ul>
														<li><i class="fa fa-star" aria-hidden="true"></i></li>
														<li><i class="fa fa-star" aria-hidden="true"></i></li>
														<li><i class="fa fa-star" aria-hidden="true"></i></li>
														<li><i class="fa fa-star" aria-hidden="true"></i></li>
														<li><i class="fa fa-star" aria-hidden="true"></i></li>
														<li class="span"><em>6 Review(s)</em></li>
													</ul>
													<li>
													<li><p>Rp. <?= number_format($row['Harga']/30, 0, ",", "."); ?> / Hari</p>
												</li>
													<br>
													<a href="" onclick="add_keranjang('<?= $row['id_produk'] ?>')"><span class="fa fa-shopping-bag"></span></a>
												</div>
											</div>										 	
											 
											<?php } 
										?>
									</div>
									<div class="item">
										<?php
											$query = "SELECT * FROM produk ORDER BY RAND() LIMIT 2";
											$result = mysqli_query($conn, $query);
											while($row = mysqli_fetch_assoc($result)){
											$msg = "Hi kak, apakah untuk produk ".$row['nama']." masih tersedia?";
										?>

											<div class="best-seller">
												<div class="img-bestseller">
													<a href="#" class=" hover-img-home1"><img src="<?= $row['Note'] ?>.jpg" alt=""></a>
													<div class="sale-img shop1 shop2 st-v2">
													</div>
												</div>
												<div class="para-best-home1">
													<h4><?= ucwords($row['nama'])?></h4>
													<ul>
														<li><i class="fa fa-star" aria-hidden="true"></i></li>
														<li><i class="fa fa-star" aria-hidden="true"></i></li>
														<li><i class="fa fa-star" aria-hidden="true"></i></li>
														<li><i class="fa fa-star" aria-hidden="true"></i></li>
														<li><i class="fa fa-star" aria-hidden="true"></i></li>
														<li class="span"><em>6 Review(s)</em></li>
													</ul>
													<p>Rp. <?= number_format($row['Harga']/30, 0, ",", "."); ?> / Hari</p>
													<br>
													<a href="" onclick="add_keranjang('<?= $row['id_produk'] ?>')"><span class="fa fa-shopping-bag"></span></a>
												</div>
											</div>										 	
											 
											<?php } 
										?>
									</div>
									<div class="item">
										<?php
											$query = "SELECT * FROM produk ORDER BY RAND() LIMIT 2";
											$result = mysqli_query($conn, $query);
											while($row = mysqli_fetch_assoc($result)){
											$msg = "Hi kak, apakah untuk produk ".$row['nama']." masih tersedia?";
										?>

											<div class="best-seller">
												<div class="img-bestseller">
													<a href="#" class=" hover-img-home1"><img src="<?= $row['Note'] ?>.jpg" alt=""></a>
													<div class="sale-img shop1 shop2 st-v2">
													</div>
												</div>
												<div class="para-best-home1">
													<h4><?= ucwords($row['nama'])?></h4>
													<ul>
														<li><i class="fa fa-star" aria-hidden="true"></i></li>
														<li><i class="fa fa-star" aria-hidden="true"></i></li>
														<li><i class="fa fa-star" aria-hidden="true"></i></li>
														<li><i class="fa fa-star" aria-hidden="true"></i></li>
														<li><i class="fa fa-star" aria-hidden="true"></i></li>
														<li class="span"><em>6 Review(s)</em></li>
													</ul>
													<p>Rp. <?= number_format($row['Harga'], 0, ",", "."); ?>0</p>
													<br>
													<a href="" onclick="add_keranjang('<?= $row['id_produk'] ?>')"><span class="fa fa-shopping-bag"></span></a>
												</div>
											</div>										 	
											 
											<?php } 
										?>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-12 col-xs-12">
							<div class="monial">
								<div class="title-pro-v1 hp1">
									<h3 class="related-title text-center hp1">Testimonial</h3>
								</div>
								<div class="owl-carousel owl-theme">
									<?php 
										for ($i=1; $i < 7 ; $i++) {  ?>
									<div class="item best">
										<img src="images/testi<?= $i?>.jpg">
									</div>
									<?php	}
									?>
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- On-Sale -->
			<div class="onsale">
				<div class="container">
					<div class="product-related onsale">
						<div class="title-pro-v1">
							<h3 class="related-title text-center onsale-home1">On Sale !</h3>
							</div>
						
								<div class="owl-carousel owl-theme owl-cate v2 js-owl-cate-feat owl-feat-hp1">									
									<?php
										$query = "SELECT * FROM produk ORDER BY RAND() LIMIT 6";
										$result = mysqli_query($conn, $query);
										while($row = mysqli_fetch_assoc($result)){
										$msg = "Hi kak, apakah untuk produk ".$row['nama']." masih tersedia?";
									?>
									<div class="product-item pro-v1 home1 ">
										<div class="product-item product-img-home3">
											<a href="#"><img src="<?= $row['Note'] ?>.jpg" alt="" class="img-responsive"></a>
											<div class="product-button-group product-details">
												<a href="" class="zoa-btn zoa-quickview" onclick="add_keranjang('<?= $row['id_produk'] ?>')"><span class="fa fa-shopping-bag"></span></a>
												<a href="https://wa.me/6281910429293?text=<?= $msg ?>" target="_blank" class="zoa-btn zoa-addcart"><span class="fa fa-phone"></span></a>
											</div>
										</div>
										<div class="sale-para2 shop-1 pro-v1 hp2-para home1">
											<div class="product-info">
												<div class="shop-1 pro-v1 shop-5 shop-6 shop-7">
													<a style="margin-top: 15px;"><?= ucwords($row['nama'])?></a>
													<ul>
														<li><p>Rp. <?= number_format($row['Harga']/30, 0, ",", "."); ?> / Hari</p>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<?php }?>
								</div>							
						</div>
					</div>
				</div>
				<!-- Blogs -->
				<div class="blogs">
					<div class="container">
						<div class="title-pro-v1 hp1">
							<h3 class="related-title text-center hp1">Blogs</h3>
						</div>
						<div class="owl-carousel owl-theme owl-cate v2 js-owl-cate-blogs">
							<div class="blog-v3 blog-home1">
								<div class="img-blog-v2 v3 home-1 img-blog-home1">
									<img class="img-home-1" src="images/img86.jpg" alt="img">
								</div>
								<div class="img-title2 v2 v3">
									<div class="kid-all v2 v3 hp1">
										<div class="para blog-v2 v3 para-blog-hp3">
											<h4>
												<a href="https://www.rumah.com/panduan-properti/12-pilihan-mainan-edukasi-anak-usia-4-6-tahun-untuk-di-rumah-24478">Pilihan Mainan Edukasi Anak Usia 4-6 Tahun</a>
											</h4>
											<div class="img-title2 blog-v2 v3 hp1">
												<img src="https://frconsultantindonesia.com/id/wp-content/uploads/2022/04/5138226-1024x1024.jpg" alt="img">
												<p><em>Admin</em></p>
											</div>
											<div class="img-title3 v2 v3 hp1">
												<a href="#"><i class="fa fa-calendar" aria-hidden="true"></i></a>
												<p><em>Jan 25, 2023</em></p>
											</div>
											<div class="para2 v2 v3 hp1">
												<p>Bermain memang merupakan bagian dari dunia anak-anak. Dengan bermain...</p>
											</div>
											<div class="icon v2 v3 hp1">
												<a href="#"><i class="fa fa-comments" aria-hidden="true"></i></a>
												<p><em><?php echo rand(10, 100); ?> Comments</em></p>
											</div>
											<div class="icon v2 v3 hp1">
												<a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a>
												<p><em><?php echo rand(10, 200); ?>  likes</em></p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="blog-v3 blog-home1">
								<div class="img-blog-v2 v3 home1 img-blog-home1">
									<img class="img-home-1" src="images/img87.jpg" alt="img">
								</div>
								<div class="img-title2 v2 v3">
									<div class="kid-all v2 v3 hp1">
										<div class="para blog-v2 v3 para-blog-hp3">
											<h4>
												<a href="https://www.ibupedia.com/artikel/balita/dari-pop-it-sampai-kaktus-mainan-viral-anak-tahun-2021">Dari Pop It Sampai Kaktus, Mainan Viral Anak Tahun 2021</a>
											</h4>
											<div class="img-title2 blog-v2 v3 hp1">
												<img src="https://frconsultantindonesia.com/id/wp-content/uploads/2022/04/5138226-1024x1024.jpg" alt="img">
												<p><em>Admin</em></p>
											</div>
											<div class="img-title3 v2 v3 hp1">
												<a href="#"><i class="fa fa-calendar" aria-hidden="true"></i></a>
												<p><em>Jan 25, 2023</em></p>
											</div>
											<div class="para2 v2 v3 hp1 hp1">
												<p>Meski beberapa memiliki manfaat untuk si kecil, namun mainan viral ini....</p>
											</div>
											<div class="icon v2 v3 hp1">
												<a href="#"><i class="fa fa-comments" aria-hidden="true"></i></a>
												<p><em><?php echo rand(10, 100); ?>  Comments</em></p>
											</div>
											<div class="icon v2 v3 hp1">
												<a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a>
												<p><em><?php echo rand(10, 200); ?>  likes</em></p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>