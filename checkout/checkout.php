<?php
require_once '/opt/lampp/htdocs/PT-01/register/conpik.php';

if(isset($_COOKIE["login"])){
    if($_COOKIE["login"] == "ok"){
        $_SESSION["login"] = true;
    }
}

if(isset($_POST["Alamat"])){
  alamat_jual($_POST);
}

?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
  integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
  crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <meta charset="utf-8">
    <link rel="stylesheet" href="checkout.css">
    <script type="text/javascript">

    function beli(){
    swal({
       title: "Berhasil Beli Barang",
       icon: "success",
       button: "Kembali!"
       });
     }
     function hapus(){
     swal({
        title: "Apakah Anda Yakin?",
        text: "Untuk Mehghapus barang",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          swal("Barang berhasil dihapus", {
            icon: "success",
          });
        }
      });
     }
     $(document).ready(function(){
       $("button").click(function(){
         $("#div1").load("demo_test.txt");
       });
     });
     $(document).ready(function(){
        $('[data-toggle="popover"]').popover();
    });
    </script>
   </head>
   <body>
     <!--Navbar 1-->
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
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
        <?php
        if(!isset($_SESSION['login'])){
        echo "<a class='nav-link' href='/PT-01/login/login.php'>Login </a>";
      }else{

        echo " Selamat Datang <a class='nav-link dropdown' href='/PT-01/materi/logut.php'> hanifan</a>";
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
          <a class="nav-link" href="/PT-01/barang/barang.php"><i class="fas fa-shopping-bag"> &nbsp;</i>Buat Lapak</a>
        </li>
      </ul>
    </div>
  </nav>
     <div class="container mt-3">
       <div class="laku">
        <h6><i class="fas fa-money-bill"></i>&nbsp; Checkout<hr></h6>
      </div>

       <div class="row">
         <div class="col-8">

           <ul class="list-group">
             <li class="list-group-item">

               <div class="container">
                 <div class="row">
                   <div class="col">
                     <p>Barang</p><hr>
                     <img src="/PT-01/main/img/urea.jpg" class="img-fluid" alt="">
                   </div>

                   <div class="col-5">
                     <p>Deskripsi</p><hr>
                     <div class="container">
                       <h5>Pupuk Urea</h5>
                       <p>Kualitas Super</p>
                     </div>
                   </div>

                   <div class="col">
                     <p>Harga</p><hr>
                     <div class="text-center">
                       <h6 style="color:#d50000">Rp 500.000</h6>
                       <button type="button" onclick="hapus()" onclick="pindah()" name="button" class="btn btn-danger">Hapus</button>

                     </div>
                   </div>
                 </div>
               </div>

               <hr>
               <div class="row">
                 <div class="col-8">
                   <h5>Subtotal</h5>
                 </div>

                 <div class="col-3 ml-5">
                   <h6 style="color:#d50000"><b>Rp 500.000</b></h6>
                 </div>
               </div>

               </ul>
           </ul>

         </div>


<!--Aside-->
         <div class="col-4">
           <div class="container border rounded pt-3 pb-3" style="background:#ffffff;">
             <p>Ringkasan Belanja</p><hr>
             <p>Total Barang : (30 Barang)</p>
             <p style="color:#d50000">Rp 500.000</p>
             <div class="form-row">
              <div class="form-group col-md-12">
                <label for="katefori">Pilih Durasi Pengiriman</label>
                <select id="kategori" name="kategori_barang" class="form-control">
                  <option selected>Pilih Durasi</option>
                  <option>Express (1-2 hari)</option>
                  <option>Regular (2-4 hari)</option>
                  <option>Ekonomi (3-6 hari)</option>
                </select>
              </div>
            </div>
             <button style="background:#FF5722;font-size:14px;" type="button" data-toggle="modal" data-target="#myModal" name="bayar" class="btn btn-info btn-lg col-12">Pilih Pembayaran</button>
          </div>
        </div>
         </div>
         <div class="row mt-3">
           <div class="col-8">
             <ul class="list-group">
               <li class="list-group-item">

                 <div class="container">
                   <div class="row">
                     <div class="col">
                       <p>Alamat Pengiriman</p><hr>
                          <textarea class="form-control mb-4" rows="10" id="deskripsi_barang" placeholder="Alamat penerima" name="alamat_penerima"></textarea>
                          <div class="invalid-feedback">
                            Please enter a message in the textarea.
                          </div>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
             <!-- Modal -->
             <div class="modal fade mt-12" id="myModal" role="dialog" style="background:">
               <div class="modal-dialog modal-md mt-12">
                 <div class="modal-content">
                   <div class="modal-header">
                     <h4 class="modal-title text-left">Modal Header</h4>
                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                   </div>
                   <div class="modal-body">
                     <label for="bayar" class="textBayar">QuickPay <img class="infoBayar" src="rounded-info-button.png" alt=""></label>
                     <div class="container shadow p-3 mb-5 bg-white border rounded" id="bayar">
                       <b class="textBayar">Rp.500.000</b>

                     </div>
                   </div>
                   <div class="modal-footer">
                     <button type="button" class="btn btn-outline-success col-12" name="button">Pilih metode pembayaran lainnya</button>
                   </div>
                 </div>
               </div>
             </div>
            </div>
           </div>
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
            <li><a href="#"><img src="/PT-01/main/img/facebook.png"</src></a></li>
            <li><a href="#"><img src="/PT-01/main/img/twitter.png"</src></a></li>
            <li><a href="#"><img src="/PT-01/main/img/instagram.png"</src></a></li>
            <li><a href="#"><img src="/PT-01/main/img/youtube.png"</src></a></li>
          </ul>
        </div>
    </footer>

   </body>
 </html>
