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
     <link rel="stylesheet" href="kategori.css">

   </head>
   <body>
     <nav class="navbar navbar-expand-lg navbar-light d-flex justify-content-center">
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
         <?php
         if(!isset($_SESSION['login'])){
         echo "<a class='nav-link' href='/login/login.php'>Login </a>";
       }else{

         echo " Selamat Datang <a class='nav-link dropdown' href='/materi/logut.php'> hanifan</a>";
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
   <div class="container pt-3">
     <img src="coba.png" alt="">

   </div>
     <div class="container">
       <div class="row col">
           <div class="col">
           </div>
         </div>
         <hr>

         <div class="row mt-5">

         <div class="col md-4 overflow-hidden mt-3">
           <div class="card" style="width: 15rem;">
             <img src="/PT-01/main/img/data3.jpg" class="card-img-top" style="border-bottom:1px solid #E5E5E5;" alt="...">
             <div class="card-body">
               <h5 class="card-title">Traktor Versatile</h5>
               <p><i class="fas fa-store-alt"></i> Toko Traktor</p>
               <div class="harga">
                 Rp. 30.000.000/Bulan
               </div>
             </div>
           </div>
       </div>

       <div class="col md-4 overflow-hidden mt-3">
         <div class="card" style="width: 15rem;">
           <img src="/PT-01/main/img/data3.jpg" class="card-img-top" style="border-bottom:1px solid #E5E5E5;" alt="...">
           <div class="card-body">
             <h5 class="card-title">Traktor Versatile</h5>
             <p><i class="fas fa-store-alt"></i> Toko Traktor</p>
             <div class="harga">
               Rp. 30.000.000/Bulan
             </div>
           </div>
         </div>
     </div>

     <div class="col md-4 overflow-hidden mt-3">
       <div class="card" style="width: 15rem;">
         <img src="/PT-01/main/img/data3.jpg" class="card-img-top" style="border-bottom:1px solid #E5E5E5;" alt="...">
         <div class="card-body">
           <h5 class="card-title">Traktor Versatile</h5>
           <p><i class="fas fa-store-alt"></i> Toko Traktor</p>
           <div class="harga">
             Rp. 30.000.000/Bulan
           </div>
         </div>
       </div>
   </div>

   <div class="col md-4 overflow-hidden mt-3">
     <div class="card" style="width: 15rem;">
       <img src="/PT-01/main/img/data3.jpg" class="card-img-top" style="border-bottom:1px solid #E5E5E5;" alt="...">
       <div class="card-body">
         <h5 class="card-title">Traktor Versatile</h5>
         <p><i class="fas fa-store-alt"></i> Toko Traktor</p>
         <div class="harga">
           Rp. 30.000.000/Bulan
         </div>
       </div>
     </div>
 </div>

 <div class="col md-4 overflow-hidden mt-3">
   <div class="card" style="width: 15rem;">
     <img src="/PT-01/main/img/data3.jpg" class="card-img-top" style="border-bottom:1px solid #E5E5E5;" alt="...">
     <div class="card-body">
       <h5 class="card-title">Traktor Versatile</h5>
       <p><i class="fas fa-store-alt"></i> Toko Traktor</p>
       <div class="harga">
         Rp. 30.000.000/Bulan
       </div>
     </div>
   </div>
</div>

<div class="col md-4 overflow-hidden mt-3">
  <div class="card" style="width: 15rem;">
    <img src="/PT-01/main/img/data3.jpg" class="card-img-top" style="border-bottom:1px solid #E5E5E5;" alt="...">
    <div class="card-body">
      <h5 class="card-title">Traktor Versatile</h5>
      <p><i class="fas fa-store-alt"></i> Toko Traktor</p>
      <div class="harga">
        Rp. 30.000.000/Bulan
      </div>
    </div>
  </div>
</div>

<div class="col md-4 overflow-hidden mt-3">
  <div class="card" style="width: 15rem;">
    <img src="/PT-01/main/img/data3.jpg" class="card-img-top" style="border-bottom:1px solid #E5E5E5;" alt="...">
    <div class="card-body">
      <h5 class="card-title">Traktor Versatile</h5>
      <p><i class="fas fa-store-alt"></i> Toko Traktor</p>
      <div class="harga">
        Rp. 30.000.000/Bulan
      </div>
    </div>
  </div>
</div>

<div class="col md-4 overflow-hidden mt-3">
  <div class="card" style="width: 15rem;">
    <img src="/PT-01/main/img/data3.jpg" class="card-img-top" style="border-bottom:1px solid #E5E5E5;" alt="...">
    <div class="card-body">
      <h5 class="card-title">Traktor Versatile</h5>
      <p><i class="fas fa-store-alt"></i> Toko Traktor</p>
      <div class="harga">
        Rp. 30.000.000/Bulan
      </div>
    </div>
  </div>
</div>

<div class="col md-4 overflow-hidden mt-3">
  <div class="card" style="width: 15rem;">
    <img src="/PT-01/main/img/data3.jpg" class="card-img-top" style="border-bottom:1px solid #E5E5E5;" alt="...">
    <div class="card-body">
      <h5 class="card-title">Traktor Versatile</h5>
      <p><i class="fas fa-store-alt"></i> Toko Traktor</p>
      <div class="harga">
        Rp. 30.000.000/Bulan
      </div>
    </div>
  </div>
</div>

<div class="col md-4 overflow-hidden mt-3">
  <div class="card" style="width: 15rem;">
    <img src="/PT-01/main/img/data3.jpg" class="card-img-top" style="border-bottom:1px solid #E5E5E5;" alt="...">
    <div class="card-body">
      <h5 class="card-title">Traktor Versatile</h5>
      <p><i class="fas fa-store-alt"></i> Toko Traktor</p>
      <div class="harga">
        Rp. 30.000.000/Bulan
      </div>
    </div>
  </div>
</div>


<div class="col md-4 overflow-hidden mt-3">
  <div class="card" style="width: 15rem;">
    <img src="/PT-01/main/img/data3.jpg" class="card-img-top" style="border-bottom:1px solid #E5E5E5;" alt="...">
    <div class="card-body">
      <h5 class="card-title">Traktor Versatile</h5>
      <p><i class="fas fa-store-alt"></i> Toko Traktor</p>
      <div class="harga">
        Rp. 30.000.000/Bulan
      </div>
    </div>
  </div>
</div>



<div class="col md-4 overflow-hidden mt-3">
  <div class="card" style="width: 15rem;">
    <img src="/PT-01/main/img/data3.jpg" class="card-img-top" style="border-bottom:1px solid #E5E5E5;" alt="...">
    <div class="card-body">
      <h5 class="card-title">Traktor Versatile</h5>
      <p><i class="fas fa-store-alt"></i> Toko Traktor</p>
      <div class="harga">
        Rp. 30.000.000/Bulan
      </div>
    </div>
  </div>
</div>
</div>


</div>
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
          <li><a href="#"><img src="/PT-01/main/img/facebook.png"</src></a></li>
          <li><a href="#"><img src="/PT-01/main/img/twitter.png"</src></a></li>
          <li><a href="#"><img src="/PT-01/main/img/instagram.png"</src></a></li>
          <li><a href="#"><img src="/PT-01/main/img/youtube.png"</src></a></li>
        </ul>
      </div>
  </footer>

   </body>
 </html>
