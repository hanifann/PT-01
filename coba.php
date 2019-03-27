<?php

if (isset($_GET['button'])) {
  $angka = $_GET['angka'];
  for ($i=0; $i <0 ; $i++) {
    // code...
    $i=array($angka);
  }

  foreach ($i as $key => $value) {
    $id = $value;
  }
  echo $id;
  echo $id;
}



 ?>
 <form class="" method="get">
   <input type="number" name="angka" value="">
   <button type="submit" name="button"></button>
 </form>
