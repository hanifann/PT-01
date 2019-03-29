<?php
require_once '/opt/lampp/htdocs/PT-01/register/conpik.php';
if(isset($_COOKIE["login"])){
    if($_COOKIE["login"] == "ok"){
        $_SESSION["login"] = true;
    }
}

if (isset($_POST["jual_barang"])) {
  if (getimagesize($_FILES['poto_barang']['tmp_name']) == false) {
    echo "image bang";
  }else {
    $image = addslashes($_FILES['poto_barang']['tmp_name']);
    $name = addslashes($_FILES['poto_barang']['name']);
    $image = file_get_contents($image);
    $image = base64_encode($image);
    $nama_barang = $_POST['nama_barang'];
    $kondisi_barang = $_POST['kondisi_barang'];
    $kategori_barang = $_POST['kategori_barang'];
    $alamat_barang = $_POST['alamat_barang'];
    $harga_barang = $_POST['harga_barang'];
    $jml_barang = $_POST['jml_barang'];
    $deskripsi_barang = $_POST['deskripsi_barang'];
    saveimages($name,$image,$nama_barang, $kondisi_barang, $kategori_barang, $alamat_barang,
      $harga_barang, $jml_barang, $deskripsi_barang);
  }
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Jual Barang</title>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <link rel="stylesheet" href="barang.css">
  </head>
  <body>

    <!-- Header -->

    <nav class="navbar navbar-expand-lg navbar-light d-flex justify-content-center">
      <a class="nav-link" href="#">Jual Beli</a>
      <a class="nav-link" href="#">Tutorial</a>
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
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
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
          <a class="nav-link" href="#"><i class="fas fa-shopping-bag"> &nbsp;</i>Buat Lapak</a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- form  -->

    <div class="container" style="background: #ffffff; border: 1px solid #E0E0E0; margin-top:1rem; padding-bottom:2rem;">
      <div class="kategori">Detail Informasi Produk</div>
      <div class="kategori2">
        Cantumkan informasi produk yang akan dijaul
      </div>



        <div class="container" style="background:#ffffff; border:solid 1px #1DA89F; padding-bottom:1rem;">

          <!-- awal form -->
        <form class="" enctype="multipart/form-data" method="post">
          <div class="form-row">

            <!-- nama_barang -->
            <div class="form-group col-md-4">
              <label for="nama_produk">Nama Produk</label>
              <input type="text" class="form-control" id="nama_produk" placeholder="Nama Produk" name="nama_barang">
            </div>

            <!-- kondisi_barang -->
            <div class="form-group col-md-4">
              <label for="Kondisi">Kondisi Barang</label>
              <select id="Kondisi" name="kondisi_barang" class="form-control">
                <option selected>Pilih Kategori</option>
                <option>Baru</option>
                <option>Bekas</option>
              </select>
            </div>
          </div>

          <!-- kategori_barang -->
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="katefori">Kategori</label>
              <select id="kategori" name="kategori_barang" class="form-control">
                <option selected>Pilih Kategori</option>
                <option>Pupuk</option>
                <option>Alat-alat pertanian</option>
                <option>Bibit</option>
                <option>Sewakan Alat</option>
                <option>Hasil Pertanian</option>
              </select>
            </div>

            <!-- alamat_barang -->
            <div class="form-group col-md-6">
              <label for="alamat">Alamat</label>
              <input type="text" class="form-control" id="alamat" placeholder="Alamat " name="alamat_barang">
            </div>
          </div>

          <!-- harga_barang -->
          <div class="form-row">
              <div class="col-md-4 mb-3">
                <label for="harga">Harga Barang</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="harga">Rp</span>
                  </div>
                  <input type="text" class="form-control" id="harga" placeholder="Harga" aria-describedby="inputGroupPrepend3" name="harga_barang" required>
                 </div>
               </div>

               <!-- jml_barang -->
               <div class="form-group col-md-4">
                 <label for="jml_barang">Jumlah Barang</label>
                 <input type="text" class="form-control" id="jml_barang" placeholder="Jumlah Barang" name="jml_barang">
               </div>
             </div>

             <!-- deskripsi_barang -->
                <div class="mb-3">
                  <label for="deskripsi_barang">Deskripsi Barang</label>
                  <textarea class="form-control" rows="10" id="deskripsi_barang" placeholder="Deskripsi Barang" name="deskripsi_barang"></textarea>
                  <div class="invalid-feedback">
                    Please enter a message in the textarea.
                  </div>
                </div>

                <!-- foto_produk -->
                <div class="form-group">
                  <label for="foto_produk">Foto Produk</label>
                  <input type="file" class="form-control-file" id="foto_produk" name="poto_barang">
                </div>
           </div>

           <!-- button jual_barang -->
          </div>
          <div class="container" style="background: #ffffff; border: 1px solid #E0E0E0; margin-top:1rem;">
            <a href="/PT-01/Admin_Toko/admin_toko.php">
              <button  "type="submit" class="btn btn-primary btn-lg btn-block" style="background:#3FC0B7;" name="jual_barang">Jual Barang</button>
            </a>
            <hr>
          </div>

          <!-- akhir form -->
        </form>

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
  </body>
</html>
