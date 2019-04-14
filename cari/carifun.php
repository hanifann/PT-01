<?php
$conn = mysqli_connect("localhost","root","","Login_PT");

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


function caribang($data){

$cari = $data;

global $connBarang;
$y = $_SESSION['username'];

$query ="SELECT * FROM jual_barang WHERE nama_barang LIKE '%".$cari."%' || kategori_barang LIKE '%".$cari."%'";

$query2 = "SELECT * FROM tb_toko WHERE id_user=(SELECT id FROM user WHERE username='$y')";

$result = mysqli_query($connBarang,$query);
$result2=mysqli_query($connBarang,$query2);

$x = mysqli_num_rows($result);
?>

<div class="col mt-4 pt-2 pb-2" style="color:white;background:#3FC0B7;">
   Menampilkan <b style="color:#482D3D;"><?= $x ?></b> produk untuk <b style="color:#482D3D;"><?= $cari ?></b>
</div>

<div class="container d-flex justify-content-center col-12">
  <div class="row ">
  <?php
    while ($roz = mysqli_fetch_array($result2)) {

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
            <p><i class="fas fa-store-alt"></i> <?=$roz[2]?></p>
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
}
}?>
</div>
</div>
<hr>
<div class="col mt-4 pt-2 pb-2" style="color:white;background:#3FC0B7;">
   Menampilkan <b style="color:#482D3D;"><?= $x ?></b> produk untuk <b style="color:#482D3D;"><?= $cari ?></b>
</div>
  <?php
}
 ?>
