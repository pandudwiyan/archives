<?php 
/*
 * SETTING CLIENT     
 * -----------------------
 * Source by Pandudwiyan 
 */


//ALL ABOUT PERUSAHAAN
$nama_perusahaan = "Kizstone Sport";
$alamat_perusahaan = "Banjar, Kec. Banjar, Kota Banjar, Jawa Barat 46311";
$tlp_perusahaan = "(0265) 741092";
$email_perusahaan = "emailperusahaan@gmail.com";
$desc_1 = "Jika temen-temen ingin menghubungi kami, maka berikut beberapa informasi kontak dari kami yang dapat dihubungi.";
$desc_2 =  $nama_perusahaan." adalah perusahaan yang bergerak dibidang fashion. Seiring dengan perkembangan dimana orang memliki fashion yang berbeda, maka perusahaan kami berinisiatif memunculkan fashion yang terupdate. Dan menawarkan pada keunggulan produk dari segi kualitas barang sehingga menambah nilai pelanggan.";

//ALL ABOUT LINK
$default_link = "http://localhost/kizstone_new/";
$logo = $default_link."/img/banner4.png";
$banner = $default_link."/img/banner3.png";
$link_gmap ="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3189.135823581872!2d108.51748721411528!3d-7.376820874651234!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f61f82d43704f%3A0x5d7a3c3339fbc813!2sKejaksaan%20Negeri%20Kota%20Banjar!5e1!3m2!1sid!2sid!4v1656933921173!5m2!1sid!2sid";
$link_thumbnail = $default_link."admin/ajax/uploads/";

//ALL ABOUT ME
$nama_author = "Pandudwiyan";
$link_author = "https://www.instagram.com/pandudwiyan";

//ALL ABOUT TIME
date_default_timezone_set('Asia/Jakarta');
$hari_ini = date("Y-m-d");
$sekarang_bgt = date("Y-m-d h:i:s");

//CREATOR
$ido = date("dm").substr(uniqid(),2,6)

?>
