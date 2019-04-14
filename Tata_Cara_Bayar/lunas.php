<?php
require_once '/opt/lampp/htdocs/PT-01/register/conpik.php';
 ?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
    <div id="bayar">
    <hr>
    <h1 class="text-center">Pembayaran Berhasil</h1>
    <?php
    Pembelian($_SESSION);
      function Pembelian($data){
        $id = $data['bayarkau'];
        global $connBarang;
        $query = "SELECT * FROM jual_barang WHERE id_barang = '$id'";
        $result = mysqli_query($connBarang,$query);
        while ($row = mysqli_fetch_array($result)){

          $x = $_SESSION['udahlah'];
          $y=$_SESSION['username'];

          $query1 = "INSERT INTO penjualan(id_barang,nama_barang,jumlah_barang,harga_barang,user_toko) values($row[0],'$row[2]',$x,$row[6],'$y')";
          $result1 = mysqli_query($connBarang,$query1);
        }
      }
     ?>
    <button type="button" class="btn btn-secondary" id="kembali" name="button"><img class="mr-3" src="left.png" alt="">Kembali</button>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script>
  $(document).ready(function(){
    $("#kembali").click(function(){
      $("#bayar").load("BayarBang.php #tabelBayar");
    });
  });
  $(document).ready(function(){
    $("#lanjut").click(function(){
      $("#bayar").load("lanjut.php");
    });
  });
  //HOHO
  </script>
</div>
</body>
</html>
