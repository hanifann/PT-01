<?php
require_once '/opt/lampp/htdocs/PT-01/register/conpik.php';

if(isset($_COOKIE["login"])){
    if($_COOKIE["login"] == "ok"){
        $_SESSION["login"] = true;
    }
}

?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
     <head>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
     integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
     crossorigin="anonymous">
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
     integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
     crossorigin="anonymous"></script>
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
       <meta charset="utf-8">
       <link rel="stylesheet" href="items.css">
     </head>

     <style media="screen">
       body{
         background:#f7f7f7 ;
       }
     </style>
   </head>
   <body>
     <nav class="navbar navbar-expand-lg navbar-light d-flex justify-content-center">
       <a class="nav-link" href="#">Forum</a>
       <a class="nav-link" href="#">Jual Beli</a>
       <a class="nav-link" href="#">Tutorial</a>
       <div class="input-group md-form form-sm form-2 pl-0 w-50  ">
       <input class="form-control my-0 py-1 lime-border" type="text" placeholder="Search" aria-label="Search">
       <div class="input-group-append">
         <span class="input-group-text lime lighten-2" id="basic-text1"><i class="fas fa-search text-grey"
             aria-hidden="true"></i></span>
       </div>
       </div>
         <a class="nav-link dropdown-toggle dropdown" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           Our Partner
         </a>
         <div class="dropdown-menu" aria-labelledby="navbarDropdown">
           <a class="dropdown-item" href="#">Action</a>
           <a class="dropdown-item" href="#">Another action</a>
           <a class="dropdown-item" href="#">Something else here</a>
         </div>
         </div>
         <?php
         if(!isset($_SESSION['login'])){
         echo "<a class='nav-link' href='/login/login.php'>Login</a>";
       }else{
         $getUser = tampilkan();
         $tampil = mysqli_fetch_assoc($getUser);
         echo "Selamat Datang <a class='nav-link dropdown' href='/materi/logut.php'>".$tampil['username']."</a>";
         }
         ?>
     </nav>
     <!--end of navbar 1-->
     <!--navbar 2-->
     <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#3FC0B7;">
     <a class="navbar-brand" href="/main/main.php">Home</a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse" id="navbarSupportedContent">
       <ul class="navbar-nav mr-auto">
         <li class="nav-item dropdown">
           <a class="nav-link dropdown-toggle dropdown" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             Kategori
           </a>
           <div class="dropdown-menu" aria-labelledby="navbarDropdown">
             <a class="dropdown-item" href="#">Alat-alat Pertanian</a>
             <a class="dropdown-item" href="#">Pupuk</a>
             <a class="dropdown-item" href="#">Bibit</a>
             <a class="dropdown-item" href="#">Sewa Alat Pertanian</a>
           </div>
         </li>
       </ul>
       <ul class="navbar-nav">
         <li class="nav-item d-flex align-items-end">
           <a class="nav-link" href="/barang/barang.php"><i class="fas fa-shopping-bag"> &nbsp;</i>Buat Lapak</a>
         </li>
       </ul>
     </div>
   </nav>
   <!--end of navbar 2-->
   <div class="container bg-light">
     <div class="row">
       <div class="col-8">
  <div class="row mt-3">
    <div class="col-6">
      <div class="card">
        <img src="/main/img/urea.jpg"class="img-fluid" alt="...">
      </div>
      <a href="/checkout/checkout.php">
        <button type="button" class="btn btn-success mt-5 col-lg-12" style="background:#FF7100;"><i class="fas fa-shopping-cart"></i>&nbsp; Beli</button>
      </a>
    </div>

    <div class="col-6">
      <h4>Traktor Biasa</h4>
      <h5 style="color:#E7362F;">Rp. 20.000.000</h5>
      <br>
      <br>
      <ul class="list-group">
      <li class="list-group-item">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </li>
      </ul>
    </div>
  </div>

