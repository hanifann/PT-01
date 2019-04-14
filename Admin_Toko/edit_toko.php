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
      <div class="container border pt-2 pb-3" style="background:#ffffff;">
        <ul class="list-group list-group-horizontal-sm mb-3" style="border-radius:none;">
          <li class="list-group-item flex-fill no_border" style="border-bottom:2px solid #3FC0B7;"><a href="#">Informasi</a></li>
          <li class="list-group-item flex-fill no_border">Etalase</li>
          <li class="list-group-item flex-fill no_border">Catatan</li>
          <li class="list-group-item flex-fill no_border">Informasi</li>
          <li class="list-group-item flex-fill no_border">Lokasi</li>
          <li class="list-group-item flex-fill no_border">Pengiriman</li>
          <li class="list-group-item flex-fill no_border">Produk Unggulan</li>
        </ul>
        <h6 class="pb-4">Informasi Toko</h6>
        <form style="font-size:15px;">
          <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Nama Toko</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="staticEmail" value="Nama_toko_ga_bisa_di_ganti_bang" disabled>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Slogan</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputPassword" maxlength="48">
              <small id="passwordHelpBlock" class="form-text text-muted text-right">
                Maksimum 48 karakter
              </small>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Deskripsi</label>
            <div class="col-sm-10">
              <textarea class="form-control" id="validationTextarea" maxlength="148"></textarea>
              <small id="passwordHelpBlock" class="form-text text-muted text-right">
                Maksimum 148 karakter
              </small>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-sm-2"></div>
            <div class="col-sm-10">
              <button type="button" class="btn btn-sm btn-info" name="simpan">Simpan</button>
            </div>
          </div>
        </form>
        <h6 class="pt-5">Gambar Toko</h6>
        <div class="row">
          <div class="col-2">
            <img class="img-thumbnail" src="asset/online-store.png" alt="">
          </div>
          <div class="col">
            <ul class="list-group" style="font-size:12px; color:#9e9e9e">
              <li class="list-group-item" style="border:none;">Besar file: maksimum 10.000.000 bytes(10mb)
                <br>Ekstensi file yang diperbolehkan:JPG, PNG, JPEG</li>
              <li class="list-group" style="border:none;">
                <label class="btn btn-outline-secondary col-4" style="border:1px solid #E0E0E0;border-radius:0;">
                    Browse <input type="file" hidden>
                </label>
              </li>
            </ul>
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