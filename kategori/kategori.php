<?php
require_once '/opt/lampp/htdocs/PT-01/register/conpik.php';
require '/opt/lampp/htdocs/PT-01/header/header.php';

if(isset($_COOKIE["login"])){
    if($_COOKIE["login"] == "ok"){
        $_SESSION["login"] = true;
    }
}

?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>

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
     <link rel="stylesheet" href="kategori.css">

   </head>
   <body>
     <?php
     global $connBarang;
     if (isset($_GET['kategori'])) {
       $kat = $_GET['kategori'];
     }

     $query = "SELECT * FROM jual_barang WHERE kategori_barang='$kat'";
     $result = mysqli_query($connBarang,$query);
     ?>
   <div class="container pt-3">
     <!-- <img src="coba.png" alt=""> -->
     <h1 class="text-center">Kategori</h1>

   </div>
     <div class="container">
       <div class="row col">
           <div class="col">
           </div>
         </div>
         <hr>
         <div class="laku">
           <h6><i class="far fa-clock"> <?=$kat?> </i> <hr></h6>
         </div>

         <?php
         while($row = mysqli_fetch_array($result)){
           ?>
             <table>
               <tr>
                 <td>
             <!-- <div class="container mb-5 col mt-5"> -->
               <a href="/PT-01/item/items.php?item=<?php echo $row[0]; ?>">
             <div class=" col mt-4 overflow-hidden">
               <div class="card border" style="width: 11rem; height:350px;">
                 <?php echo '<img src=" data:image;base64,'.$row[9].'" class="card-img-top" style=" height:100px;" alt="...">'; ?>
                   <div class="card-body">
                     <span style="font-size:10pt" class="badge badge-secondary"><?= $row[3] ?></span>
                     <?php echo '<h5 class="card-title"> '.$row[2].' </h5>'; ?>
                     <?php $id=$row[1] ?>
                     <p><i class="fas fa-store-alt"></i> <?=$row[10]?></p>
                     <p><?= $row[4] ?></p>
                     <div class="harga">
                       <?php
                       $rupiah = "Rp ".number_format($row[6],0,',','.');
                       echo "<p><b> $rupiah </b></p>"; ?>
                     </div>
                   </a>
                 </div>
               </div>
             </div>
           </td>
           </tr>
         </table>
           <?php
         }?>
         </div>

           <!-- </div> -->
         </div>

         <!-- <div class="row mt-5">

         <div class="col overflow-hidden mt-3">
           <div class="card" style="width: 15rem;">
             <img src="/PT-01/main/img/data3.jpg" class="card-img-top" style="border-bottom:1px solid #E5E5E5;" alt="...">
             <div class="card-body">
               <h5 class="card-title">Traktor Versatile</h5>
               <p><i class="fas fa-store-alt"></i> Toko Traktor</p>
               <div class="harga">
                 Rp. 30.000.000/Bulan
               </div>
             </div>
           </div>
       </div>

       <div class="col md-4 overflow-hidden mt-3">
         <div class="card" style="width: 15rem;">
           <img src="/PT-01/main/img/data3.jpg" class="card-img-top" style="border-bottom:1px solid #E5E5E5;" alt="...">
           <div class="card-body">
             <h5 class="card-title">Traktor Versatile</h5>
             <p><i class="fas fa-store-alt"></i> Toko Traktor</p>
             <div class="harga">
               Rp. 30.000.000/Bulan
             </div>
           </div>
         </div>
     </div>

     <?php

     ?>
     <div class="col md-4 overflow-hidden mt-3">
       <div class="card" style="width: 15rem;">
         <img src="/PT-01/main/img/data3.jpg" class="card-img-top" style="border-bottom:1px solid #E5E5E5;" alt="...">
         <div class="card-body">
           <h5 class="card-title">Traktor Versatile</h5>
           <p><i class="fas fa-store-alt"></i> Toko Traktor</p>
           <div class="harga">
             Rp. 30.000.000/Bulan
           </div>
         </div>
       </div>
   </div>

   <div class="col md-4 overflow-hidden mt-3">
     <div class="card" style="width: 15rem;">
       <img src="/PT-01/main/img/data3.jpg" class="card-img-top" style="border-bottom:1px solid #E5E5E5;" alt="...">
       <div class="card-body">
         <h5 class="card-title">Traktor Versatile</h5>
         <p><i class="fas fa-store-alt"></i> Toko Traktor</p>
         <div class="harga">
           Rp. 30.000.000/Bulan
         </div>
       </div>
     </div>
 </div>

 <div class="col md-4 overflow-hidden mt-3">
   <div class="card" style="width: 15rem;">
     <img src="/PT-01/main/img/data3.jpg" class="card-img-top" style="border-bottom:1px solid #E5E5E5;" alt="...">
     <div class="card-body">
       <h5 class="card-title">Traktor Versatile</h5>
       <p><i class="fas fa-store-alt"></i> Toko Traktor</p>
       <div class="harga">
         Rp. 30.000.000/Bulan
       </div>
     </div>
   </div>
