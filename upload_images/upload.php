<?php

include "koneksi.php";

$nama_file = $_FILES['gambar']['name'];
$ukuran_file = $_FILES['gambar']['size'];
$tipe_file = $_FILES['gambar']['type'];
$tmp_file = $_FILES['gambar']['tmp_name'];

// dir
$path = "images/".$nama_file;

//cek tipe file
if ($tipe_file == "image/jpeg" || $tipe_file == "image/png") {

  // cek ukuran
  if ($ukuran_file <= 1000000) {

    // cek berhasil
    if (move_uploaded_file($tmp_file, $path)) {

      // simpan ke database
      $query = "INSERT INTO gambar(id,nama,ukuran,tipe) VALUES('1','$nama_file','$ukuran_file','$tipe_file')";
      $sql  = mysqli_query($connect,$query);

      if ($sql) {

        // direct to uploaded.php
        header("location: uploaded.php");
      }else {
        //gagal masuk database
        echo "gagal masuk database bang";
        echo " <br><a href='coba.php'>input lagi bang</a> ";
      }

      }else {
        //gagal upload
        echo "gagal input bang";
        echo " <br><a href='coba.php'>input lagi bang</a> ";
      }
    }else {
      //ukuran lebih dari 1mb
      echo "gambarnya ukurannya kegedean bang";
      echo " <br><a href='coba.php'>input lagi bang</a> ";
    }
  }else {
    //ekstensi salah
    echo "ini gambar bukan bang?";
    echo " <br><a href='coba.php'>input lagi bang</a> ";
  }
 ?>
