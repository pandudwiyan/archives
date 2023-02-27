<?php
include '../setting/koneksi.php';
include '../setting/deklarasi.php';

if (isset($_POST['id_produk'])) 
{	
	$lihat_keranjang = "SELECT * FROM keranjang where id_keranjang = '$ip'";
	$excute_lk = mysqli_query($conn, $lihat_keranjang);	
	$q_update = "UPDATE `keranjang` SET `id_produk`='' WHERE `id_keranjang`='$ip'";
	$update = mysqli_query($conn, $q_update);
}
?>