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

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
  integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
  crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <meta charset="utf-8">
    <link rel="stylesheet" href="main.css">
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
    <a class="navbar-brand" href="main.php">Home</a>
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

<!--image-slider-->
<div class="container col-7">

  <div class="carousel slide" style="padding-top:1rem;"data-ride="carousel" id="MagicCarousel">
    <ol class="carousel-indicators">
      <li data-target="#MagicCarousel" data-slide-to="0" active></li>
      <li data-target="#MagicCarousel" data-slide-to="2"></li>
      <li data-target="#MagicCarousel" data-slide-to="3"></li>
      <li data-target="#MagicCarousel" data-slide-to="4"></li>
    </ol>
    <div class="carousel-inner" role="listbox">


      <div class="carousel-item active">

        <img class="d-block w-80 d-flex justify-content-center" src="img/generic-banner.jpg" alt="First Slide">
          <div class="carousel-caption">
          <h3></h3>
          <p></p>
        </div>
        </div>

        <div class="carousel-item">
          <img class="d-block w-80" src="img/special-offer-banner.jpg" alt="Second Slide">
          <div class="carousel-caption">
            <h3></h3>
            <p></p>
          </div>
          </div>

          <div class="carousel-item">


            <img class="d-block w-80" src="img/rsz_untitled.jpg" alt="3th Slide">
            <div class="carousel-caption">
              <h3></h3>
              <p></p>
            </div>
            </div>

                <a class="carousel-control-prev" href="#MagicCarousel" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon"></span>
                  <span class="sr-only">Previous</span>
                </a>

                <a class="carousel-control-next" href="#MagicCarousel" role="button" data-slide="next">
                  <span class="carousel-control-next-icon"></span>
                  <span class="sr-only">Next</span>
                </a>
      </div>
    </div>
  </div>
  <!-- end of image slider-->
  <!--kategori-->
  <div class="laku">
    <h6><i class="fas fa-bars"></i>&nbsp; Kategori<hr></h6>
  </div>
  <div class="container col-md-7">
    <div class="row text-center">
      <div class="col">
        <a href="/PT-01/kategori/kategori.php"><img src="kategory/tractor.png" alt="" class="img-thumbnail"></a>
        <p></p>
      </div>
      <div class="col">
        <img src="kategory/bin.png" alt="" class="img-thumbnail">
        <p></p>
      </div>
      <div class="w-60">
      </div>

      <div class="col">
        <img src="kategory/duck.png" alt="" class="img-thumbnail">
        <p></p>
      </div>
      <div class="col">
        <img src="kategory/eggs.png" alt="" class="img-thumbnail">
        <p></p>
      </div>
      <div class="w-60">
      </div>

      <div class="col">
        <img src="kategory/farmer.png" alt="" class="img-thumbnail">
        <p></p>
      </div>
      <div class="col">
        <img src="kategory/field.png" alt="" class="img-thumbnail">
        <p></p>
      </div>

      <div class="w-60">
      </div>

      <div class="col">
        <img src="kategory/fruits.png" alt="" class="img-thumbnail">
        <p></p>
      </div>
      <div class="col">
        <img src="kategory/glove.png" alt="" class="img-thumbnail">
        <p></p>
      </div>
      <div class="w-60">
      </div>

      <div class="col">
        <img src="kategory/greenhouse.png" alt="" class="img-thumbnail">
        <p></p>
      </div>
      <div class="col">
        <img src="kategory/hen.png" alt="" class="img-thumbnail">
        <p></p>
      </div>
      <div class="w-60">
      </div>
    </div>
    <div class="row text-center">
      <div class="col">
        <img src="kategory/bale.png" alt="" class="img-thumbnail">
        <p></p>
      </div>
      <div class="col">
        <img src="kategory/barn.png" alt="" class="img-thumbnail">
        <p></p>
      </div>
      <div class="w-60">
      </div>

      <div class="col">
        <img src="kategory/barrel.png" alt="" class="img-thumbnail">
        <p></p>
      </div>
      <div class="col">
        <img src="kategory/bees.png" alt="" class="img-thumbnail">
        <p></p>
      </div>
      <div class="w-60">
      </div>

      <div class="col">
        <img src="kategory/billhook.png" alt="" class="img-thumbnail">
        <p></p>
      </div>
      <div class="col">
        <img src="kategory/boot.png" alt="" class="img-thumbnail">
        <p></p>
      </div>

      <div class="w-60">
      </div>

      <div class="col">
        <img src="kategory/bucket.png" alt="" class="img-thumbnail">
        <p></p>
      </div>
      <div class="col">
        <img src="kategory/chainsaw.png" alt="" class="img-thumbnail">
        <p></p>
      </div>
      <div class="w-60">
      </div>

      <div class="col">
        <img src="kategory/cow.png" alt="" class="img-thumbnail">
        <p></p>
      </div>
      <div class="col">
        <img src="kategory/digger.png" alt="" class="img-thumbnail">
        <p></p>
      </div>
      <div class="w-60">
      </div>
    </div>
  </div>
  <!-- end of category-->
  <!--paling laku-->
  <div class="laku">
    <h6><i class="fab fa-hotjar"></i> Paling Laku<hr></h6>
  </div>
    <div class="container">
      <?php
      tampil_biasa();
      ?>
      <!-- <div class="row justify-content-center">
        <a href="">
          <div class="col md-4 overflow-hidden">
            <div class="card" style="width: 15rem;">
              <img src="img/traktor.jpg" class="card-img-top" style="border-bottom:1px solid #E5E5E5;" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Traktor Yanmar</h5>
                  <p><i class="fas fa-store-alt"></i> Toko Traktor</p>
                  <div class="harga">
                    Rp. 200.000
                  </div>
                </div>
            </div>
          </div>
        </a>
        <a href="">
          <div class="col md-4 ">
            <div class="card" style="width: 15rem;">
              <img src="img/harves.png" class="card-img-top overflow-hidden" style="border-bottom:1px solid #E5E5E5;" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Harvester</h5>
                  <p><i class="fas fa-store-alt"></i> Toko Traktor</p>
                  <div class="harga">
                    Rp. 500.000
                  </div>
                </div>
            </div>
          </div>
        </a>
        <a href="/PT-01/item/items.php">
          <div class="col md-4 overflow-hidden">
            <div class="card" style="width: 14rem;">
              <img src="img/pupuksaja.jpg" class="card-img-top" style="border-bottom:1px solid #E5E5E5;" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Pupuk Urea</h5>
                  <p><i class="fas fa-store-alt"></i> Toko Bibit</p>
                  <div class="harga">
                    Rp. 5.000
                  </div>
                </div>
            </div>
          </div>
        </a>
        <a href="">
          <div class="col md-4">
            <div class="card" style="width: 15rem;">
              <img src="img/zyklon.jpg" class="card-img-top" style="border-bottom:1px solid #E5E5E5;" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Gas Anti Hama</h5>
                  <p class="card-text"><i class="fas fa-store-alt"></i> Toko gas</p>
                  <div class="harga">
                    Rp. 20.000
                  </div>
                </div>
            </div>
          </div>
        </a>
      </div> -->
    </div>
    <div class="container">
      <img class="agraris" src="Asset/Agraris.png" alt="">
    </div>
    <!--end of paling laku-->
    <!--sewa alat-->
    <div class="laku">
      <h6><i class="far fa-clock"></i> Sewa Alat Pertanian<hr></h6>
    </div>
      <div class="container">
        <div class="row justify-content-center">
          <a href="">
            <div class="col md-4 overflow-hidden">
              <div class="card" style="width: 15rem;">
                <img src="img/tucano.jpg" class="card-img-top" style="border-bottom:1px solid #E5E5E5;" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Traktor Tucano</h5>
                    <p><i class="fas fa-store-alt"></i> Toko Traktor</p>
                    <div class="harga">
                      Rp. 20.000.000/Bulan
                    </div>
                  </div>
              </div>
            </div>
          </a>
          <a href="">
            <div class="col md-4 overflow-hidden">
              <div class="card" style="width: 15rem;">
                <img src="img/rowcrop.jpg" class="card-img-top" style="border-bottom:1px solid #E5E5E5;" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Traktor Row Crop</h5>
                    <p><i class="fas fa-store-alt"></i> Toko Traktor</p>
                    <div class="harga">
                      Rp. 35.000.000/Bulan
                    </div>
                  </div>
              </div>
            </div>
          </a>
          <a href="">
            <div class="col md-4 overflow-hidden">
              <div class="card" style="width: 15rem;">
                <img src="img/seeder.jpg" class="card-img-top" style="border-bottom:1px solid #E5E5E5;" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Traktor Penyemai</h5>
                    <p><i class="fas fa-store-alt"></i> Toko Traktor</p>
                    <div class="harga">
                      Rp. 15.000.000/Bulan
                    </div>
                  </div>
              </div>
            </div>
          </a>
          <a href="">
            <div class="col md-4 overflow-hidden">
              <div class="card" style="width: 15rem;">
                <img src="img/coba.jpg" class="card-img-top" style="border-bottom:1px solid #E5E5E5;" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Traktor Versatile</h5>
                    <p><i class="fas fa-store-alt"></i> Toko Traktor</p>
                    <div class="harga">
                      Rp. 30.000.000/Bulan
                    </div>
                  </div>
              </div>
            </div>
          </a>
        </div>
      </div>
      <!-- end of sewa alat-->
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
            <li><a href="#"><img src="img/facebook.png"</src></a></li>
            <li><a href="#"><img src="img/twitter.png"</src></a></li>
            <li><a href="#"><img src="img/instagram.png"</src></a></li>
            <li><a href="#"><img src="img/youtube.png"</src></a></li>
          </ul>
        </div>
    </footer>
</html>
