
<?php
   include 'setting/setting_client.php'; 
   include 'setting/koneksi.php';
   include 'setting/dw_function.php';

   if (isset($_POST['nama'])) 
   {
     $ip = getip();

     $query_client = mysqli_query($koneksi,"SELECT * FROM `t_client` WHERE `ip`='$ip'");
     $data_cart = mysqli_fetch_assoc($query_client);

     if ($cek = mysqli_num_rows($query_client)==0) 
     {
         header('location: '.$default_link);
     }
     else
    {
     $id_order = $ido;
     $tgl_order = $sekarang_bgt;
     $nama_order = $_POST['nama'];
     $tlp_order = $_POST['tlp'];
     $email = $_POST['email'];
     $alamat = $_POST['alamat'];

     $id_product = explode(",",$data_cart['id_product']);
     $size = explode(",",$data_cart['size']);
     $quantity = explode(",",$data_cart['quantity']);
     $price = array();

        //search price
        $x = count($id_product);
        for ($i=0; $i < $x ; $i++) 
        { 
            $query_product = mysqli_query($koneksi,"SELECT * FROM `t_product` WHERE `id`='$id_product[$i]';");
            $detail_product = mysqli_fetch_assoc($query_product);

            if ($detail_product['current_price']!=0) 
            {
                $Harga = $detail_product['current_price'];
            }
            else
            {
                $Harga = $detail_product['price'];
            }

            $price[] = $quantity[$i]*$Harga;            
        }
      
     $id_product2 =  $data_cart['id_product'];
     $size2 = $data_cart['size'];
     $quantity2 = $data_cart['quantity'];

     $price2=implode(",",$price);
     $status = "pending";

     $timestamp=strtotime("+7 Days");
     $tgl_exp =  date('Y-m-d H:i:s', $timestamp);

     $query_insert_order = mysqli_query($koneksi,"INSERT INTO `t_order`(`id`, `tgl_order`, `nama`, `no_tlp`, `email`, `alamat`, `id_product`, `size`, `quantity`, `price`, `status`, `tgl_exp`) VALUES ('$id_order', '$tgl_order', '$nama_order', '$tlp_order', '$email', '$alamat', '$id_product2', '$size2', '$quantity2', '$price2', '$status', '$tgl_exp')");

     $query_del_cart = mysqli_query($koneksi,"DELETE FROM `t_client` WHERE `ip`='$ip'");
     }
   }
?>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $nama_perusahaan ?></title>
    <!-- Favicons -->
    <link rel="shortcut icon" href="assets2/images/favicon.png">
</head>
<link href="assets3/css/bootstrap.min.css" rel="stylesheet" type="text/css">

<div class="page-content-wrapper" style="padding: 50px;">

                        <div class="container-fluid">
                            <!-- end row -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="card m-b-30">
                                        <div class="card-body">
            
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="invoice-title">
                                                        <h4 style="float: right; padding-top: 30px;"><strong>Order ID #<?=  strtoupper($id_order)?></strong></h4>
                                                        <h3 class="m-t-0">
                                                            <a href="<?= $default_link; ?>"><img src="<?= $logo ?>" alt="Site Logo" style="height: 60px;" /></a>
                                                        </h3>
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <address>
                                                                <strong>Customer:</strong><br>
                                                                <?= $nama_order ?><br>
                                                                <?= $email ?>r<br>
                                                                <?= $tlp_order ?><br>
                                                                <?= $alamat ?>
                                                            </address>
                                                        </div>
                                                        <div class="col-6 m-t-30 text-right">
                                                            <address>
                                                                <strong>Order Date:</strong><br>
                                                                <?= date('l , d M Y', strtotime($tgl_order));  ?><br><br>
                                                            </address>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6 m-t-30">
                                                            <address>
                                                                <strong>Payment Method:</strong><br>
                                                                Bayar langsung di toko.
                                                            </address>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
            
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="panel panel-default">
                                                        <div class="p-2">
                                                            <h3 class="panel-title font-20"><strong>Order summary</strong></h3>
                                                        </div>
                                                        <div class="">
                                                            <div class="table-responsive">
                                                                <table class="table">
                                                                    <thead>
                                                                    <tr>
                                                                        <td><strong>Item</strong></td>
                                                                        <td class="text-center"><strong>Price</strong></td>
                                                                        <td class="text-center"><strong>Size</strong></td>
                                                                        <td class="text-center"><strong>Quantity</strong>
                                                                        </td>
                                                                        <td class="text-right"><strong>Totals</strong></td>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <!-- foreach ($order->lineItems as $line) or some such thing here -->
                                                                    <?php 
                                                                        $x = count($id_product);
                                                                        for ($i=0; $i < $x ; $i++) 
                                                                        { 
                                                                          $query_product = mysqli_query($koneksi,"SELECT * FROM `t_product` WHERE `id`='$id_product[$i]';");
                                                                          $detail_product = mysqli_fetch_assoc($query_product);
                                                                            ?>
                                                                            <tr>
                                                                                <td><?= $detail_product['nama']; ?></td>
                                                                                <?php 
                                                                                    if ($detail_product['current_price']!=0) 
                                                                                    {
                                                                                        $Harga = $detail_product['current_price'];
                                                                                    }
                                                                                    else
                                                                                    {
                                                                                        $Harga = $detail_product['price'];
                                                                                    }
                                                                                ?>
                                                                                <td class="text-center"><?= "Rp. ".number_format($Harga,0,",","."); ?></td>
                                                                                <td class="text-center"><?= strtoupper($size[$i]); ?></td>
                                                                                <td class="text-center"><?= $quantity[$i]; ?></td>
                                                                                <td class="text-right"><?= "Rp. ".number_format($price[$i],0,",","."); ?></td>
                                                                            </tr>
                                                                        <?php } ?>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td style="text-align: right;"><b>Total</b></td>
                                                                                <td style="text-align: right;"><b><?= "Rp. ".number_format(array_sum($price),0,",","."); ?></b></td>
                                                                            </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <div class="d-print-none mo-mt-2">
                                                                <div class="float-right">
                                                                    <a href="<?= $default_link ?>" class="btn btn-secondary waves-effect waves-light">kembali</a>
                                                                    <a href="javascript:window.print()" class="btn btn-info waves-effect waves-light">Print</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
            
                                                </div>
                                            </div> <!-- end row -->
            
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->
                
                        </div><!-- container fluid -->

                    </div>