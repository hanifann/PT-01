<?php

require '/opt/lampp/htdocs/PT-01/Admin_Toko/editfun.php';
require '/opt/lampp/htdocs/PT-01/header/header.php';

global $connBarang;
$x = $_SESSION['username'];
$quer = "SELECT * FROM tb_toko WHERE id_user=(SELECT id FROM user WHERE username='$x')";
$result = mysqli_query($connBarang,$quer);
while ($row = mysqli_fetch_array($result)) {
  $_SESSION['ntok']= $row[2];
  $_SESSION['atok']= $row[3];
  $_SESSION['slotok']= $row[4];
  $_SESSION['destok']=$row[5];
}

if(isset($_COOKIE["login"])){
    if($_COOKIE["login"] == "ok"){
        $_SESSION["login"] = true;
    }
}

if (isset($_POST['simpan'])) {
  if (getimagesize($_FILES['img_toko']['tmp_name']) == false) {
    echo "image bang";
  }else {
    $image = addslashes($_FILES['img_toko']['tmp_name']);
    $name = addslashes($_FILES['img_toko']['name']);
    $image = file_get_contents($image);
    $image = base64_encode($image);
  edit_toko($_POST,$image,$name);
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
        <div id="edit_toko">
        <ul class="list-group list-group-horizontal-sm mb-3" style="border-radius:none;">
          <li class="list-group-item flex-fill no_border" style="border-bottom:2px solid #3FC0B7;"><a id="info" href="#">Informasi</a></li>
          <li class="list-group-item flex-fill no_border" id="etalase"><a href="#">Etalase</a></li>
          <li class="list-group-item flex-fill no_border" id="pengiriman"><a href="#">Pengiriman</a></li>
          <li class="list-group-item flex-fill no_border" id="punggulan"><a href="#">Produk Unggulan</a></li>
        </ul>
        <div id="infot" class="">

        <h6 id="" class="pb-4">Informasi Toko</h6>
        <form  method="post" enctype="multipart/form-data" style="font-size:15px;">
          <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Nama Toko</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="staticEmail" placeholder="<?= $_SESSION['ntok'] ?>" name="ntoko" value="<?= $_SESSION['ntok'] ?>">
            </div>
          </div>
          <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Alamat Toko</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="staticEmail" placeholder="<?= $_SESSION['atok'] ?>" name="atoko" value="<?= $_SESSION['atok'] ?>">
            </div>
          </div>
          <div class="form-group row">
            <label for="slogan" class="col-sm-2 col-form-label">Slogan</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="slogan" maxlength="48" name="slogan" placeholder="<?= $_SESSION['slotok'] ?>" value="<?= $_SESSION['slotok'] ?>">
              <small id="passwordHelpBlock" class="form-text text-muted text-right">
                Maksimum 48 karakter
              </small>
            </div>
          </div>
          <div class="form-group row">
            <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
            <div class="col-sm-10">
              <textarea class="form-control" id="deskripsi" maxlength="148" name="deskripsi" placeholder="<?= $_SESSION['destok'] ?>" value="<?= $_SESSION['destok'] ?>"></textarea>
              <small id="deskripsi" class="form-text text-muted text-right">
                Maksimum 148 karakter
              </small>
            </div>
          </div>
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
                    <label for="img_toko" class="btn btn-outline-secondary col-4" style="border:1px solid #E0E0E0;border-radius:0;">
                      Browse
                    </label>
                       <input id="img_toko" type="file" hidden enctype="multipart/form-data" name="img_toko">
                  </li>
                </ul>
              </div>
            </div>
          <div class="form-group row">
            <div class="col-sm-2"></div>
            <div class="col-sm-10">
              <input type="submit" class="btn btn-sm btn-info" name="simpan" value="Simpan"></input>
            </div>
          </div>
          <input type="hidden" name="hidtoko" value="ok">
        </form>
      </div>
      </div>
      </div>
    </div>
    <script type="text/javascript">

      $(document).on("click","#info",function() {
        $("#edit_toko").load("edit_toko.php #edit_toko");
      });


      $(document).on("click","#etalase",function() {
        $("#edit_toko").load("etalase_toko.php #etalaset");
      });

      $(document).on("click","#pengiriman",function() {
        $("#edit_toko").load("pengiriman.php #pengirimant");
      });

      $(document).on("click","#punggulan",function() {
        $("#edit_toko").load("unggulan.php #punggulan");
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
