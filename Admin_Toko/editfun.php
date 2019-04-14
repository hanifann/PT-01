<?php

require '/opt/lampp/htdocs/PT-01/register/conpik.php';

function edit_toko($data,$image,$name){
  $ntoko = $data['ntoko'];
  if (!isset($data['ntoko'])) {
    $ntoko = "Toko ".$_SESSION['username'];
  }

  $desctoko = $data['deskripsi'];
  $slotoko = $data['slogan'];
  $username = $_SESSION['username'];

  global $connBarang;

  $query = "UPDATE tb_toko SET nama_toko='$ntoko',slogan_toko='$' WHERE id_user=(SELECT id FROM user WHERE username='$username')";

  $query2 = "INSERT INTO tb_toko(slogan_toko,deskripsi_toko,img_toko,img_toko_name) VALUES('$slotoko','$desctoko','$image','$name') WHERE id_user=(SELECT id FROM user WHERE username='$username')";

  $result = mysqli_query($connBarang,$query);
  $result2 = mysqli_query($connBarang,$query2);
  if ($result) {
    echo "berhasil bang";
  }else{
    echo "bapkamu ngebug";
  }

  if ($result2) {
    echo "berhasil juga bang";
  }else{
    echo "ibumu ngebug";
  }
}

 ?>
