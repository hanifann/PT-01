<?php
require_once '/opt/lampp/htdocs/PT-01/register/conpik.php';
require '/opt/lampp/htdocs/PT-01/header/header.php';

if(isset($_COOKIE["login"])){
    if($_COOKIE["login"] == "ok"){
        $_SESSION["login"] = true;
    }
}

?>
  <body>

<!--image-slider-->
<div class="" id="carr">

</div>
<div class="col-6 container-fluid">

  <div class="carousel slide" style="padding-top:1rem;"data-ride="carousel" id="MagicCarousel">
    <ol class="carousel-indicators">
      <li data-target="#MagicCarousel" data-slide-to="0" active></li>
      <li data-target="#MagicCarousel" data-slide-to="2"></li>
      <li data-target="#MagicCarousel" data-slide-to="3"></li>
      <li data-target="#MagicCarousel" data-slide-to="4"></li>
    </ol>
    <div class="carousel-inner" role="listbox">


      <div class="carousel-item active">

        <img class="d-block w-80 d-flex justify-content-center img-fluid" src="img/generic-banner.jpg" alt="First Slide">
          <div class="carousel-caption">
          <h3></h3>
          <p></p>
        </div>
        </div>

        <div class="carousel-item">
          <img class="d-block w-80 img-fluid" src="img/special-offer-banner.jpg" alt="Second Slide">
          <div class="carousel-caption">
            <h3></h3>
            <p></p>
          </div>
          </div>

          <div class="carousel-item">
            <img class="d-block w-80 img-fluid" src="img/rsz_untitled.jpg" alt="3th Slide">
            <div class="carousel-caption">
              <h3></h3>
              <p></p>
            </div>
            </div>

            <div class="carousel-item">
              <img class="d-block w-80 img-fluid" src="img/vegi.jpg" alt="4th Slide">
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
    </div>
      <!-- end of sewa alat-->
      <!-- <script type="text/javascript">
      $(document).ready(function(){
          $("#coba").load("main.php #coba");
        });
      });
      </script> -->
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
