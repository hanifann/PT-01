<?php
require_once '/opt/lampp/htdocs/PT-01/register/conpik.php';
require '/opt/lampp/htdocs/PT-01/header/header.php';
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
  <link rel="stylesheet" href="barang.css">
  </head>
  <body>

    <!-- Header -->

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
              <button type="submit" class="btn btn-primary btn-lg btn-block" style="background:#3FC0B7;" name="jual_barang">Jual Barang</button>
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
