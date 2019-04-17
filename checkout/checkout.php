<?php
require_once '/opt/lampp/htdocs/PT-01/register/conpik.php';
require '/opt/lampp/htdocs/PT-01/header/header.php';


if(isset($_COOKIE["login"])){
    if($_COOKIE["login"] == "ok"){
        $_SESSION["login"] = true;
    }
}



if(isset($_POST["Alamat"])){
  alamat_jual($_POST);
}

if (isset($_GET['lkp'])) {
  $x = $_GET['udahlah'];
  $_SESSION['udahlah']= $x;
}

?>

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
      $("#opsi").click(function(){
        $("#opsiLain").load("demo_test.txt");
      });
    });
    </script>
   </head>
   <body>
     <!--Navbar 1-->
     <div class="container mt-3">
       <div class="laku">
        <h6><i class="fas fa-money-bill"></i>&nbsp; Checkout<hr></h6>
      </div>

       <div class="row">

         <?php
         if (isset($_GET['bsemua'])) {
           bsemua();
         }else{
           bayar();
         }
         function bayar(){
           if (isset($_GET['bayar'])) {
             $bayar = $_GET['bayar'];
           }
           global $connBarang;
           $query = "SELECT * FROM jual_barang
           WHERE id_barang=$bayar";
           $result = mysqli_query($connBarang,$query);
           while($row = mysqli_fetch_array($result)){
           ?>
         <div class="col-8">

           <ul class="list-group">

             <li class="list-group-item">

               <div class="container">
                 <div class="row">
                   <div class="col">
                     <p>Barang</p><hr>

                     <img src="data:image;base64,<?=$row[9]?>" class="img-thumbnail" alt="" style="height:150px;width:200px;">
                   </div>

                   <div class="col-5">
                     <p>Deskripsi</p><hr>
                     <div class="container">
                       <h5><?= $row[2] ?></h5>
                       <p>Kualitas Super</p>
                     </div>
                   </div>

                   <div class="col">
                     <p>Harga</p><hr>
                     <div class="text-center">
                       <h6 style="color:#d50000">
                         <?php $rupiah = "Rp ". number_format($row[6],0,',','.');
                         echo "<p><b> $rupiah </b></p>"; ?>
                       </h6>
                       <button type="button" onclick="hapus()" onclick="pindah()" name="button" class="btn btn-danger">Hapus</button>

                     </div>
                   </div>
                 </div>
               </div>

               <hr>
               <div class="row">
                 <div class="col">
                   <h5>Subtotal : <?= $_SESSION['udahlah'] ?> Barang</h5>
                 </div>

                 <div class="col-3 ml-5">
                   <h6 style="color:#d50000"><b><?php $sub = $row[6];
                   $sub = $row[6]*$_SESSION['udahlah'];
                   $rupiah = "Rp ". number_format($sub,0,',','.');
                   ?>
                   <p><b> <?= $rupiah?> </b></p></b></h6>
                 </div>
               </div>

               </ul>
           </ul>

         </div>

       <?php
     }
     }

     function bsemua(){
       global $connBarang;
       $query1 = "SELECT * FROM keranjang";
       $result1 = mysqli_query($connBarang,$query1);

       while ($row1=mysqli_fetch_array($result1)) {
         // code...
         $query = "SELECT * FROM jual_barang WHERE id_barang=$row1[1]";
         $result=mysqli_query($connBarang,$query);
         while ($row=mysqli_fetch_array($result)) {
           ?>
           <div class="col-8">
             <ul class="list-group">
               <li class="list-group-item">
                 <div class="container">
                   <div class="row">
                     <div class="col">
                       <p>Barang</p><hr>

                       <img src="data:image;base64,<?=$row[9]?>" class="img-thumbnail" alt="" style="height:150px;width:200px;">
                     </div>

                     <div class="col-5">
                       <p>Deskripsi</p><hr>
                       <div class="container">
                         <h5><?= $row[2] ?></h5>
                         <p>Kualitas Super</p>
                       </div>
                     </div>

                     <div class="col">
                       <p>Harga</p><hr>
                       <div class="text-center">
                         <h6 style="color:#d50000">
                           <?php $rupiah = "Rp ". number_format($row[6],0,',','.');
                           echo "<p><b> $rupiah </b></p>"; ?>
                         </h6>
                         <button type="button" onclick="hapus()" onclick="pindah()" name="button" class="btn btn-danger">Hapus</button>

                       </div>
                     </div>
                   </div>
                 </div>

                 <hr>
                 <div class="row">
                   <div class="col">
                     <h5>Subtotal : <?= $row1[2]?> Barang</h5>
                   </div>

                   <div class="col-3 ml-5">
                     <h6 style="color:#d50000"><b><?php $sub = $row[6];
                     $sub = $row[6]*$row1[2];
                     $rupiah = "Rp ". number_format($sub,0,',','.');
                     ?>
                     <p><b> <?= $rupiah?> </b></p></b></h6>
                   </div>
                 </div>

                 </ul>
             </ul>

           </div>
           <?php
         }
       }
     }
       ?>


