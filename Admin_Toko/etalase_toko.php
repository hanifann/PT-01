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
      <div class="container border pt-2 pb-3" style="background:#ffffff;" id="etalase">
        <ul class="list-group list-group-horizontal-sm mb-3" style="border-radius:none;">
          <li class="list-group-item flex-fill no_border"><a href="#">Informasi</a></li>
          <li class="list-group-item flex-fill no_border" style="border-bottom:2px solid #3FC0B7;"><a href="#">Etalase</a></li>
          <li class="list-group-item flex-fill no_border"><a href="#">Pengiriman</a></li>
          <li class="list-group-item flex-fill no_border"><a href="#">Produk Unggulan</a></li>
        </ul>
        <div class="row">
          <div class="col-6">
            <h6 style="color:#4C4C4C;">Daftar Etalase Saya</h6>
            <small style="color:#909090">Lihat Etalase di <a style="color:#3FC0B7;" href="admin_toko.php">Halaman Toko</a></small>
          </div>
          <div class="col-6">
            <button type="button" class="btn btn-info float-right mt-1" name="button" data-toggle="modal" data-target="#myModal"><img src="asset/add.png" alt=""> Tambah Etalase</button>
          </div>
        </div>
        <ul class="list-group pt-4" style="color:#606060;">
          <li class="list-group-item" style="background:#F8F8F8;"><img src="asset/laci.png" alt="">Jumlah Etalase</li>
          <li class="list-group-item">Semua etalase<br>
          <small style="font-size:10px;">Total Produk: </small></li>
          <li class="list-group-item">Produk Terjual<br>
          <small style="font-size:10px;">Total Produk: </small></li>
        </ul>

      </div>
    </div>
    <!-- The Modal -->
    <div class="modal fade" id="myModal">
      <div class="modal-dialog">
        <div class="modal-content">

          <!-- Modal Header -->
          <div class="text-center mt-4" style="border:none;">
            <h6 style="color:#515151;">Tambah Etalase</h6>
          </div>

          <!-- Modal body -->
          <div class="modal-body" style="border:none;">
            <form>
              <div class="form-group">
                <label for="exampleInputEmail1" style="font-size:13px;">Nama Etalase</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Tulis Nama Etalase">
              </div>
            </form>
          </div>

          <!-- Modal footer -->
          <div class="modal-footer" style="border:none;">
            <button type="button" class="btn btn-light col-6" style="border: 1px solid #E0E0E0;border-radius:0;" data-dismiss="modal">Batal</button>
            <button type="button" class="btn btn-info col-6" style="border-radius:0;" name="button">Simpan</button>
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
