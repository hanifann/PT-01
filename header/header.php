<?php
require_once '/opt/lampp/htdocs/PT-01/register/conpik.php';



?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <title>KebunKu</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script
  src="https://code.jquery.com/jquery-3.4.0.js"
  integrity="sha256-DYZMCC8HTC+QDr5QNaIcfR7VSPtcISykd+6eSmBW5qo="
  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <meta charset="utf-8">
  <link rel="stylesheet" href="main.css">
  <link rel="stylesheet" href="/PT-01/Admin_Toko/admin_toko.css">
</head>


  <body>

    <!-- navbar -->
    <div class="header border-bottom border-info sticky-top">
    <nav class="navbar navbar-expand-lg navbar-light d-flex justify-content-center" style="background:#f7f7f7;height:4rem">
      <a class="nav-link" href="#">Jual Beli</a>
      <a class="nav-link" href="/PT-01/main/tutorial.php">Tutorial</a>
    <form class="col-5 form-inline needs-validation" method="post" action="/PT-01/cari/cari.php" >



      <input id="validationCustom01" class="form-control gagal col" type="text" placeholder="Search" name="cari" required>


      <button class="btn btn-success gagal" style="background:#EDEDED" type="submit" nama="caribang" value="submit" id="carisadja"> <img src="/PT-01/Admin_Toko/asset/magnifier.png" alt=""> </button>

    </form>
    <p>
  <button class="btn btn-light ml-2" style="margin-top:15px;" type="button" data-toggle="collapse" data-target="#filter" aria-expanded="false" aria-controls="collapseExample">
    <img src="/PT-01/header/asset/filter.png" alt="">
    Filter
  </button>
</p>
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
          <a class="dropdown-item" href="../Admin_Toko/tunggu.php">Lacak Pesanan</a>
          <a class="dropdown-item" href="#">Profile Toko</a>
          <a class="dropdown-item" href="/PT-01/materi/logut.php">Keluar</a>
        </div>
</div>

        <?php
      }
        ?>
    </nav>
    <div class="collapse" id="filter">
      <div class="card card-body">
        <form class="" action="/PT-01/cari/cari.php" method="get">
          <div class="form-row">
            <div class="col">
              <label for="katefori">Kategori</label>
              <select id="kategori" name="katbarang" class="form-control">
                <option  value="">Pilih Kategori</option>
                <option>Pupuk</option>
                <option>Alat-alat pertanian</option>
                <option>Bibit</option>
                <option>Sewakan Alat</option>
                <option>Hasil Pertanian</option>
              </select>
            </div>
            <div class="col">
              <label for="Kondisi">Kondisi Barang</label>
              <select id="Kondisi" name="konbarang" class="form-control">
                <option value="" >Pilih Kondisi</option>
                <option>Baru</option>
                <option>Bekas</option>
              </select>
            </div>
            <div class="col-2">
              <h5 class="col">Harga Minimum </h5> <h5 class="col"> <input type="text" id="textInput" name="Hmin" value="0" disabled style="border:none;background:none;"> </h5>
              <input id="harga" min="0" value="0" name="Hmin" max="100000000" step="10000" type="range" class="form-control" placeholder="Zip" onchange="updateTextInput(this.value);">
            </div>
            <div class="col-2">
              <h5 class="col">Harga Maksimum </h5> <h5 class="col"> <input type="text" id="textInput2" name="Hmax" value="0" disabled style="border:none;background:none;"> </h5>
              <input id="harga2" min="" value="10000"  name="Hmax" max="100000000" step="10000" type="range" class="form-control" placeholder="Zip" onchange="updateTextInput2(this.value);">
            </div>
            <div class="col mt-2">
              <br>
              <input  type="submit" value="filter" name="filter" class="btn btn-success form-control">
            </div>
          </div>
        </form>
      </div>
    </div>
    <!--end of navbar 1-->
  </div>
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
<button type="button" class="btn btn-outline-light nav-link" style="background:none; border:none;" data-toggle="modal" data-target="#exampleModalLong">
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
        <a href="/PT-01/login/login.php"><button type="button" class="btn btn-secondary">Login</button></a>
        <a href="/PT-01/register/register.php"><button type="button" class="btn btn-primary">Daftar</button></a>
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
<script type="text/javascript">

function updateTextInput(x) {
          document.getElementById('harga2').min=x;
          document.getElementById('textInput').value=x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
        }

function updateTextInput2(x) {
          document.getElementById('textInput2').value=x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
        }

</script>
<!-- Make something Powerful?? -->
<!-- bacot kau bang -->