<!--Aside-->
         <div class="col-4">
           <?php
           if (isset($_GET['bsemua'])) {
             lsemua();
           }else{
           Lanjutkan();
         }
           function Lanjutkan(){
             if (isset($_GET['bayar'])) {
               $id = $_GET['bayar'];
             }
             global $connBarang;
             $query = "SELECT * FROM jual_barang WHERE id_barang ='$id'";
             $result = mysqli_query($connBarang,$query);
             while($row = mysqli_fetch_array($result)){
               ?>
           <div class="container border rounded pt-3 pb-3" style="background:#ffffff;">
             <p>Ringkasan Belanja</p><hr>
             <p>Total Barang : (<?= $_SESSION['udahlah'] ?> Barang)</p>

               <?php
               $r = $row[6]*$_SESSION['udahlah'];
             $rupiah1 = "Rp ". number_format($r,0,',','.');
             echo "<p style='color:#d50000'><b> $rupiah1 </b></p>";

             $_SESSION['total']=$rupiah1;
             ?>

             <div class="form-row">
              <div class="form-group col-md-12">
                <label for="katefori">Pilih Durasi Pengiriman</label>
                <select id="kategori" name="kategori_barang" class="form-control">
                  <option selected>Pilih Durasi</option>
                  <option>Express (1-2 hari)<p class="kiri">Rp.20.0000</p></option>
                  <option>Regular (2-4 hari)<p class="kiri">Rp.15.0000</p></option>
                  <option>Ekonomi (3-6 hari)<p class="kiri">Rp.10.0000</p></option>
                </select>
              </div>
            </div>

            <a href="../Tata_Cara_Bayar/BayarBang.php?bayarkau= <?= $row[0];?>"><button style="background:#FF5722;font-size:14px;" type="button" name="bayar" class="btn btn-info btn-lg col-12">Lanjutkan Pembayaran</button></a>
          </div>
          <?php
        }
        }

        function lsemua(){
          global $connBarang;
          $query1 = "SELECT * FROM keranjang";
          $result1 = mysqli_query($connBarang,$query1);

          $row1=mysqli_fetch_array($result1);
            $x = array_sum($row1[2]);

          $query = "SELECT * FROM jual_barang WHERE id_barang=$row1[2]";
          $result = mysqli_query($connBarang,$query);
          $row = mysqli_fetch_array($result);
            ?>
        <div class="container border rounded pt-3 pb-3" style="background:#ffffff;">
          <p>Ringkasan Belanja</p><hr>
          <p>Total Barang : (<?= $x ?> Barang)</p>

            <?php
            $r = $row[2];
          $rupiah1 = "Rp ". number_format($r,0,',','.');
          echo "<p style='color:#d50000'><b> $rupiah1 </b></p>";

          $_SESSION['total']=$rupiah1;
          ?>

          <div class="form-row">
           <div class="form-group col-md-12">
             <label for="katefori">Pilih Durasi Pengiriman</label>
             <select id="kategori" name="kategori_barang" class="form-control">
               <option selected>Pilih Durasi</option>
               <option>Express (1-2 hari)<p class="kiri">Rp.20.0000</p></option>
               <option>Regular (2-4 hari)<p class="kiri">Rp.15.0000</p></option>
               <option>Ekonomi (3-6 hari)<p class="kiri">Rp.10.0000</p></option>
             </select>
           </div>
         </div>

         <a href="../Tata_Cara_Bayar/BayarBang.php?bayarkau= <?= $row[0];?>"><button style="background:#FF5722;font-size:14px;" type="button" name="bayar" class="btn btn-info btn-lg col-12">Lanjutkan Pembayaran</button></a>
       </div>
       <?php
     }

        ?>
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
        <div class="kaki2 style="font-size: 0.5rem;"">
          <ul>
            <li>Follow KebunKu on</li>
            <li><a href="#"><img src="/PT-01/main/img/facebook.png"</src></a></li>
            <li><a href="#"><img src="/PT-01/main/img/twitter.png"</src></a></li>
            <li><a href="#"><img src="/PT-01/main/img/instagram.png"</src></a></li>
            <li><a href="#"><img src="/PT-01/main/img/youtube.png"</src></a></li>
          </ul>
        </div>
      </div>
    </footer>

   </body>
 </html>
