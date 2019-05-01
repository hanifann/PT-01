<?php

require '/opt/lampp/htdocs/PT-01/register/conpik.php';

function edit_toko($data,$image,$name){
  $ntoko = $data['ntoko'];
  $desctoko = $data['deskripsi'];
  $slotoko = $data['slogan'];
  $atoko = $data['atoko'];
  $username = $_SESSION['username'];

  global $connBarang;

  $query = "UPDATE tb_toko SET nama_toko='$ntoko',alamat_toko='$atoko',slogan_toko='$slotoko',deskripsi_toko='$desctoko',img_toko='$image',img_toko_name='$name' WHERE id_user=(SELECT id FROM user WHERE username='$username')";

  // $query2 = "INSERT INTO tb_toko(slogan_toko,deskripsi_toko,img_toko,img_toko_name) VALUES('$slotoko','$desctoko','$image','$name') WHERE id_user=(SELECT id FROM user WHERE username='$username')";

  $result = mysqli_query($connBarang,$query);
  // $result2 = mysqli_query($connBarang,$query2);
  if ($result) {
    ?>
    <div class="alert alert-success container alert-dismissible fade show mt-4" role="alert">
      <strong>Berhasil !</strong> edit toko.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <?php
  }else{
    ?>
    <div class="alert alert-success container alert-dismissible fade show mt-4" role="alert">
      <strong>Gagal !</strong> edit toko.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <?php
  }

  // if ($result2) {
  //   echo "berhasil juga bang";
  // }else{
  //   echo "ibumu ngebug";
  // }
}

 ?>
