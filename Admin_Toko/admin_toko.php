<?php

require_once '/opt/lampp/htdocs/PT-01/register/conpik.php';
require '/opt/lampp/htdocs/PT-01/header/header.php';

if(isset($_COOKIE["login"])){
    if($_COOKIE["login"] == "ok"){
        $_SESSION["login"] = true;
    }
}

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
       <a href="#"><h4>Toko <?= $_SESSION['username'] ?></h4></a>
       <hr>
       <div class="row">
        <div class="col-4">
          <table style="color:#606060">
            <tr>
              <td>
                <img src="asset/map.png" data-toggle="tooltip" title="dikirm dari" alt="">
                bojong soang
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
           <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
            Button with data-target
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
        <div class="col-4">
          <table class="table table-sm table-bordered table-hover table-striped">
            <thead class="thead-dark">
              <tr>
                <th>Bulan</th>
                <th>Pemasukan</th>
                <th>Barang Terjual</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>januari</td>
                <td>bapak kau</td>
                <td>ngebug</td>
              </tr>
              <tr>
                <td>januari</td>
                <td>bapak kau</td>
                <td>ngebug</td>
              </tr>
              <tr>
                <td>januari</td>
                <td>bapak kau</td>
                <td>ngebug</td>
              </tr>
              <tr>
                <td>januari</td>
                <td>bapak kau</td>
                <td>ngebug</td>
              </tr>
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
