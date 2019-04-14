<?php

require_once '/opt/lampp/htdocs/PT-01/register/conpik.php';
require '/opt/lampp/htdocs/PT-01/header/header.php';

if(isset($_COOKIE["login"])){
    if($_COOKIE["login"] == "ok"){
        $_SESSION["login"] = true;
    }
}
$x = $_SESSION['username'];

function kat(){
  global $connBarang;
  $q1 = "SELECT * FROM jual_barang WHERE kategori_barang = 'Alat-alat pertanian'";
  $q2 = "SELECT * FROM jual_barang WHERE kategori_barang = 'Pupuk'";
  $q3 = "SELECT * FROM jual_barang WHERE kategori_barang = 'Bibit'";
  $q4 = "SELECT * FROM jual_barang WHERE kategori_barang = 'Sewakan Alat'";
  $q5 = "SELECT * FROM jual_barang WHERE kategori_barang = 'Hasil Pertanian'";

  $r1 = mysqli_num_rows($connBarang,$q1);
  $r2 = mysqli_num_rows($connBarang,$q2);
  $r3 = mysqli_num_rows($connBarang,$q3);
  $r4 = mysqli_num_rows($connBarang,$q4);
  $r5 = mysqli_num_rows($connBarang,$q5);

  $_SESSION['aap'] = r1;
  $_SESSION['p'] = r2;
  $_SESSION['b'] = r3;
  $_SESSION['sa'] = r4;
  $_SESSION['hp'] = r5;
}


 ?>

     <link rel="stylesheet" href="admin_toko.css">
     <title></title>
     <title>Belajarphp.net - ChartJS</title>
     <script src="Chart.bundle.js"></script>
     <style type="text/css">
         .lel {
             width: 30%;
             margin: 15px auto;
         }
     </style>
   </head>


   <body>

     <!-- header -->
   <!-- end of navbar-->

   <!-- barang dagangan -->
 <div class="container mt-3">
   <div class="row">
     <div class="col-sm-2">
       <img src="asset/online.png" class="img-thumbnail" alt="">
     </div>
     <div class="col mt-1">
       <a href="edit_toko.php"><h4><?= $_SESSION['username'] ?> <span><img src="asset/pencil.png" alt=""></span> </h4>  </a>
       <hr>
       <div class="row">
        <div class="col-4">
          <table style="color:#606060">
            <tr>
              <td>
                <img src="asset/map.png" data-toggle="tooltip" title="dikirm dari" alt="">
                <?php global $connBarang;
                $sqlq = "SELECT * FROM tb_toko WHERE id_user=(SELECT id FROM user WHERE username='$x')";
                $result = mysqli_query($connBarang,$sqlq);
                $ala = mysqli_fetch_array($result);
                echo "$ala[3]";
                ?>

              </td>
            </tr>
            <tr>
              <td>
                <img src="asset/open.png" data-toggle="tooltip" title="buka sejak" alt="">
                januari 2019
              </td>
            </tr>
            <tr>
              <td>
                <img src="asset/home.png" data-toggle="tooltip" title="lokasi" alt="">
                hanya onlen
              </td>
            </tr>
          </table>
        </div>
       <div class="col-8">
         <div class="text-right mt-4">
           <button class="btn btn-outline-info" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
            Lihat Statistik Penjualan
           </button>
         </div>
      </div>
     </div>
   </div>
      <hr>
     </div>
     <div class="col collapse border" id="collapseExample" >
       <div class="row d-flex justify-content-center">
        <div class="col-4">
          <canvas  id="myChart"></canvas>
        </div>
        <div class="col-8">
          <?php
          global $connBarang;
          $Asql="SELECT * FROM penjualan WHERE user_toko='$x'";
          $Aresult=mysqli_query($connBarang,$Asql);
          ?>
          <table class="table table-sm table-bordered table-hover table-striped">
            <thead class="thead-dark">
              <tr>
                <th>Nama Barang</th>
                <th>Harga Barang</th>
                <th>Barang Terjual</th>
                <th>Pemasukan</th>
              </tr>
            </thead>
            <tbody>
              <?php
              while($roA=mysqli_fetch_array($Aresult)){
                  ?>
                <tr>
                  <td><?= $roA[2] ?></td>
                  <td><?php $rupiah = "Rp ".number_format($roA[4],0,',','.');
                  echo $rupiah;?></td>
                  <td><?=$roA[3]?></td>
                  <td><?php $jum = $roA[4]*$roA[3];
                  $rupiah2 = "Rp ".number_format($jum,0,',','.');
                  echo $rupiah2;?></td>
                </tr>
                <?php
              }?>
<!--
              <tr>
                <td>februari</td>
                <td>Rp.13.000.000</td>
                <td>490</td>
              </tr>
              <tr>
                <td>maret</td>
                <td>Rp.13.200.000</td>
                <td>494</td>
              </tr>
              <tr>
                <td>april</td>
                <td>Rp.14.000.000</td>
                <td>500</td>
              </tr>
              <tr>
                <td>mei</td>
                <td>Rp.16.000.000</td>
                <td>600</td>
              </tr> -->
            </tbody>
          </table>
        </div>
       </div>
     </div>

     <div class="row mt-4">

     <div class="container-fluid">
       <nav class="navbar navbar-expand-lg navbar-dark border" style="background-color:#F7F7F7;">
        <form class="form-inline" action="">
          <input class="form-control gagal" type="text" placeholder="Search">
          <button class="btn btn-success gagal" style="background:#EDEDED"type="submit"> <img src="asset/magnifier.png" alt=""> </button>
        </form>
      </nav>
     </div>
     <div class="container ml-3 mt-3">
       <div class="row">
         <div class="col-sm-2 table-active" style="height:12rem">
           <table class="table table-hover table-border" style="color:#606060">
             <thead>
               <tr>
                 <th class="pt-2 pb-2" scope="col">
                   <img src="asset/cabinet.png" alt="">
                   Etalase
                 </th>
               </tr>
             </thead>
             <tbody>
               <tr>
                 <td>
                   Semua Etalase
                 </td>
               </tr>
               <tr>
                 <td>
                   Alat Pertanian
                 </td>
               </tr>
               <tr>
                 <td>
                   Bibit
                 </td>
               </tr>
             </tbody>
           </table>
         </div>
         <div class="col border ml-3 mr-2 pt-3 pb-5"
          style="background:#F7F7F7;">
          <?php

          tampilkan_admin();
          global $connBarang;
          $query = "SELECT * FROM jual_barang";
          $result = mysqli_query($connBarang,$query);
          if (mysqli_num_rows($result)==0) {
            // code...
            ?>
            <h4 class="text-center" style="color:#4A4A4A;">Tidak ada produk</h4>
            <?php
          }
          ?>
         </div>
       </div>
     </div>
   </div>
 </div>
 <script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});

    var ctx = document.getElementById("myChart");
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["Pupuk", "alat pertanian", "Bibit", "Sewa Alat", "Hasil Pertanian"],
            datasets: [{
                    label: 'Kategori Barang',
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255,99,132,1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
        },
        options: {
            scales: {
                yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
            }
        }
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
