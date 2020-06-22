<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>BFN BAKERY</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <div>
           <?php
            require 'header.php';
           ?>
           <div id="bannerImage">
               <div class="container">
                   <center>
                   <div id="bannerContent">
                       <h1>Kami menjual Berbagai Kebutuhan.</h1>
                       <p> Diskon 50 % atau lebih Tinggi.</p>
                       <a href="products.php" class="btn btn-danger">Beli Sekarang</a>
                   </div>
                   </center>
               </div>
           </div>
           <div class="container">
               <div class="row">
                   <div class="col-xs-4">
                       <div  class="thumbnail">
                           <a href="products.php">
                                <img src="img/makanan_minuman.jpg" alt="makanan_minuman">
                           </a>
                           <center>
                                <div class="caption">
                                        <p id="autoResize">Makanan Dan Minuman</p>
                                        <p>Kami Menjual Makanan Dan Minuman Khas Medan Sumatera Utara</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/kantor.jpg" alt="kantor">
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize">Peralatan Kantor</p>
                                    <p>Kami Menjual Peralatan Kantor Yang Lengkap</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/rumah_tangga.jpeg" alt="rumah_tangga">
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize">Peralatan Rumah Tangga</p>
                                   <p>Kami Menjual Juga Peralatan Rumah Tangga Disini</p>
                               </div>
                           </center>
                       </div>
                   </div>
               </div>
           </div>
            <br><br> <br><br><br><br>
           <footer class="footer"> 
               <div class="container">
               <center>
                   <p>Copyright &copy SuperMarket. All Rights Reserved. | kontak Kami +62 822 7775 7717 (beni)</p>
                   <p>ini WebSite Saya</p>
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>