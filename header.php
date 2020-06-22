<nav class="navbar navbar-inverse navabar-fixed-top">
               <div class="container">
                   <div class="navbar-header">
                       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                       </button>
                       <a href="index.php" class="navbar-brand">BFN BAKERY</a>
                   </div>
                   
                   <div class="collapse navbar-collapse" id="myNavbar">
                       <ul class="nav navbar-nav navbar-left">
                           <?php
                           if(isset($_SESSION['email'])){
                           ?>
                           <br>
                           <br>
                           <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Belanja</a></li>
                           <li><a href="settings.php"><span class="glyphicon glyphicon-cog"></span> Ubah Kata Sandi</a></li>
                           <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                           <?php
                           }else{
                            ?>
                            <br>
                            <br>
                            <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Daftar</a></li>
                           <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Masuk</a></li>
                           <li><a href="products.php"><span class="glyphicon glyphicon-shopping-cart"></span> Data Produk</a></li>
                           <li><a href="products.php"><span class="glyphicon glyphicon-question-sign"></span> Kritik/Saran</a></li>
                           <?php
                           }
                           ?>
                           
                       </ul>
                   </div>
               </div>
</nav>