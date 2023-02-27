<?php
//FUNCITION
function get_client_ip() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
        $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'IP Tidak Diketahui';
 
    return $ipaddress;
}

//DEKLARASI
$ip = get_client_ip();
$query_ip = "SELECT * FROM keranjang where id_keranjang = '$ip'";
$cek_ip = mysqli_query($conn, $query_ip);
$jumlah_guest = mysqli_num_rows($cek_ip);

if ($jumlah_guest == 0) 
{
   $query_insert = "INSERT INTO `keranjang`(`id_keranjang`) VALUES ('$ip')";
   $excute = mysqli_query($conn, $query_insert);
}


?>
