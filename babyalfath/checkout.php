<?php include "setting/koneksi.php"; ?>
<?php include "setting/deklarasi.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<title>Baby Alfath Rent Toys</title>
	<link rel="shortcut icon" href="images/logo.png" type="image/png">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/slick.css">
	<link rel="stylesheet" href="css/slick-theme.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/styles.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
</head>

<body>
	<!-- push menu-->
	<div class="pushmenu menu-home5">
		<div class="menu-push">
			<span class="close-left js-close"><i class="ion-ios-close-empty f-40"></i></span>
			<div class="clearfix"></div>
			<form role="search" method="get" id="searchform" class="searchform" action="/search">
				<div>
					<label class="screen-reader-text" for="q"></label>
					<input type="text" placeholder="Search for products" value="" name="q" id="q" autocomplete="off">
					<input type="hidden" name="type" value="product">
					<button type="submit" id="searchsubmit"><i class="ion-ios-search-strong"></i></button>
				</div>
			</form>
			<ul class="nav-home5 js-menubar">
				<li class="level1 active dropdown">
					<a href="#">Home</a>
					<span class="icon-sub-menu"></span>
					<ul class="menu-level1 js-open-menu">
						<li class="level2"><a href="Homepage-v1.html" title="">Home 1</a></li>
						<li class="level2"><a href="Homepage-v2.html" title="">Home 2</a></li>
						<li class="level2"><a href="Homepage-v3.html" title="">Home 3</a></li>
						<li class="level2"><a href="#" title="">Demo 4</a></li>
						<li class="level2"><a href="#" title="">Demo 5</a></li>
						<li class="level2"><a href="#" title="">Demo 6</a></li>
					</ul>
				</li>
				<li class="level1 active dropdown"><a href="#">Shop</a>
					<span class="icon-sub-menu"></span>
					<div class="menu-level1 js-open-menu">
						<ul class="level1">
							<li class="level2">
								<a href="#">Shop Layout</a>
								<ul class="menu-level-2">
									<li class="level3"><a href="Shop-page-v1.html" title="">Shop 1</a></li>
									<li class="level3"><a href="Shop-page-v2.html" title="">Shop 2</a></li>
									<li class="level3"><a href="Shop-page-v3.html" title="">Shop 3</a></li>
									<li class="level3"><a href="Shop-page-v4.html" title="">Shop 4</a></li>
									<li class="level3"><a href="Shop-page-v5.html" title="">Shop 5</a></li>
									<li class="level3"><a href="Shop-page-v6.html" title="">Shop 6</a></li>
									<li class="level3"><a href="Shop-page-v7.html" title="">Shop 7</a></li>
									<li class="level3"><a href="Shop-page-v8.html" title="">Shop 8</a></li>
								</ul>
							</li>
							<li class="level2">
								<a href="#">Single Product Type</a>
								<ul class="menu-level-2">
									<li class="level3"><a href="Product-details-v1.html" title="">Product 1</a></li>
									<li class="level3"><a href="Product-details-v2.html" title="">Product 2</a></li>
									<li class="level3"><a href="Product-details-v3html" title="">Product 3</a></li>
									<li class="level3"><a href="Product-details-v4html" title="">Product 4</a></li>
									<li class="level3"><a href="Product-details-v5.html">Product 5</a></li>
									<li class="level3"><a href="#">Variable</a></li>
									<li class="level3"><a href="#">External / Affiliate</a></li>
									<li class="level3"><a href="#">Grouped</a></li>
									<li class="level3"><a href="#">Out of stock</a></li>
									<li class="level3"><a href="#">On sale</a></li>
								</ul>
							</li>
							<li class="level2">	
								<a href="#">Categories</a>
								<ul class="menu-level-2">
									<li class="level3"><a href="#" title="">Categories Full Width</a></li>
									<li class="level3"><a href="#" title="">Categories Left Sidebar</a></li>
									<li class="level3"><a href="#" title="">Categories Right Sidebar</a></li>
								</ul>
							</li>
							<li class="level2">
								<a href="#">Single Product Layout</a>
								<ul class="menu-level-2">
									<li class="level3"><a href="#" title="">Product Extended</a></li>
									<li class="level3"><a href="#" title="">Product Left Sidebar</a></li>
									<li class="level3"><a href="#" title="">Product Right Sideba</a></li>
								</ul>
							</li>
							<li class="level2">
								<a href="#">Other Pages</a>
								<ul class="menu-level-2">
									<li class="level3"><a href="#" title="">Shop</a></li>
									<li class="level3"><a href="#" title="">Cart</a></li>
									<li class="level3"><a href="#" title="">My Wishlist</a></li>
									<li class="level3"><a href="#" title="">Checkout</a></li>
									<li class="level3"><a href="#" title="">My Account</a></li>
									<li class="level3"><a href="#" title="">Track Your Order</a></li>
									<li class="level3"><a href="#" title="">Quick View</a></li>
								</ul>
							</li>
						</ul>
						<div class="clearfix"></div>
					</div>
				</li>
				<li class="level1 active dropdown"><a href="#">Mega Menu</a></li>
				<li class="level1">
					<a href="#">Pages</a>
					<span class="icon-sub-menu"></span>
					<ul class="menu-level1 js-open-menu">
						<li class="level2"><a href="About-Us.html" title="About Us ">About Us </a></li>
						<li class="level2"><a href="About-Us-v2.html" title="Contact">About Us 2</a></li>
						<li class="level2"><a href="Contact-Us.html" title="FAQs">Contact-us</a></li>
						<li class="level2"><a href="#" title="404">404</a></li>
						<li class="level2"><a href="#" title="Coming Soon">Coming Soon</a></li>
					</ul>
				</li>
				<li class="level1">
					<a href="#">Blog</a>
					<span class="icon-sub-menu"></span>
					<ul class="menu-level1 js-open-menu">
						<li class="level2"><a href="Blog-grid-v1.html" title="Blog Standar">Blog Gird 1</a></li>
						<li class="level2"><a href="Blog-grid-v2.html" title="Blog Gird">Blog Gird 2</a></li>
						<li class="level2"><a href="Blog-grid-v3.html" title="Blog Sidebar">Blog Gird 3</a></li>
						<li class="level2"><a href="Blog-grid-v4.html" title="Blog Single Post">Blog Gird 4</a></li>
					</ul>
				</li>
			</ul>
			<ul class="mobile-account">
				<li><a href="#"><i class="fa fa-unlock-alt"></i>Login</a></li>
				<li><a href="#"><i class="fa fa-user-plus"></i>Register</a></li>
				<li><a href="#"><i class="fa fa-heart"></i>Wishlist</a></li>
			</ul>
			<h4 class="mb-title">connect and follow</h4>
			<div class="mobile-social mg-bottom-30">
				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-google-plus"></i></a>
			</div>
		</div>
	</div>
	<header id="header" class="header-v2">
		<div class="topbar hidden-xs hidden-sm">
			<div class="container">
				<div class="row flex">
					<div class="col-md-12 col-sm-12 col-xs-12 justify-content-end">
						<div class="topbar-right homepage-v1">
							<div style="margin-top: -10px; margin-bottom: 15px;">
								<div class="date3 dropdown">
								<div class="date mycart">
									<button class="fa fa-shopping-bag dropdown-toggle" type="button" data-toggle="dropdown">
									</button>
									<div class="dropdown-menu cart2 drop-home-1 check-out-home-1">
										
										<div class="cart-2">
											<div class="check-out">
												<div class="img-cart">
													<a href="#"><img src="images/img27.jpg" alt="img"></a>
												</div>
												<div class="para-cart">
													<p><a href="#">Crepe Jacket With Pompom</a></p>
													<h4>$36.00</h4>
													<del>$42.00</del>
													<br>
													<a href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
												</div>
											</div>
											<br>
											<div class="check-out">
												<div class="img-cart">
													<a href="#"><img src="images/img28.jpg" alt="img"></a>
												</div>
												<div class="para-cart">
													<p><a href="#">Animal Print Sweatshirt</a></p>
													<h4>$36.00</h4>
													<del>$42.00</del>
													<br>
													<a href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
												</div>
											</div>
											<br>
											<div class="check-out bd-bt">
												<div class="img-cart">
													<a href="#"><img src="images/img29.jpg" alt="img"></a>
												</div>
												<div class="para-cart">
													<p><a href="#">Knit Cardigan</a></p>
													<br>
													<h4>$36.00</h4>
													<del>$42.00</del>
													<br>
													<a href="#"><i class="fa fa-trash-o st" aria-hidden="true"></i></a>
												</div>
											</div>
										</div>
										<div>
											<div class="check-out2">
												<div class="total">
													<p>Total</p>
													<span>$ 689.8</span>
												</div>
												<div class="check">
													<a href="#">check out</a>
												</div>
											</div>
										</div>
									</div>
									
								</div>
								<div class="para-a a4">
									<h4><a href="#">My Cart.</a></h4>
									<p>01 </p>
									<span>/ Rp. 100.000</span>
								</div>
							</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="header-center-1">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-12 col-xs-12 header">
						<div class="logo">
							<a href="#"><img src="images/logo.png" alt="logo" width="150px;"></a>
						</div>
					</div>
					<div style="margin-top: 15px;">
						<div class="col-md-3 col-sm-12 col-xs-12 logo">
							<div class="date2">
								<div class="date">
									<a href="#"><i class="fa fa-calendar st-calendar" aria-hidden="true"></i></a>
								</div>
								<div class="para-a">
									<h4>Senin - Sabtu </h4>
									<p>08:00 - 18:00 WIB</p>									
								</div>
							</div>
						</div>
						<div class="col-md-3 col-sm-12 col-xs-12 header-center2">
							<div class="date2">
								<div class="date">
									<a href="#"><i class="fa fa-bookmark" aria-hidden="true"></i></a>
								</div>
								<div class="para-a a2">
									<h4>Setiap Hari Jum'at!</h4>
									<p>Discount</p>
									<span>up to 50% off.</span>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-sm-12 col-xs-12 hd-right">
							<div class="date4">
								<div class="date">
									<a href="#"><i class="fa fa-phone st-phone" aria-hidden="true"></i></a>
								</div>
								<div class="para-a a3">
									<h4>Punya Pertanyaan?</h4>
									<p>Whatsapp:</p>
									<span>081910429293.</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="header-center pro-v1 hp1">
			<div class="container">
				<!-- push-menu -->
				<a href="#" class="icon-pushmenu js-push-menu">
					<i class="fa fa-bars" aria-hidden="true"></i></a>
					<div class="row flex align-items-center justify-content-between">
						<div class="col-md-7 col-xs-12 col-sm-6 col2 flex justify-content-end">
							<ul class="nav navbar-nav js-menubar hidden-xs hidden-sm">
								<li class="level1 active dropdown home-page-v1-st style-menu-home-1">
									<a class="menu-home-3 home-1-font" href="#">Beranda</a>									
								</li>
								<li class="level1 active dropdown home-page-v1-st style-menu-home-1">
									<a class="menu-home-3 home-1-font" href="#">Product </a>
								</li>
								<li class="level1 active dropdown home-page-v1-st style-menu-home-1">
									<a class="menu-home-3 home-1-font" href="#">Cara Order </a>
								</li>
								<li class="level1 active dropdown home-page-v1-st style-menu-home-1">
									<a class="menu-home-3 home-1-font" href="#">Syarat & Ketentuan</a>
								</li>

								
							</ul>
						</div>
						<div class="col-md-3 col-xs-12 col-sm-6" style="margin-bottom: 10px;">
							<div class="search3 search-home-1">
								<form method="get" action="/search" role="search" class="search-form  has-categories-select">
									<input name="q" class="search-input" type="text" value="" placeholder="Search..." autocomplete="off">
									<input type="hidden" name="post_type" value="product">
									<button type="submit" id="search-btn"><i class="ion-ios-search-strong"></i></button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- header -->
		<section>
			<div class="kids-winter">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-sm-12 col-xs-12 kids">
							<div class="kids-st">
								<div class="owl-carousel owl-theme owl-cate v2 js-owl-cate-hp1">
									<div class="shop-now hp1">
										<img src="images/img80.jpg" alt="">
										<h4>Kids Winter   <span>Jacket,<br>
										Coat & Sweater</span></h4>
										<p>It is a long established fact that a reader will be distracted by the<br>
										readable content of a page when looking at its layout</p>
										<a href="">Shop now</a>
									</div>
									<img src="images/img85.jpg" alt="">
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-12 col-xs-12">
							<div class="backpack img81">
								<a href="" class="hover-images"><img src="images/img81.jpg" alt=""></a>
								<div class="pos">
									<p>New Styles</p>
									<h4 class="st-font">Backpack</h4>
									<span>2018</span>
								</div>
							</div>
							<div class="backpack">
								<a href="" class="hover-images"><img src="images/img82.jpg" alt=""></a>
								<div class="pos-st2">
									<h4>Sale <span>50%</span> off</h4>
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
							<p><a href="" class="view">View All Products<i class="fa fa-angle-right" aria-hidden="true"></i></a></p>
						</div>
						<div class="owl-carousel owl-theme owl-cate v2 js-owl-cate-feat owl-feat-hp1">
							<div class="product-item pro-v1 home1 ">
								<div class="product-img product-img-home3">
									<a href=""><img src="images/img61.jpg" alt="" class="img-responsive"><i class="fa fa-arrows" aria-hidden="true"></i><span class="quick">Quick view</span></a>
									<div class="sale-img shop1 shop2">
										<div class="before shop1 v2 pro-v1 hp1 featured-before before-home1 bf-featured-hp1"></div>
									</div>
									<div class="ribbon zoa-hot shop-v1 hp1 featured-sales"><span>New</span></div>
									<div class="product-button-group hp1">
										<a href="#" class="zoa-btn zoa-quickview">
											<span class="fa fa-shopping-bag"></span>
										</a>
										<a href="#" class="zoa-btn zoa-wishlist">
											<span class="fa fa-balance-scale"></span>
										</a>
										<a href="#" class="zoa-btn zoa-addcart">
											<span class="fa fa-heart "></span>
										</a>
									</div>
								</div>
								<div class="sale-para2 shop-1 pro-v1 hp2-para home1">
									<p><a href="#">Animal Print Sweatshirt</a></p>
									<div class="star-icons">
										<ul>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li class="review"><a class="view" href=""><em>6 Review(s)</em></a></li>
										</ul>
									</div>
									<div class="review-hp1">
										<p>$36.00</p>
										<del>$42.00</del>
									</div>
								</div>
							</div>
							<div class="product-item pro-v1 home1">
								<div class="product-img product-img-home3">
									<a href=""><img src="images/img50.jpg" alt="" class="img-responsive"><i class="fa fa-arrows" aria-hidden="true"></i><span class="quick">Quick view</span></a>
									<div class="sale-img shop1 shop2 st-v2">
										<div class="before shop1 v2 pro-v1 st-v2 hp1 featured-before-25"></div>
									</div>
									<div class="ribbon zoa-hot shop-v1 v2 hp1 featured-sales"><span>-25%</span></div>
									<div class="product-button-group hp1">
										<a href="#" class="zoa-btn zoa-quickview">
											<span class="fa fa-shopping-bag"></span>
										</a>
										<a href="#" class="zoa-btn zoa-wishlist">
											<span class="fa fa-balance-scale"></span>
										</a>
										<a href="#" class="zoa-btn zoa-addcart">
											<span class="fa fa-heart "></span>
										</a>
									</div>
								</div>
								<div class="sale-para2 shop-1 pro-v1 hp2-para home1">
									<p><a href="#">Animal Print Sweatshirt</a></p>
									<div class="star-icons">
										<ul>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li class="review"><a class="view" href=""><em>6 Review(s)</em></a></li>
										</ul>
									</div>
									<div class="review-hp1">
										<p>$36.00</p>
										<del>$42.00</del>
									</div>
								</div>
							</div>
							<div class="product-item pro-v1 home1">
								<div class="product-img product-img-home3">
									<div class="style-opacity">
										<div class="opacity-home2">
											<a href=""><img src="images/img51.jpg" alt="" class="img-responsive"></a>
										</div>
										<div class="out-of-stock">
											<h4>out of stock!</h4>
											<em><span>see</span>similar products</em>
										</div>
									</div>
									<div class="product-button-group hp1">
										<a href="#" class="zoa-btn zoa-quickview">
											<span class="fa fa-shopping-bag"></span>
										</a>
										<a href="#" class="zoa-btn zoa-wishlist">
											<span class="fa fa-balance-scale"></span>
										</a>
										<a href="#" class="zoa-btn zoa-addcart">
											<span class="fa fa-heart "></span>
										</a>
									</div>
								</div>
								<div class="sale-para2 shop-1 pro-v1 hp2-para home1">
									<p><a href="#">Animal Print Sweatshirt</a></p>
									<div class="star-icons">
										<ul>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li class="review"><a class="view" href=""><em>6 Review(s)</em></a></li>
										</ul>
									</div>
									<div class="review-hp1">
										<p>$36.00</p>
										<del>$42.00</del>
									</div>
								</div>
							</div>
							<div class="product-item pro-v1 home1">
								<div class="product-img product-img-home3">
									<a href=""><img src="images/img63.jpg" alt="" class="img-responsive"><i class="fa fa-arrows" aria-hidden="true"></i><span class="quick">Quick view</span></a>
									<div class="product-button-group hp1">
										<a href="#" class="zoa-btn zoa-quickview">
											<span class="fa fa-shopping-bag"></span>
										</a>
										<a href="#" class="zoa-btn zoa-wishlist">
											<span class="fa fa-balance-scale"></span>
										</a>
										<a href="#" class="zoa-btn zoa-addcart">
											<span class="fa fa-heart "></span>
										</a>
									</div>
								</div>
								<div class="sale-para2 shop-1 pro-v1 hp2-para home1">
									<p><a href="#">Animal Print Sweatshirt</a></p>
									<div class="star-icons">
										<ul>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li class="review"><a class="view" href=""><em>6 Review(s)</em></a></li>
										</ul>
									</div>
									<div class="review-hp1">
										<p>$36.00</p>
										<del>$42.00</del>
									</div>
								</div>
							</div>
							<div class="product-item pro-v1 home1">
								<div class="product-img product-img-home3">
									<a href=""><img src="images/img61.jpg" alt="" class="img-responsive"><i class="fa fa-arrows" aria-hidden="true"></i><span class="quick">Quick view</span></a>
									<div class="sale-img shop1 shop2">
										<div class="before shop1 v2 pro-v1 hp1 featured-before before-home1"></div>
									</div>
									<div class="ribbon zoa-hot shop-v1 hp1 featured-sales"><span>New</span></div>
									<div class="product-button-group hp1">
										<a href="#" class="zoa-btn zoa-quickview">
											<span class="fa fa-shopping-bag"></span>
										</a>
										<a href="#" class="zoa-btn zoa-wishlist">
											<span class="fa fa-balance-scale"></span>
										</a>
										<a href="#" class="zoa-btn zoa-addcart">
											<span class="fa fa-heart "></span>
										</a>
									</div>
								</div>
								<div class="sale-para2 shop-1 pro-v1 hp2-para home1">
									<p><a href="#">Animal Print Sweatshirt</a></p>
									<div class="star-icons">
										<ul>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li class="review"><a class="view" href=""><em>6 Review(s)</em></a></li>
										</ul>
									</div>
									<div class="review-hp1">
										<p>$36.00</p>
										<del>$42.00</del>
									</div>
								</div>
							</div>
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
									<p><a href="" class="view">View All Products<i class="fa fa-angle-right" aria-hidden="true"></i></a></p>
								</div>
								<div class="owl-carousel owl-theme owl-cate v2 js-owl-cate-bestseller owl-best-hp1">
									<div class="item">
										<div class="best-seller">
											<div class="img-bestseller">
												<a href="" class=" hover-img-home1"><img src="images/img50.jpg" alt=""></a>
												<div class="sale-img shop1 shop2 st-v2">
													<div class="before shop1 v2 pro-v1 st-v2 hp1 best"></div>
												</div>
												<div class="ribbon zoa-hot shop-v1 v2 hp1 best-seller"><span>-25%</span></div>
											</div>
											<div class="para-best-home1">
												<h4><a href="">Animal Print Sweatshirt</a></h4>
												<ul>
													<li><a href=""><i class="fa fa-star" aria-hidden="true"></i></a></li>
													<li><a href=""><i class="fa fa-star" aria-hidden="true"></i></a></li>
													<li><a href=""><i class="fa fa-star" aria-hidden="true"></i></a></li>
													<li><a href=""><i class="fa fa-star" aria-hidden="true"></i></a></li>
													<li><a href=""><i class="fa fa-star" aria-hidden="true"></i></a></li>
													<li class="span"><em>6 Review(s)</em></li>
												</ul>
												<p>$36.00</p>
												<del>$42.00</del><br>
												<a href=""><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
												<a href=""><i class="fa fa-balance-scale" aria-hidden="true"></i></a>
												<a href=""><i class="fa fa-heart" aria-hidden="true"></i></a>
											</div>
										</div>
										<div class="best-seller">
											<div class="img-bestseller">
												<a href="" class=" hover-img-home1"><img class="st-img-best" src="images/img99.jpg" alt=""></a>
												<div class="before shop1 v2 pro-v1 best"></div>
												<div class="ribbon zoa-hot shop-v1 v2 hp1 best-seller"><span>-25%</span></div>
											</div>
											<div class="para-best-home1">
												<h4><a href="">Animal Print Sweatshirt</a></h4>
												<ul>
													<li><a href=""><i class="fa fa-star" aria-hidden="true"></i></a></li>
													<li><a href=""><i class="fa fa-star" aria-hidden="true"></i></a></li>
													<li><a href=""><i class="fa fa-star" aria-hidden="true"></i></a></li>
													<li><a href=""><i class="fa fa-star" aria-hidden="true"></i></a></li>
													<li><a href=""><i class="fa fa-star" aria-hidden="true"></i></a></li>
													<li class="span"><em>6 Review(s)</em></li>
												</ul>
												<p>$36.00</p>
												<del>$42.00</del><br>
												<a href=""><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
												<a href=""><i class="fa fa-balance-scale" aria-hidden="true"></i></a>
												<a href=""><i class="fa fa-heart" aria-hidden="true"></i></a>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="best-seller">
											<div class="img-bestseller">
												<a href="" class=" hover-img-home1"><img src="images/img52.jpg" alt=""></a>
												<div class="sale-img shop1 shop2 st-v2">
													<div class="before shop1 v2 pro-v1 st-v2 hp1 best"></div>
												</div>
												<div class="ribbon zoa-hot shop-v1 v2 hp1 best-seller st-color-home1"><span>-25%</span></div>
											</div>
											<div class="para-best-home1">
												<h4><a href="">Contrasting Dungarees With Craces</a></h4>
												<ul>
													<li><a href=""><i class="fa fa-star" aria-hidden="true"></i></a></li>
													<li><a href=""><i class="fa fa-star" aria-hidden="true"></i></a></li>
													<li><a href=""><i class="fa fa-star" aria-hidden="true"></i></a></li>
													<li><a href=""><i class="fa fa-star" aria-hidden="true"></i></a></li>
													<li><a href=""><i class="fa fa-star" aria-hidden="true"></i></a></li>
													<li class="span"><em>6 Review(s)</em></li>
												</ul>
												<p>$36.00</p>
												<del>$42.00</del><br>
												<a href=""><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
												<a href=""><i class="fa fa-balance-scale" aria-hidden="true"></i></a>
												<a href=""><i class="fa fa-heart" aria-hidden="true"></i></a>
											</div>
										</div>
										<div class="best-seller">
											<div class="img-bestseller">
												<a href="" class=" hover-img-home1"><img src="images/img59.jpg" alt=""></a>
												<div class="sale-img shop1 shop2 st-v2">
													<div class="before shop1 v2 pro-v1 st-v2 hp1 best"></div>
												</div>
												<div class="ribbon zoa-hot shop-v1 v2 hp1 best-seller"><span>-25%</span></div>
											</div>
											<div class="para-best-home1">
												<h4><a href="">Animal Print Sweatshirt</a></h4>
												<ul>
													<li><a href=""><i class="fa fa-star" aria-hidden="true"></i></a></li>
													<li><a href=""><i class="fa fa-star" aria-hidden="true"></i></a></li>
													<li><a href=""><i class="fa fa-star" aria-hidden="true"></i></a></li>
													<li><a href=""><i class="fa fa-star" aria-hidden="true"></i></a></li>
													<li><a href=""><i class="fa fa-star" aria-hidden="true"></i></a></li>
													<li class="span"><em>6 Review(s)</em></li>
												</ul>
												<p>$36.00</p>
												<del>$42.00</del><br>
												<a href=""><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
												<a href=""><i class="fa fa-balance-scale" aria-hidden="true"></i></a>
												<a href=""><i class="fa fa-heart" aria-hidden="true"></i></a>
											</div>
										</div>
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
									<div class="item best">
										<a href=""><img class="img-st1" src="images/img90.png" alt=""></a>
										<a href=""><h4>JoAnne Theodore<br><em>Graphic Design</em></h4></a>
										<img class="img-st" src="images/img91.png" alt="">
										<p><em>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</em></p>
									</div>
									<div class="item best">
										<a href=""><img class="img-st1" src="images/img90.png" alt=""></a>
										<a href=""><h4>JoAnne Theodore<br><em>Graphic Design</em></h4></a>
										<img class="img-st" src="images/img91.png" alt="">
										<p><em>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</em></p>
									</div>
									<div class="item best">
										<a href=""><img class="img-st1" src="images/img90.png" alt=""></a>
										<a href=""><h4>JoAnne Theodore<br><em>Graphic Design</em></h4></a>
										<img class="img-st" src="images/img91.png" alt="">
										<p><em>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</em></p>
									</div>
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
							<p><a href="" class="view
								">View All Products<i class="fa fa-angle-right" aria-hidden="true"></i></a></p>
							</div>
							<div class="owl-carousel owl-theme owl-cate v2 js-owl-cate-sales-hp1 owl-onsale">
								<div class="product-item pro-v1 home1">
									<div class="product-img product-img-home3">
										<a  href=""><img src="images/img83.jpg" alt="" class="img-responsive"></a>
										<div class="sale-img shop1 shop2 st-v2">
											<div class="before shop1 v2 pro-v1 st-v2 hp1 before-home1 bf-onsales-hp1"></div>
										</div>
										<div class="ribbon zoa-hot shop-v1 v2 hp1"><span>-25%</span></div>
										<div class="product-button-group hp1 onsale-home1">
											<a href="#" class="zoa-btn zoa-quickview stwh-onsales-home1">
												<span class="fa fa-shopping-bag"></span>
											</a>
											<a href="#" class="zoa-btn zoa-wishlist stwh-onsales-home1">
												<span class="fa fa-balance-scale"></span>
											</a>
											<a href="#" class="zoa-btn zoa-addcart stwh-onsales-home1">
												<span class="fa fa-heart "></span>
											</a>
										</div>
									</div>
									<div class="sale-para2 shop-1 pro-v1 hp2-para home1">
										<p><a href="#">Skirt With Coloured Top-<br>stitching</a></p>
										<div class="star-icons">
											<ul>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li class="review"><a class="view" href=""><em>6 Review(s)</em></a></li>
											</ul>
										</div>
										<div class="review-hp1">
											<p>$36.00</p>
											<del>$42.00</del>
										</div>
									</div>
								</div>
								<div class="product-item pro-v1 home1">
									<div class="product-img product-img-home3">
										<a  href=""><img src="images/img100.jpg" alt="" class="img-responsive"></a>
										<div class="sale-img shop1 shop2 st-v2">
											<div class="before shop1 v2 pro-v1 st-v2 hp1 before-home1 bf-onsales-hp1"></div>
										</div>
										<div class="ribbon zoa-hot shop-v1 v2 hp1"><span>-25%</span></div>
										<div class="product-button-group hp1 onsale-home1">
											<a href="#" class="zoa-btn zoa-quickview stwh-onsales-home1">
												<span class="fa fa-shopping-bag"></span>
											</a>
											<a href="#" class="zoa-btn zoa-wishlist stwh-onsales-home1">
												<span class="fa fa-balance-scale"></span>
											</a>
											<a href="#" class="zoa-btn zoa-addcart stwh-onsales-home1">
												<span class="fa fa-heart "></span>
											</a>
										</div>
									</div>
									<div class="sale-para2 shop-1 pro-v1 hp2-para home1">
										<p><a href="#">Fabric Plimsolls With Bow<br> Detail</a></p>
										<div class="star-icons">
											<ul>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li class="review"><a class="view" href=""><em>6 Review(s)</em></a></li>
											</ul>
										</div>
										<div class="review-hp1">
											<p>$36.00</p>
											<del>$42.00</del>
										</div>
									</div>
								</div>
								<div class="product-item pro-v1 home1">
									<div class="product-img product-img-home3">
										<a  href=""><img src="images/img46.jpg" alt="" class="img-responsive"></a>
										<div class="sale-img shop1 shop2 st-v2">
											<div class="before shop1 v2 pro-v1 st-v2 hp1 before-home1 bf-onsales-hp1"></div>
										</div>
										<div class="ribbon zoa-hot shop-v1 v2 hp1 before-home1"><span>-25%</span></div>
										<div class="product-button-group hp1 onsale-home1">
											<a href="#" class="zoa-btn zoa-quickview stwh-onsales-home1">
												<span class="fa fa-shopping-bag"></span>
											</a>
											<a href="#" class="zoa-btn zoa-wishlist stwh-onsales-home1">
												<span class="fa fa-balance-scale"></span>
											</a>
											<a href="#" class="zoa-btn zoa-addcart stwh-onsales-home1">
												<span class="fa fa-heart "></span>
											</a>
										</div>
									</div>
									<div class="sale-para2 shop-1 pro-v1 hp2-para home1">
										<p><a href="#">Animal Print Sweatshirt</a></p>
										<div class="star-icons">
											<ul>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li class="review"><a class="view" href=""><em>6 Review(s)</em></a></li>
											</ul>
										</div>
										<div class="review-hp1">
											<p>$36.00</p>
											<del>$42.00</del>
										</div>
									</div>
								</div>
								<div class="product-item pro-v1 home1">
									<div class="product-img product-img-home3">
										<a  href=""><img src="images/img62.jpg" alt="" class="img-responsive"></a>
										<div class="sale-img shop1 shop2 st-v2">
											<div class="before shop1 v2 pro-v1 st-v2 hp1 before-home1 bf-onsales-hp1"></div>
										</div>
										<div class="ribbon zoa-hot shop-v1 v2 hp1 "><span>-25%</span></div>
										<div class="product-button-group hp1 onsale-home1">
											<a href="#" class="zoa-btn zoa-quickview stwh-onsales-home1">
												<span class="fa fa-shopping-bag"></span>
											</a>
											<a href="#" class="zoa-btn zoa-wishlist stwh-onsales-home1">
												<span class="fa fa-balance-scale"></span>
											</a>
											<a href="#" class="zoa-btn zoa-addcart stwh-onsales-home1">
												<span class="fa fa-heart "></span>
											</a>
										</div>
									</div>
									<div class="sale-para2 shop-1 pro-v1 hp2-para home1">
										<p><a href="#">Animal Print Sweatshirt</a></p>
										<div class="star-icons">
											<ul>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li class="review"><a class="view" href=""><em>6 Review(s)</em></a></li>
											</ul>
										</div>
										<div class="review-hp1">
											<p>$36.00</p>
											<del>$42.00</del>
										</div>
									</div>
								</div>
								<div class="product-item pro-v1 home1">
									<div class="product-img product-img-home3">
										<a  href=""><img src="images/img63.jpg" alt="" class="img-responsive"></a>
										<div class="sale-img shop1 shop2 st-v2">
											<div class="before shop1 v2 pro-v1 st-v2 hp1 before-home1 bf-onsales-hp1"></div>
										</div>
										<div class="ribbon zoa-hot shop-v1 v2 hp1"><span>-25%</span></div>
										<div class="product-button-group hp1 onsale-home1">
											<a href="#" class="zoa-btn zoa-quickview stwh-onsales-home1">
												<span class="fa fa-shopping-bag"></span>
											</a>
											<a href="#" class="zoa-btn zoa-wishlist stwh-onsales-home1">
												<span class="fa fa-balance-scale"></span>
											</a>
											<a href="#" class="zoa-btn zoa-addcart stwh-onsales-home1">
												<span class="fa fa-heart "></span>
											</a>
										</div>
									</div>
									<div class="sale-para2 shop-1 pro-v1 hp2-para home1">
										<p><a href="#">Animal Print Sweatshirt</a></p>
										<div class="star-icons">
											<ul>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li class="review"><a class="view" href=""><em>6 Review(s)</em></a></li>
											</ul>
										</div>
										<div class="review-hp1">
											<p>$36.00</p>
											<del>$42.00</del>
										</div>
									</div>
								</div>
								<div class="product-item pro-v1 home1">
									<div class="product-img product-img-home3">
										<a  href=""><img src="images/img60.jpg" alt="" class="img-responsive"></a>
										<div class="sale-img shop1 shop2 st-v2">
											<div class="before shop1 v2 pro-v1 st-v2 hp1 before-home1 bf-onsales-hp1"></div>
										</div>
										<div class="ribbon zoa-hot shop-v1 v2 hp1"><span>-25%</span></div>
										<div class="product-button-group hp1 onsale-home1">
											<a href="#" class="zoa-btn zoa-quickview stwh-onsales-home1">
												<span class="fa fa-shopping-bag"></span>
											</a>
											<a href="#" class="zoa-btn zoa-wishlist stwh-onsales-home1">
												<span class="fa fa-balance-scale"></span>
											</a>
											<a href="#" class="zoa-btn zoa-addcart stwh-onsales-home1">
												<span class="fa fa-heart "></span>
											</a>
										</div>
									</div>
									<div class="sale-para2 shop-1 pro-v1 hp2-para home1">
										<p><a href="#">Animal Print Sweatshirt</a></p>
										<div class="star-icons">
											<ul>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li class="review"><a class="view" href=""><em>6 Review(s)</em></a></li>
											</ul>
										</div>
										<div class="review-hp1">
											<p>$36.00</p>
											<del>$42.00</del>
										</div>
									</div>
								</div>
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
									<a href=""><img class="img-home-1" src="images/img86.jpg" alt="img"></a>
								</div>
								<div class="img-title2 v2 v3">
									<div class="kid-all v2 v3 hp1">
										<div class="para blog-v2 v3 para-blog-hp3">
											<h4>
												<a href="#">Our Kindergarten Anniversarty</a>
											</h4>
											<div class="img-title2 blog-v2 v3 hp1">
												<a href="#"><img src="images/img4.png" alt="img"></a>
												<p><em>Pixel Creative</em></p>
											</div>
											<div class="img-title3 v2 v3 hp1">
												<a href="#"><i class="fa fa-calendar" aria-hidden="true"></i></a>
												<p><em>Jan 30, 2018</em></p>
											</div>
											<div class="para2 v2 v3 hp1">
												<p>The perfect class for your child with the best staff and best teachers...</p>
											</div>
											<div class="icon v2 v3 hp1">
												<a href="#"><i class="fa fa-comments" aria-hidden="true"></i></a>
												<p><em>123 Comments</em></p>
											</div>
											<div class="icon v2 v3 hp1">
												<a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a>
												<p><em>98 likes</em></p>
											</div>
											<div class="read v2 v3 read-hp2 read-home1">
												<p><em><a href="#">read more</a></em></p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="blog-v3 blog-home1">
								<div class="img-blog-v2 v3 home1 img-blog-home1">
									<a href=""><img class="img-home-1" src="images/img87.jpg" alt="img"></a>
								</div>
								<div class="img-title2 v2 v3">
									<div class="kid-all v2 v3 hp1">
										<div class="para blog-v2 v3 para-blog-hp3">
											<h4>
												<a href="#">Our Kindergarten Anniversarty</a>
											</h4>
											<div class="img-title2 blog-v2 v3 hp1">
												<a href="#"><img src="images/img4.png" alt="img"></a>
												<p><em>Pixel Creative</em></p>
											</div>
											<div class="img-title3 v2 v3 hp1">
												<a href="#"><i class="fa fa-calendar" aria-hidden="true"></i></a>
												<p><em>Jan 30, 2018</em></p>
											</div>
											<div class="para2 v2 v3 hp1 hp1">
												<p>The perfect class for your child with the best staff and best teachers...</p>
											</div>
											<div class="icon v2 v3 hp1">
												<a href="#"><i class="fa fa-comments" aria-hidden="true"></i></a>
												<p><em>123 Comments</em></p>
											</div>
											<div class="icon v2 v3 hp1">
												<a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a>
												<p><em>98 likes</em></p>
											</div>
											<div class="read v2 v3 read-hp2 read-home1">
												<p><em><a href="#">read more</a></em></p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div><hr>
		</section>
			<!-- footer -->
			<footer>
				<div class="footers">
					<div class="container">
						<div class="one">
							<div class="row">
								<div class="col-md-4 col-sm-4 col-xs-12">
									<div class="logo-para" align="center">
										<img src="images/logo.png" alt="logo" style="width:150px; margin-top:30px; position: relative;">
										<p style="text-align: justify; position:relative; margin-top: -20px;">
											Rental mainan anak adalah solusi yang hemat dan praktis bagi orang tua yang ingin memberikan keseruan bermain untuk anak-anak mereka tanpa harus membeli mainan yang mahal. Dengan rental mainan, anak-anak dapat mencoba beragam jenis mainan dan menemukan hobi baru tanpa harus mengeluarkan banyak biaya.
										</p>
									</div>
								</div>
								<!-- footer-left -->
								<div class="col-md-4 col-sm-4 col-xs-12 fix ">
									<div class="ft-center">
										<div class="information">
											<h4>Information</h4>
											<div class="border2"></div>
											<a href="#">Tentang Kami</a>
											<br>
											<a href="#">Order</a>
											<br>
											<a href="#">Kontak</a>
											<br>
											<a href="#">Blog</a>
											<br>
											<a href="#">Testimoni</a>
											<br>
										</div>
										<div class="information center">
											<div style="margin-top:80px;">
											<a href="https://wa.me/6281910429293"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="11" style="color: #999999;"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/></svg> 081910429293</a>
											<br>
											<a href="https://www.instagram.com/alfath_rentoys/"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="11" style="color: #999999;"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg> alfath_rentoys</a>
											<br>
											<a href="https://www.tiktok.com/@alfath_rentoys"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="11" style="color: #999999;"><path d="M448,209.91a210.06,210.06,0,0,1-122.77-39.25V349.38A162.55,162.55,0,1,1,185,188.31V278.2a74.62,74.62,0,1,0,52.23,71.18V0l88,0a121.18,121.18,0,0,0,1.86,22.17h0A122.18,122.18,0,0,0,381,102.39a121.43,121.43,0,0,0,67,20.14Z"/></svg> alfath_rentoys</a>
											<br>
											<a href="https://id-id.facebook.com/pandu.dwiyan/"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="13"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"/></svg> alfath rentoys</a>
											<br>
											<a href="https://twitter.com/AlfathRentoys"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="13">><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"/></svg> alfathrentoys</a>
											<br>
											</div>
										</div>
									</div>
								</div>
								<!-- footer center -->
								<div class="col-md-4 col-sm-4 col-xs-12 right">
									<div class="Instagram">
										<h4>Map</h4>
										<div class="border2"></div>
									</div>
									<div>
										<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15863.08549027912!2d106.21000500000001!3d-6.293749000000001!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e4219b6edf2b623%3A0x6d9be03612b4fb3a!2sJl.%20Gardu%20Nyomplong%2C%20Jagabaya%2C%20Kec.%20Warunggunung%2C%20Kabupaten%20Lebak%2C%20Banten%2042352%2C%20Indonesia!5e0!3m2!1sen!2sus!4v1674469365903!5m2!1sen!2sus" width="370" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
									</div>
									<!-- footer right -->
								</div>
								
							</div>
						</div>
						<div class="border"></div>
					</div>
				</div>
				
				<!-- footer-ending -->
				<div class="footerending" style="margin-top: -15px;">
					<div class="container">
						<div class="row" >
							<div class="col-md-12 col-sm-12 col-xs-12" style="text-align: center;">
								<div class="fted-left">
									<span>
									Copyright © 2023 by
									<a href="#">babyalfath.com </a>
									All Rights Reserved.</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</footer>
			<a href="#" class="zoa-btn scroll_top"><i class="ion-ios-arrow-up"></i></a>
			<script src="https://use.fortawesome.com/349cfdf6.js"></script>
			<script src="js/jquery.js"></script>
			<script src="js/bootstrap.min.js"></script>
			<script src="js/owl.carousel.min.js"></script>
			<script src="js/slick.min.js"></script>
			<script src="js/countdown.js"></script>
			<script src="js/main.js"></script>
			<script>
				$(document).ready(function() {
					$('.owl-carousel').owlCarousel({
						loop: true,
						margin: 10,
						nav: true,
						autoplay: false,
						autoplayTimeout: 3000,
						responsive: {
							0: {
								items: 1
							},
							480: {
								items: 1
							},
							1014: {
								items: 1
							},
							1200: {
								items: 1
							},
							1600: {
								items: 1
							}
						}
					});

				});
			</script>
			
		</body>

		</html>