</div>

<div class="col md-4 overflow-hidden mt-3">
  <div class="card" style="width: 15rem;">
    <img src="/PT-01/main/img/data3.jpg" class="card-img-top" style="border-bottom:1px solid #E5E5E5;" alt="...">
    <div class="card-body">
      <h5 class="card-title">Traktor Versatile</h5>
      <p><i class="fas fa-store-alt"></i> Toko Traktor</p>
      <div class="harga">
        Rp. 30.000.000/Bulan
      </div>
    </div>
  </div>
</div>

<div class="col md-4 overflow-hidden mt-3">
  <div class="card" style="width: 15rem;">
    <img src="/PT-01/main/img/data3.jpg" class="card-img-top" style="border-bottom:1px solid #E5E5E5;" alt="...">
    <div class="card-body">
      <h5 class="card-title">Traktor Versatile</h5>
      <p><i class="fas fa-store-alt"></i> Toko Traktor</p>
      <div class="harga">
        Rp. 30.000.000/Bulan
      </div>
    </div>
  </div>
</div>

<div class="col md-4 overflow-hidden mt-3">
  <div class="card" style="width: 15rem;">
    <img src="/PT-01/main/img/data3.jpg" class="card-img-top" style="border-bottom:1px solid #E5E5E5;" alt="...">
    <div class="card-body">
      <h5 class="card-title">Traktor Versatile</h5>
      <p><i class="fas fa-store-alt"></i> Toko Traktor</p>
      <div class="harga">
        Rp. 30.000.000/Bulan
      </div>
    </div>
  </div>
</div>

<div class="col md-4 overflow-hidden mt-3">
  <div class="card" style="width: 15rem;">
    <img src="/PT-01/main/img/data3.jpg" class="card-img-top" style="border-bottom:1px solid #E5E5E5;" alt="...">
    <div class="card-body">
      <h5 class="card-title">Traktor Versatile</h5>
      <p><i class="fas fa-store-alt"></i> Toko Traktor</p>
      <div class="harga">
        Rp. 30.000.000/Bulan
      </div>
    </div>
  </div>
</div>

<div class="col md-4 overflow-hidden mt-3">
  <div class="card" style="width: 15rem;">
    <img src="/PT-01/main/img/data3.jpg" class="card-img-top" style="border-bottom:1px solid #E5E5E5;" alt="...">
    <div class="card-body">
      <h5 class="card-title">Traktor Versatile</h5>
      <p><i class="fas fa-store-alt"></i> Toko Traktor</p>
      <div class="harga">
        Rp. 30.000.000/Bulan
      </div>
    </div>
  </div>
</div>


<div class="col md-4 overflow-hidden mt-3">
  <div class="card" style="width: 15rem;">
    <img src="/PT-01/main/img/data3.jpg" class="card-img-top" style="border-bottom:1px solid #E5E5E5;" alt="...">
    <div class="card-body">
      <h5 class="card-title">Traktor Versatile</h5>
      <p><i class="fas fa-store-alt"></i> Toko Traktor</p>
      <div class="harga">
        Rp. 30.000.000/Bulan
      </div>
    </div>
  </div>
</div>



<div class="col md-4 overflow-hidden mt-3">
  <div class="card" style="width: 15rem;">
    <img src="/PT-01/main/img/data3.jpg" class="card-img-top" style="border-bottom:1px solid #E5E5E5;" alt="...">
    <div class="card-body">
      <h5 class="card-title">Traktor Versatile</h5>
      <p><i class="fas fa-store-alt"></i> Toko Traktor</p>
      <div class="harga">
        Rp. 30.000.000/Bulan
      </div>
    </div>
  </div>
</div>
</div> -->


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
