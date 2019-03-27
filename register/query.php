<?php

function qview(){
  echo "SELECT * FROM jual_barang" ;
}

function qdel($id){
  echo "DELETE FROM jual_barang where id_barang = '$id'";
}

 ?>
