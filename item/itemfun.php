<?php

if (isset($_GET['lkk'])) {
  $num=$_GET['udahlah'];
  $tambah=$_GET['tambah'];
  header("location:/PT-01/keranjang/cart.php?tambah=$tambah&udahlah=$num");
}
if (isset($_GET['lkp'])) {
  $num=$_GET['udahlah'];
  $bayar=$_GET['bayar'];
  header("location:/PT-01/checkout/checkout.php?bayar=$bayar&udahlah=$num");
}

 ?>
