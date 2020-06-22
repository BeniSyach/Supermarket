<?php
    require 'connection.php';
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Super Market</title>
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
            <br><br><br>
           <div class="container">
                <div class="row">
                    <div class="col-xs-6 col-xs-offset-3">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3>Masuk</h3>
                            </div>
                            <div class="panel-body">
                                <p>Masuk Untuk Berbelanja</p>
                                <form method="post" action="login_submit.php">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="password" placeholder="kata sandi(min. 6 karakter)" pattern=".{6,}">
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" value="Masuk" class="btn btn-primary">
                                    </div>
                                </form>
                            </div>
                            <div class="panel-footer">Tidak Ada Akun !!! <a href="signup.php">Daftar</a></div>
                             <div class="panel-footer">Lupa Kata Sandi Anda !!! <a href="reset.php">Lupa Kata Sandi</a></div>
                        </div>
                    </div>
                </div>
           </div>
           <br><br><br><br><br>
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
