<?php require_once '/opt/lampp/htdocs/PT-01/register/conpik.php';
      require '/opt/lampp/htdocs/PT-01/header/header.php';

 ?>


    <link rel="stylesheet" href="cart.css">
  </head>

  <body>
  <!-- end of navbar-->
  <div class="container mt-3">
    <h5 style="color:#6E6E6E;">Keranjang</h5>
    <?php
    global $connBarang;
    $queryk = "SELECT * FROM keranjang";
    $resultk = mysqli_query($connBarang,$queryk);

    if (mysqli_num_rows($resultk)) {
    ada();
  }else if(mysqli_num_rows($resultk)==0){
    if (isset($_GET['tambah'])) {
      ada();
    }else{
      kosong();
    }
  }


    function ada(){
        keranjang();
        ?>
        <form class="" action="/PT-01/checkout/checkout.php" method="get">

        <button type="submit" class="btn btn-success "name="bsemua" value="ok">Bayar Semua</button>
      </form>
        <?php
    }

        function kosong(){

      ?>

      <div class="row">

      <div class="container col-6">
      <img class="col mb-5" src="zero.png" alt="">
      <h4 class="text-monospace text-center">Keranjang Kosong</h4>
      <a href="" class="col btn btn-success" name="button">Tambah Barang</a>
      </div>
      </div>
      <?php

    }


  ?>

  </div>
</body>
<footer id="myFooter">
      <div class="kaki mt-5">
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
