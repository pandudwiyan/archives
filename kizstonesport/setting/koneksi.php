<?php 
$host = "localhost";
$username = "root";
$password = "";
$db_name = "kizstone_sport";


$koneksi = mysqli_connect($host,$username,$password,$db_name);
if (!$koneksi) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
