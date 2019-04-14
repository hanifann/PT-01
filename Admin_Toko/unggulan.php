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
    <link rel="stylesheet" href="edit_toko.css">
  </head>
  <body>
    <div class="container mt-4">
      <h6><img src="asset/shop.png" alt=""> &nbsp;Nama_Tokonya_Bang</h6>
      <div class="container border pt-2 pb-3" style="background:#ffffff;" id="unggulan">
        <ul class="list-group list-group-horizontal-sm mb-3" style="border-radius:none;">
          <li class="list-group-item flex-fill no_border"><a href="#">Informasi</a></li>
          <li class="list-group-item flex-fill no_border"><a href="#">Etalase</a></li>
          <li class="list-group-item flex-fill no_border"><a href="#">Pengiriman</a></li>
          <li class="list-group-item flex-fill no_border" style="border-bottom:2px solid #3FC0B7;"><a href="#">Produk Unggulan</a></li>
        </ul>
        <h6 style="color:#4C4C4C;" class="pt-3">Produk Unggulan</h6>
        <small style="color:#909090">Lihat Produk Unggulan yang telah ditampilakn di <a style="color:#3FC0B7;" href="admin_toko.php">Halaman Toko</a></small>
        <div class="container border mt-4 pt-3 pb-3">
          <div class="text-center">
            <img src="asset/unggul.png" alt="">
            <h6 style="color:#4C4C4C;">Toko anda belum memiliki produk unggulan</h6>
            <small style="color:#606060">Tampilkan 5 produk Terbaik Anda Sebagai Produk Unggulan pada Halaman Toko.</small>
          </div>
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
