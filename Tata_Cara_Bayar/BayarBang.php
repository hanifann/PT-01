<?php
require_once '/opt/lampp/htdocs/PT-01/register/conpik.php';

if(isset($_COOKIE["login"])){
    if($_COOKIE["login"] == "ok"){
        $_SESSION["login"] = true;
    }
}

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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
  integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
  crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <meta charset="utf-8">
    <link rel="stylesheet" href="BayarBang.css">
    <script>
      $(document).ready(function(){
        $("#bni").click(function(){
          $("#tabelBayar").load("bni.php");
        });
      });
      $(document).ready(function(){
        $("#bri").click(function(){
          $("#tabelBayar").load("bri.php");
        });
      });
      $(document).ready(function(){
        $("#bca").click(function(){
          $("#tabelBayar").load("bca.php");
        });
      });
      $(document).ready(function(){
        $("#mandiri").click(function(){
          $("#tabelBayar").load("mandiri.php");
        });
      });
      $(document).ready(function(){
        $("#hana").click(function(){
          $("#tabelBayar").load("hana.php");
        });
      });
      $(document).ready(function(){
        $("#maybank").click(function(){
          $("#tabelBayar").load("maybank.php");
        });
      });
      </script>
  </head>

  <body>
    <!--Navbar 1-->
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
        <a class="nav-link dropdown-toggle dropdown" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Our Partner
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
        <?php
        if(!isset($_SESSION['login'])){
        echo "<a class='nav-link' href='/PT-01/login/login.php'>Login </a>";
      }else{
        $getUser = tampilkan();
        $tampil = mysqli_fetch_assoc($getUser);
        echo "Selamat Datang <a class='nav-link dropdown' href='/PT-01/materi/logut.php'>".$tampil['username']."</a>";
      }
        ?>
    </nav>
    <!--end of navbar 1-->
    <!--navbar 2-->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#3FC0B7;">
    <a class="navbar-brand" href="../main.php">Home</a>
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
          <a class="nav-link" href="/PT-01/barang/barang.php"><i class="fas fa-shopping-bag"> &nbsp;</i>Buat Lapak</a>
        </li>
      </ul>
    </div>
  </nav>
  <!--end of navbar 2-->

<!-- PANEL -->
<div class="container border mt-3">
  <h5 class="text-center mt-4">Total Pembelian</h5>
  <h5 class="text-center" style="color:#FF7300;">Rp. 500.000</h5>
  <table id="tabelBayar" class="table table-hover">
    <tbody>
      <tr>
        <td>
          <div class="row">
            <div class="col-md-auto">
              <img style="width:50%;" src="bni.png" alt="">
            </div>
            <div class="col mt-1">
              <h7>BNI</h7>
            </div>
            <div class="col-lg-1">
              <button style="border:none;background:none;" id="bni" name="button">
                <img src="arrow.png" alt="">
              </button>
            </div>
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <div class="row">
            <div class="col-md-auto">
              <img style="width:50%;" src="bri.png" alt="">
            </div>
            <div class="col mt-1">
              <h7>BRI</h7>
            </div>
            <div class="col-lg-1">
              <button style="border:none;background:none;" id="bri" name="button">
                <img src="arrow.png" alt="">
              </button>
            </div>
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <div class="row">
            <div class="col-md-auto">
              <img style="width: 61.5px" src="bca.png" class="img-fluid" alt="">
            </div>
            <div class="col mt-1 ml-3">
              <h7 class="ml-5">BCA</h7>
            </div>
            <div class="col-lg-1">
              <button style="border:none;background:none;" id="bca" name="button">
                <img src="arrow.png" alt="">
              </button>
            </div>
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <div class="row">
            <div class="col-md-auto">
              <img style="width:50%;" src="mandiri.png" alt="">
            </div>
            <div class="col mt-1">
              <h7>Mandiri</h7>
            </div>
            <div class="col-lg-1">
              <button style="border:none;background:none;" id="mandiri" name="button">
                <img src="arrow.png" alt="">
              </button>
            </div>
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <div class="row">
            <div class="col-md-auto">
              <img style="width: 61.5px" src="hana.png" class="img-fluid" alt="">
            </div>
            <div class="col mt-1 ml-3">
              <h7 class="ml-5">Hana bank</h7>
            </div>
            <div class="col-lg-1">
              <button style="border:none;background:none;" id="hana" name="button">
                <img src="arrow.png" alt="">
              </button>
            </div>
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <div class="row">
            <div class="col-md-auto">
              <img style="width: 61.5px" src="maybank.png" class="img-fluid" alt="">
            </div>
            <div class="col mt-1 ml-3">
              <h7 class="ml-5">Maybank</h7>
            </div>
            <div class="col-lg-1">
              <button style="border:none;background:none;" type="maybank" name="button">
                <img src="arrow.png" alt="">
              </button>
            </div>
          </div>
          <hr>
        </td>
      </tr>
    </tbody>
  </table>
</div>
</body>
