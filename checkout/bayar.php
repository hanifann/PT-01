<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="bayar.css">
  </head>
  <body>
    <!--Navbar 1-->
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
       echo "<a class='nav-link' href='/PT-01/login/login.php'>Login </a>";
     }else{

       echo " Selamat Datang <a class='nav-link dropdown' href='/PT-01/materi/logut.php'> hanifan</a>";
     }
       ?>
   </nav>
   <!--end of navbar 1-->
   <!--navbar 2-->
   <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#3FC0B7;">
     <a class="navbar-brand" href="/PT-01/main/main.php">Home</a>
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
           <a class="nav-link" href="/PT-01/barang/barang.php"><i class="fas fa-shopping-bag"> &nbsp;</i>Buat Lapak</a>
         </li>
       </ul>
     </div>
   </nav>
   <!--end of navbar 2-->
   <div class="container">

   </div>
  </body>
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
</html>
