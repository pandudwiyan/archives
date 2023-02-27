<?php
include '../setting/koneksi.php';
include '../setting/deklarasi.php';

if (isset($_POST['id_produk'])) 
{	
	$idp = $_POST['id_produk'];
	$lihat_keranjang = "SELECT * FROM keranjang where id_keranjang = '$ip'";
	$excute_lk = mysqli_query($conn, $lihat_keranjang);

	while ($row = mysqli_fetch_assoc($excute_lk)) 
	{
    	$keranjang_guest = $row['id_produk'];
	}

	$keranjang_guest = "".$keranjang_guest.",".$idp;
	
	$q_update = "UPDATE `keranjang` SET `id_produk`='$keranjang_guest' WHERE `id_keranjang`='$ip'";
	$update = mysqli_query($conn, $q_update);

	$total = explode(",", $keranjang_guest);
	echo count($total)-1;
}
?>