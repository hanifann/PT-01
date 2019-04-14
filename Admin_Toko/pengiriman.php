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
      <h6 class="pb-3 pt-3"><img src="asset/shop.png" alt=""> &nbsp;Nama_Tokonya_Bang</h6>
      <div id="pengirimant">
        <ul class="list-group list-group-horizontal-sm mb-3" style="border-radius:none;">
          <li class="list-group-item flex-fill no_border" id="info"><a href="#">Informasi</a></li>
          <li class="list-group-item flex-fill no_border" id="etalase"><a href="#">Etalase</a></li>
          <li class="list-group-item flex-fill no_border" style="border-bottom:2px solid #3FC0B7;"><a href="#">Pengiriman</a></li>
          <li class="list-group-item flex-fill no_border" id="punggulan"><a href="#">Produk Unggulan</a></li>
        </ul>
        <h6 class="pt-5">Informasi Pengiriman Wilayah Asal</h6>
          <div class="row justify-content-md-center pb-5">
            <div class="col col-lg-6">
              <form class="form-group" style="color:#757575;" method="post">
                <div class="form-group">
                  <label for="kota">Kota Asal</label>
                  <input type="text" class="form-control" id="kota" placeholder="Kota asal">
                </div>
                <div class="form-group">
                  <label for="pos">Kode Pos</label>
                  <input type="number" class="form-control" id="pos" placeholder="kode pos">
                </div>
              </form>
            </div>
          </div>
        <hr>
        <h6>Layanan Jasa Pengiriman</h6>
      <div class="row justify-content-center">
        <div class="col md-4 overflow-hidden">
          <div class="card" style="width: 15rem;">
            <img src="asset/j&T.png" class="card-img-top img-thumbnail" style="border-bottom:1px solid #E5E5E5;" alt="...">
              <div class="card-body" style="height:10rem;">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="defaultUnchecked">
                  <label class="custom-control-label" for="defaultUnchecked">J&T REG</label>
                </div>
              </div>
            </div>
          </div>
          <div class="col md-4 overflow-hidden">
            <div class="card" style="width: 15rem;">
              <img src="asset/j&T.png" class="card-img-top img-thumbnail" style="border-bottom:1px solid #E5E5E5;" alt="...">
                <div class="card-body" style="height:10rem;">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="defaultUnchecked">
                    <label class="custom-control-label" for="defaultUnchecked">J&T REG</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="col md-4 overflow-hidden">
              <div class="card" style="width: 15rem;">
                <img src="asset/j&T.png" class="card-img-top img-thumbnail" style="border-bottom:1px solid #E5E5E5;" alt="...">
                  <div class="card-body" style="height:10rem;">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="defaultUnchecked">
                      <label class="custom-control-label" for="defaultUnchecked">J&T REG</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col md-4 overflow-hidden">
                <div class="card" style="width: 15rem;">
                  <img src="asset/j&T.png" class="card-img-top img-thumbnail" style="border-bottom:1px solid #E5E5E5;" alt="...">
                    <div class="card-body" style="height:10rem;">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="defaultUnchecked">
                        <label class="custom-control-label" for="defaultUnchecked">J&T REG</label>
                      </div>
                    </div>
                  </div>
                </div>
        </div>
      </div>
    </div>
    <script type="text/javascript">
    $(document).on("click","#info",function() {
      $("#edit_toko").load("edit_toko.php #edit_toko");
    });

      $(document).on("click","#etalase",function() {
        $("#pengirimant").load("etalase.php #etalaset");
      });

      $(document).on("click","#punggulan",function() {
        $("#pengirimant").load("unggulan.php #punggulan");
      });
    </script>
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
