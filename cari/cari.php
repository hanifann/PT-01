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
    <link rel="stylesheet" href="cari.css">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col mt-4 pt-2 pb-2" style="color:white;background:#3FC0B7;">
          Menampilkan produk untuk

        </div>
      </div>
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
            <li><img src="/PT-01/main/img/facebook.png"</src></li>
            <li><img src="/PT-01/main/img/twitter.png"</src></li>
            <li><img src="/PT-01/main/img/instagram.png"</src></li>
            <li><img src="/PT-01/main/img/youtube.png"</src></li>
          </ul>
        </div>
    </footer>
</html>
