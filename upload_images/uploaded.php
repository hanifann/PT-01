<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <h1>Data Gambar</h1><hr>
    <a href="coba.php">Input lagi bang?</a>
    <table border="1" cellpadding="8">

      <tr>

        <th>Gambar</th>
        <th>Nama File</th>
        <th>Ukuran File</th>
        <th>Tipe File</th>

      </tr>

      <?php

      // Warning: mysqli_num_rows() expects parameter 1 to be mysqli_result, bool given in /opt/lampp/htdocs/PT-01/upload_images/uploaded.php on line 29
      //



      include "koneksi.php";

      $query = "SELECT * From gambar";
      
      $sql = mysqli_query($connect, $query);

      $row = mysqli_num_rows($sql);

      if ($row > 0) {
        while($data = mysqli_fetch_array($sql)){
          ?>

          <tr>
            <td> <img src="images/<?php $data['nama']?>" alt=""> </td>
            <td> <?php $data['id'] ?> </td>
            <td> <?php $data['nama'] ?> </td>
            <td> <?php $data['ukuran'] ?> </td>
            <td> <?php $data['tipe'] ?> </td>
          </tr>

        <?php }
      }else {
        echo"<tr><td colspan='4'>Data tidak ada</td></tr>";
      }
      ?>

    </table>
  </body>
</html>
