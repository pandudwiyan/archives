<?php
include "setting/setup.php";
include "setting/koneksi.php";
include "setting/simple_html_dom.php";

//DEKLARATOR
$menu = "Tentang Kami";
$sub_menu = "Tentang Kami";
?>

<html lang="en">
  <head>
      <title><?= $tab_tittle; ?></title>
      <?php include 'ext/head.php'; ?>
  </head>

  <body onload="startTime()">
      <div id="wrap">


          <!---------- [ BAG HEADER ] ------------->
          <header class="">
              <div class="container">

                  <!-- LOGO -->
                  <?php include 'ext/logo.php'; ?>

                  <!-- NAV BAR -->
                  <?php include "ext/nav.php" ?>
                
              </div>
          </header>

          <!----------- [ BAG CONTENT ] ------------>
          <div class="content">
              
              <!-- SERVICES -->
              <?php include 'page/isi_about.php'; ?>

          </div>

          <!----------- [ BAG FOOTER ] ------------->
          <footer>
              <div class="container">

              <!-- Footer -->
              <?php include 'ext/footer.php'; ?>

              </div>

              <!-- Copyright -->
              <?php include 'ext/copyright.php'; ?>

          </footer>


      </div>

      <?php include 'ext/javascript.php'; ?>      
  </body>
</html>