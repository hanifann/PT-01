<?php
  require '/opt/lampp/htdocs/PT-01/register/conpik.php';


  function doJualBarang($nama_barang, $kondisi_barang, $kategori_barang, $alamat_barang,
      $harga_barang, $jml_barang, $deskripsi_barang, $poto_barang){
      global $connBarang;

      $insertBarang = mysqli_query($connBarang, "INSERT INTO jual_barang(
        nama_barang, kondisi_barang, kategori_barang, alamat_barang, harga_barang, jumlah_barang,
        deskripsi_barang, poto_barang)
      VALUES ('$nama_barang', '$kondisi_barang', '$kategori_barang', '$alamat_barang', '$harga_barang', '$jml_barang',
      '$deskripsi_barang', '$poto_barang')");
    }

 ?>
