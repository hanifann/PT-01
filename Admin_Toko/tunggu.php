<?php

require_once '/opt/lampp/htdocs/PT-01/register/conpik.php';
require '/opt/lampp/htdocs/PT-01/header/header.php';

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
    <link rel="stylesheet" href="tunggu.css">
  </head>
  <body>
    <div class="container border mt-4">
      <div class="container mt-2">
        <h6 style="color:#3FC0B7;">Daftar belanja</h6><hr>
      </div>
      <div class="container pt-4 pb-4 border" style="background:#F8F8F8;">
        <div class="row">
          <div class="col-sm-1">
            <img src="asset/idea.png" alt="">
          </div>
          <div class="col" style="color:#777777;">
            <p style="font-size:15px;">Pesanan akan otomatis dibatalkan jika : <br>
              <ul style="font-size:15px;">
                <li>Tidak Merespon penjual dalam 2x24 jam atau tidak dikirm dalam 2x24 jam (hari kerja)</li>
                <li>Tidak direspon penjual diatas 15.00 WIB atau tidak dikirm diatas 16.00(hari kerja)</li>
              </ul>
            </p>
          </div>
        </div>
      </div>
      <div class="container mt-3">
        <div class="row" style="color:#777777;">
          <div class="col-sm-3">
            <span class="align-middle">Filter status</span>
          </div>
          <div class="col-3">
            <a href="#" style="border-bottom:3px solid #3FC0B7;">Pesanan Diproses</a>
          </div>
          <div class="col-3">
            <a href="#" style="border-bottom:3px solid #777777;">Pesanan Dikirim</a>
          </div>
          <div class="col-3">
            <a href="#" style="border-bottom:3px solid #777777;">Pesanan Tiba</a>
          </div>
        </div>
      </div>
      <img class="mx-auto d-block mt-5" src="asset/box.png" alt="">
      <p class="text-center">Belum ada pesanan</p>
      <div class="text-center pb-4">
        <a href="/PT-01/main/main.php"><button type="button" class="btn btn-info rounded" name="button">Belanja sekarang</button></a>
      </div>
      </div>
    </div>

  </body>
  <!-- Footer -->
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
</html>
