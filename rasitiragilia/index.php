
<?php
include "setting/setup.php";
include "setting/koneksi.php";
include "setting/simple_html_dom.php";
?>

<html lang="en">
  <head>
      <title><?= $tab_tittle; ?></title>
      <?php include 'ext/head.php'; ?>
  </head>

  <body onload="startTime()">
      <div id="wrap">


          <!---------- [ BAG HEADER ] ------------->
          <header class="navbar-fixed-top">
              <div class="container">

                  <!-- LOGO -->
                  <?php include 'ext/logo.php'; ?>

                  <!-- NAV BAR -->
                  <?php include "ext/nav.php" ?>
                
              </div>
          </header>

          <!----------- [ BAG BANNER ] ------------>
          <div id="banner" class="full-screen">
              <div class="main-bnr">

                  <!-- BANNER -->
                  <?php include 'ext/banner.php'; ?>

              </div>
          </div>

          <!----------- [ BAG CONTENT ] ------------>
          <div class="content">
              
              <!-- SERVICES -->
              <?php include 'ext/layanan.php'; ?>

              <!-- HUBUNGI KAMI -->
              <?php include 'ext/kontak.php'; ?>

              <!-- FOUNDER -->
              <?php include 'ext/founder_z.php'; ?>

              <!-- TESTIMONI -->
              <?php include 'ext/testimoni.php'; ?>

              <!-- ARTIKEL UPDATE -->
              <?php include 'ext/artikel.php'; ?>

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