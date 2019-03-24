<?php


 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <form class="" enctype="multipart/form-data" method="post">

       <input type="file" name="image" value="">
       <input type="text" name="nama_barang" value="">
       <input type="submit" name="submit" value="upload">

     </form>

     <?php

     if (isset($_POST['submit'])) {
       if (getimagesize($_FILES['image']['tmp_name']) == false) {
         echo "image bang";
       }else {
         $image = addslashes($_FILES['image']['tmp_name']);
         $name = addslashes($_FILES['image']['name']);
         $image = file_get_contents($image);
         $image = base64_encode($image);
         $nama_barang = $_POST['nama_barang'];
         saveimages($name,$image,$nama_barang);

       // code...
     }
   }
   tampil();
     function saveimages($name,$image,$nama_barang){
       $con = mysqli_connect("localhost","root","","coba_gambar");
       $query = "INSERT INTO images(name,image,nama_barang) VALUES ('$name','$image','$nama_barang')";
       $result = mysqli_query($con,$query);
       if($result){
         echo "<br/>Mantul bang";
       }else{
         echo "<br/>gagal upload bang.";
       }
     }
     function tampil(){
       $con = mysqli_connect("localhost","root","","coba_gambar");
       $query = "SELECT * FROM images";
       $result = mysqli_query($con,$query);

       while ($row = mysqli_fetch_array($result)){
         echo '<img src="data:image;base64,'.$row[2].'">';
       }
     }
     ?>
   </body>
 </html>
