<?php
require_once '/opt/lampp/htdocs/PT-01/register/conpik.php';
require '/opt/lampp/htdocs/PT-01/header/header.php';

if(isset($_COOKIE["login"])){
    if($_COOKIE["login"] == "ok"){
        $_SESSION["login"] = true;
    }
}

if (isset($_GET['tambah'])) {
  $tambah = $_GET['tambah'];
  keranjang($tambah);
}


?>
<body>
       <link rel="stylesheet" href="items.css">
     </head>

     <style media="screen">
       body{
         background:#f7f7f7 ;
       }
     </style>
   </head>
   <body>


   <!--end of navbar 2-->

   <!--  -->
   <div class="container bg-light">
     <div class="row">
       <div class="col-8">
         <?php
tampil_item();
?>
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
        <img class="img-thumbnail" src="/PT-01/main/img/facebook.png" alt="">
        <p style="font-size:13px;">Toko Traktor<br>
          feedback:99%<br>
          Join:10-11-2017
        </p>
      </li>
      <li class="list-group-item pl-12 mt-3" style="background:#ffffff">
        Dukungan Pengiriman<hr><br>
        <img src="/PT-01/main/img/logo JNE.png" alt=""><hr><br>
        <img src="/PT-01/main/img/pos indo.png" alt=""><hr><br>
        <img src="/PT-01/main/img/jnt.png" alt="">
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
            <img src="/PT-01/main/img/tucano.jpg" class="card-img-top" style="border-bottom:1px solid #E5E5E5;" alt="...">
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
            <img src="/PT-01/main/img/rowcrop.jpg" class="card-img-top" style="border-bottom:1px solid #E5E5E5;" alt="...">
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
            <img src="/PT-01/main/img/seeder.jpg" class="card-img-top" style="border-bottom:1px solid #E5E5E5;" alt="...">
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
            <img src="/PT-01/main/img/coba.jpg" class="card-img-top" style="border-bottom:1px solid #E5E5E5;" alt="...">
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
<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
<script src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.js"></script>
<script src="dist/js/v-minusplusfield.js" type="text/javascript"></script>

<link href="dist/css/v-minusplusfield.css" rel="stylesheet" />

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
          <li><img src="/PT-01/main/img/facebook.png"</src></li>
          <li><img src="/PT-01/main/img/twitter.png"</src></li>
          <li><img src="/PT-01/main/img/instagram.png"</src></li>
          <li><img src="/PT-01/main/img/youtube.png"</src></li>
        </ul>
      </div>
  </footer>
   </body>
   <script>
var app = new Vue({
el: '#app',
    data: {
    }
})
</script>
 </html>
