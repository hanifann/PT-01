<?php

require_once '/opt/lampp/htdocs/PT-01/register/conpik.php';
require '/opt/lampp/htdocs/PT-01/header/header.php';

if(isset($_COOKIE["login"])){
    if($_COOKIE["login"] == "ok"){
        $_SESSION["login"] = true;
    }
}


$dataPoints = array(
	array("y" => 25, "label" => "Sunday"),
	array("y" => 15, "label" => "Monday"),
	array("y" => 25, "label" => "Tuesday"),
	array("y" => 5, "label" => "Wednesday"),
	array("y" => 10, "label" => "Thursday"),
	array("y" => 0, "label" => "Friday"),
	array("y" => 20, "label" => "Saturday")
);

 ?>

     <link rel="stylesheet" href="admin_toko.css">
     <title></title>
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
      <div id="chartContainer" style="height:400px; width:100%;" class="container">
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

window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	title: {
		text: "Push-ups Over a Week"
	},
	axisY: {
		title: "Number of Push-ups"
	},
	data: [{
		type: "line",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();

}
</script>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
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