<div class="row mt-5">
  <div class="col-bg-1">


      <ul class="nav nav-tabs">
        <li class="nav-item"> <a class="nav-link active" role="tab" data-toggle="tab" href="#deskripsi">Deskripsi</a> </li>
        <li class="nav-item"> <a class="nav-link" role="tab" data-toggle="tab" href="#ulasan">Ulasan</a></li>
        <li class="nav-item"> <a class="nav-link" role="tab" data-toggle="tab" href="#produk_serupa">Produk Serupa</a></li>
      </ul>

      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active ml-3 mt-2" id="deskripsi">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>

        <div role="tabpanel" class="tab-pane ml-3 mt-2" id="ulasan">
          <p> <i>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</i> </p>
        </div>

        <div role="tabpanel" class="tab-pane ml-3 mt-2" id="produk_serupa">
          <p> <b>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</b> </p>
        </div>


      </div>

    </div>


  </div>

  <!--end of col1-->
</div>

  <div class="col-3.8 ml-2">
    <ul class="list-group text-center">
      <li class="list-group-item pl-12 mt-3" style="background:#ffffff">
        <img class="img-thumbnail" src="/main/img/facebook.png" alt="">
        <p style="font-size:13px;">Toko Traktor<br>
          feedback:99%<br>
          Join:10-11-2017
        </p>
      </li>
      <li class="list-group-item pl-12 mt-3" style="background:#ffffff">
        Dukungan Pengiriman<hr><br>
        <img src="/main/img/logo JNE.png" alt=""><hr><br>
        <img src="/main/img/pos indo.png" alt=""><hr><br>
        <img src="/main/img/jnt.png" alt="">
      </li>
    </ul>
  </div>
</div>
</div>
<div class="container">
    <h5>Produk yang terkait dengan barang ini<hr></h5>
    <div class="row justify-content-center">
      <a href="">
        <div class="col md-4 overflow-hidden">
          <div class="card" style="width: 15rem;">
            <img src="/main/img/tucano.jpg" class="card-img-top" style="border-bottom:1px solid #E5E5E5;" alt="...">
              <div class="card-body">
                <h5 class="card-title">Traktor Tucano</h5>
                <p><i class="fas fa-store-alt"></i> Toko Traktor</p>
                <div class="harga">
                  Rp. 20.000.000/Bulan
                </div>
              </div>
          </div>
        </div>
      </a>
      <a href="">
        <div class="col md-4 overflow-hidden">
          <div class="card" style="width: 15rem;">
            <img src="/main/img/rowcrop.jpg" class="card-img-top" style="border-bottom:1px solid #E5E5E5;" alt="...">
              <div class="card-body">
                <h5 class="card-title">Traktor Row Crop</h5>
                <p><i class="fas fa-store-alt"></i> Toko Traktor</p>
                <div class="harga">
                  Rp. 35.000.000/Bulan
                </div>
              </div>
          </div>
        </div>
      </a>
      <a href="">
        <div class="col md-4 overflow-hidden">
          <div class="card" style="width: 15rem;">
            <img src="/main/img/seeder.jpg" class="card-img-top" style="border-bottom:1px solid #E5E5E5;" alt="...">
              <div class="card-body">
                <h5 class="card-title">Traktor Penyemai</h5>
                <p><i class="fas fa-store-alt"></i> Toko Traktor</p>
                <div class="harga">
                  Rp. 15.000.000/Bulan
                </div>
              </div>
          </div>
        </div>
      </a>
      <a href="">
        <div class="col md-4 overflow-hidden">
          <div class="card" style="width: 15rem;">
            <img src="/main/img/coba.jpg" class="card-img-top" style="border-bottom:1px solid #E5E5E5;" alt="...">
              <div class="card-body">
                <h5 class="card-title">Traktor Versatile</h5>
                <p><i class="fas fa-store-alt"></i> Toko Traktor</p>
                <div class="harga">
                  Rp. 30.000.000/Bulan
                </div>
              </div>
          </div>
        </div>
      </a>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<footer id="myFooter">
      <div class="kaki">
          <ul>
              <li><a href="#">Company Information</a></li>
              <li><a href="#">Contact us</a></li>
              <li><a href="#">Reviews</a></li>
              <li><a href="#">Terms of service</a></li>
          </ul>
      <p class="footer-copyright">© 2019 Copyright KebunKu</p>
      </div>
      <div class="kaki2 style="font-size: 0.5rem;"">
        <ul>
          <li>Follow KebunKu on</li>
          <li><img src="/main/img/facebook.png"</src></li>
          <li><img src="/main/img/twitter.png"</src></li>
          <li><img src="/main/img/instagram.png"</src></li>
          <li><img src="/main/img/youtube.png"</src></li>
        </ul>
      </div>
  </footer>


   </body>
 </html>
