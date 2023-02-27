<?php include "setting/koneksi.php"; ?>
<?php include "setting/deklarasi.php"; ?>
<?php
$total_jml_harga = 0;

	while ($row = mysqli_fetch_assoc($cek_ip)) 
		{ $bank_produk = $row['id_produk']; }

	$jml_produk = explode(",", $bank_produk);

	for ($x=1; $x < count($jml_produk); $x++) 
		{ 
			$produk = $jml_produk[$x];
			$query_product = "SELECT * FROM `produk` WHERE `id_produk`='$produk'";
			$ex = mysqli_query($conn, $query_product);
			$data = mysqli_fetch_assoc($ex);
			$total_jml_harga = $total_jml_harga +  $data['Harga'];
		}
?>
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
			<?php include 'part/order.php'; ?>
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
		<script type="text/javascript">
			function Payment() 
			{
				var select = document.getElementById("pm");
				var select_pilihan = document.getElementById("pmc");
				var selectedOption = select.options[select.selectedIndex];
    			var folder = selectedOption.value;  
    			$("#rekeningnya").show();  			

    			if (folder == "va") 
    			{
    				select_pilihan.disabled = false;
    				select_pilihan.options.length = 0;
    				var options = ["Dana", "OVO", "Link Aja" , "gopay", "Qris", "Shopeepay"];
					for (var i = 0; i < options.length; i++) {
					    var opt = options[i];
					    var el = document.createElement("option");
					    el.textContent = opt;
					    el.value = opt;
					    select_pilihan.appendChild(el);
					}
    			} else if (folder == "bt") 
    			{	
    				select_pilihan.disabled = false;
    				select_pilihan.options.length = 0;
    				var options = ["BCA", "BRI", "BNI", "BJB","Mandiri", "Permata"];
					for (var i = 0; i < options.length; i++) {
					    var opt = options[i];
					    var el = document.createElement("option");
					    el.textContent = opt;
					    el.value = opt;
					    select_pilihan.appendChild(el);
					}
    			}
    			else if (folder == "cod") 
    			{
    				select_pilihan.disabled = true;
    				select_pilihan.options.length = 0;
    				var options = ["Tidak ada pilihan"];
					for (var i = 0; i < options.length; i++) {
					    var opt = options[i];
					    var el = document.createElement("option");
					    el.textContent = opt;
					    el.value = opt;
					    select_pilihan.appendChild(el);
					}
					
    			}

    			showreq();
			}

			function showreq() 
			{
				var select = document.getElementById("pmc");
				var select_pilihan = document.getElementById("pmc");
				var selectedOption = select.options[select.selectedIndex];
    			var folder = selectedOption.value;

    			$('#metod_bayar').text(folder);

    			if (folder == "Dana" || folder == "Shopeepay") 
    			{    				
    				$('#no_rekening').text('081910429293');

    			} else if (folder == "BJB") 
    			{    				
    				$('#no_rekening').text('0077023186100');

    			} else if (folder == "BRI") 
    			{    				
    				$('#no_rekening').text('484301056518532');

    			}else if (folder == "Tidak ada pilihan") 
    			{    				
    				$("#rekeningnya").hide();

    			} else 
    			{
    				$('#no_rekening').text('Belum tersedia');
    			}
			}

			function orderfix()
			{
				alert('Terimakasih sudah melakukan pemesanan pada situs kami.');
				sapubersih();
				
			}

			function sapubersih()
			{	
				var id = 0;

				$.ajax({
			        url: "ajax/clear.php",
			        data: {id_produk:id},
			        type: 'post',
			        dataType: 'html',
			        success: function(data) {
			        	window.location= "index.php";
			        }
			    });
			}
		</script>
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