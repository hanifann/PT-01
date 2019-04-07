<?php
require_once '/opt/lampp/htdocs/PT-01/register/conpik.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <title>KebunKu</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <meta charset="utf-8">
  <link rel="stylesheet" href="main.css">
</head>


  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light d-flex justify-content-center">
      <a class="nav-link" href="#">Jual Beli</a>
      <a class="nav-link" href="/PT-01/turorial/tutorial.php">Tutorial</a>
      <div class="input-group md-form form-sm form-2 pl-0 w-50  ">
      <input class="form-control my-0 py-1 lime-border" type="text" placeholder="Search" aria-label="Search">
      <div class="input-group-append">
        <span class="input-group-text lime lighten-2" id="basic-text1"><i class="fas fa-search text-grey"
            aria-hidden="true"></i></span>
      </div>
      </div>
      <div class="" style="border-right:#d2d2d2 solid 1px">

        <a class="btn btn-light" style="background:none; border:none;" data-toggle="tooltip" data-placement="bottom" title="Keranjang"    href="/PT-01/keranjang/cart.php" id="navbarDropdown" role="button">
          <img src="/PT-01/header/asset/vegetables.png" class="img-thumbnail rounded-circle"  alt="">
        </a>
      </div>
        <?php
        if(!isset($_SESSION['login'])){
        echo "<a class='nav-link' href='/PT-01/login/login.php'>Login </a>";
      }else {
        ?>
        <div class="dropdown" >
          <button type="button" class="btn btn-light rounded-circle" name="button"  id="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background:none; border:none;">

          <img class="img-thumbnail rounded-circle"
           id="dropdownMenuButton" data-toggle="tooltip" data-placement="bottom" title="profil"  src="/PT-01/header/asset/farmer.png" alt="">
         </button>
          <div class="dropdown-menu" style="background:#Fdff5; color:#6E6E6E;" aria-labelledby="dropdownMenuButton">
            <img src="/PT-01/header/asset/up.png" alt="" style="position:absolute; margin-top:-26px; margin-left:20px;">
          <a class="dropdown-item dropdown-link" href="/PT-01/Admin_Toko/admin_toko.php">
          <div class="" style="color:#7A7A78;">Halo</div>
          <b style="font-size:15pt;">
            <?= $_SESSION['username']; ?>
          </b>
          </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="/PT-01/Admin_Toko/tunggu.php">Lacak Pesanan</a>
          <a class="dropdown-item" href="#">Something else here</a>
          <a class="dropdown-item" href="/PT-01/materi/logut.php">Keluar</a>
        </div>
</div>

        <?php
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
            <?php if (!isset($_SESSION['login'])) {
              belumlogin();
            }else{
              sudahlogin();
            }
            ?>
          </button>
        </li>
      </ul>
    </div>
  </nav>

  <!-- end of navbar -->

  </body>

</html>

<?php function belumlogin(){?>
<!-- Button trigger modal -->
<button type="button" class="btn btn-outline-light nav-link" style="border:none;background:none;" data-toggle="modal" data-target="#exampleModalLong">
  <i class="fas fa-shopping-bag"> &nbsp;</i>Buat Lapak
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Anda belum login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Silahkan login atau daftar
      </div>
      <div class="modal-footer">
        <a href="/PT-01/login/login.php" type="button" class="btn btn-secondary">Login</a>
        <a href="/PT-01/register/register.php" type="button" class="btn btn-primary">Daftar</a>
      </div>
    </div>
  </div>
</div>
<?php
}
?>

<?php
function sudahlogin(){?>
              <a href="/PT-01/barang/barang.php"><button type="button" style="background:none; border:none;" class="btn btn-outline-light nav-link"><i class="fas fa-shopping-bag"> &nbsp;</i>Buat Lapak</button></a>
<?php
}
?>
