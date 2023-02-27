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
	<div style="position: relative;">
		<header id="header" class="header-v2">
			<?php include 'part/cart.php'; ?>
			<?php include 'part/info.php'; ?>
			<?php include 'part/menu.php'; ?>
		</header>
		
		<section>
			<?php include 'part/snk.php'; ?>
		</section>
		
		<footer>
			<?php include 'part/footer.php'; ?>				
		</footer>

		<script src="https://use.fortawesome.com/349cfdf6.js"></script>
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/countdown.js"></script>
		<script src="js/main.js"></script>
		<script>
			$(document).ready(function() 
			{
				$('.owl-carousel').owlCarousel(
				{
					loop: true,
					margin: 10,
					nav: true,
					autoplay: false,
					autoplayTimeout: 3000,
					responsive: 
					{
						0: { items: 1 },
						480: { items: 1 },
						1014: { items: 1 },
						1200: { items: 1 },
						1600: { items: 1 }
					}
				});

			});
		</script>
	</div>
	</body>
</html>