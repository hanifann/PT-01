<?php

$connBarang = mysqli_connect(
  "localhost",
  "root",
  "",
  "db_barang_PT"
);

if(!$connBarang){
  die("Gagal terhubung ke database");
}


if(!$connBarang){
  die("Gagal terhubung ke database");
}


function filter($data){

  $katbarang = $data['katbarang'];
  $konbarang = $data['konbarang'];
  $Hmin = $data['Hmin'];
  $Hmax = $data['Hmax'];
  $x = $_SESSION['username'];
  global $connBarang;

  $query = "SELECT * FROM jual_barang WHERE kondisi_barang LIKE '%".$konbarang."%' && kategori_barang LIKE '%".$katbarang."%' && harga_barang BETWEEN '$Hmin' AND '$Hmax'";





  $result = mysqli_query($connBarang,$query);
  $y = mysqli_num_rows($result);
    ?>
    <div class="col mt-4 pt-2 pb-2" style="color:white;background:#3FC0B7;">
       Menampilkan  <b style="color:#482D3D;"><?= $y ?></b> produk untuk kondisi barang <b style="color:#482D3D;"><?= $konbarang ?></b> kategori <b style="color:#482D3D;"><?= $katbarang ?></b> Harga Antara <b style="color:#482D3D;"><?php $rupiah = "Rp ".number_format($Hmin,0,',','.');
       echo "$rupiah"; ?></b> Sampai <b style="color:#482D3D;"><?php $rupiah2 = "Rp ".number_format($Hmax,0,',','.');
       echo "$rupiah2"; ?> </b>
    </div>

    <div class="container d-flex justify-content-center col-12">
      <div class="row ">
      <?php


      while($row = mysqli_fetch_array($result)){
        ?>
        <table>
          <tr>
            <td>
        <!-- <div class="container mb-5 col mt-5"> -->
          <a href="/PT-01/item/items.php?item=<?php echo $row[0]; ?>">
        <div class=" col mt-4 overflow-hidden">
          <div class="card border" style="width: 11rem;">
            <?php echo '<img src=" data:image;base64,'.$row[9].'" class="card-img-top" style=" height:100px;" alt="...">'; ?>
              <div class="card-body">
                <span style="font-size:10pt" class="badge badge-secondary"><?= $row[3] ?></span>
                <?php echo '<h5 class="card-title"> '.$row[2].' </h5>'; ?>
                <?php $id=$row[1] ?>
                <p><i class="fas fa-store-alt"></i> <?=$row[10]?></p>
                <p><?= $row[4] ?></p>
                <div class="harga">
                  <?php
                  $rupiah = "Rp ".number_format($row[6],0,',','.');
                  echo "<p><b> $rupiah </b></p>"; ?>
                </div>
              </a>
            </div>
          </div>
        </div>
      </td>
      </tr>
    </table>
      <?php
    }?>
    </div>
    </div>
    <hr>
    <div class="col mt-4 pt-2 pb-2" style="color:white;background:#3FC0B7;">
       Menampilkan  <b style="color:#482D3D;"><?= $y ?></b> produk untuk kondisi barang <b style="color:#482D3D;"><?= $konbarang ?></b> kategori <b style="color:#482D3D;"><?= $katbarang ?></b> Harga Antara <b style="color:#482D3D;"><?php $rupiah = "Rp ".number_format($Hmin,0,',','.');
       echo "$rupiah"; ?></b> Sampai <b style="color:#482D3D;"><?php $rupiah2 = "Rp ".number_format($Hmax,0,',','.');
       echo "$rupiah2"; ?> </b>
    </div>

      <?php
    }
     ?>
