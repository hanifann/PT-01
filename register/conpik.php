<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="/conpik.css">
  </head>
  <body>


  </body>
</html>
<?php

session_start();
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

$connJual = mysqli_connect(
  "localhost",
  "root",
  "",
  "db_jual"
);
if(!$connBarang){
  die("Gagal terhubung ke database");
}

$connKeranjang = mysqli_connect(
  "localhost",
  "root",
  "",
  "db_barang_PT");


function register($data){
    global $conn;


    $username = $data["username"];
    $password = $data["password"];
    $cpassword = $data["cpass"];
    $email = $data["email"];

    if($password == $cpassword){
        $password = password_hash($password, PASSWORD_BCRYPT);
        $quer = "INSERT INTO user(username, email, password) VALUES('$username','$email','$password')";
        mysqli_query($conn, $quer);

        echo "<script>alert('Data Berhasil di simpan');
        location.assign('/PT-01/login/login.php')</script>";
    }else{
        echo "<script>alert('Password tidak sama !!!')</alert>";
    }
}

function login($data){
    global $conn;
    $username = $data["username"];
    $password = $data["password"];
    $cek = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
    if(mysqli_num_rows($cek) > 0){
        $hasil = mysqli_fetch_assoc($cek);
        $passwordhash =  $hasil["password"];

        if(password_verify($password, $passwordhash)){

            $_SESSION["login"] = true;

            setcookie("login","ok", time()+3600);
            echo "<script>alert('Login Berhasil');
            document.location.href='/PT-01/main/main.php'</script>";
        }else{
            echo "<script>alert('Login gagal')</script>";
        }
    }
}

function keranjang(){
  if (isset($_GET['tambah'])) {
    // code...
    $tambah = $_GET['tambah'];
  } else {
    // code...
  }

  global $connKeranjang;
  global $connBarang;
  $queryKi = "INSERT INTO keranjang('id_jual') VALUES($tambah)";
  $queryK = "SELECT id_jual FROM keranjang";
  mysqli_query($connBarang,$queryK);

  $resultK = mysqli_query($connBarang,$queryK);
  while ($row = mysqli_fetch_array($resultK)) {
    $id = $row[1];
    echo $row[1];
    echo "string";

  $query = "SELECT * FROM jual_barang WHERE id_barang = $id";

  $result = mysqli_query($connBarang,$query);
  ?>
  <div class="container d-flex justify-content-center col-12">

    <div class="row">


    <?php
    while($row = mysqli_fetch_array($result)){
      ?>
      <table>
        <tr>
          <td>

      <!-- <div class="container mb-5 col mt-5"> -->
        <a href="/PT-01/item/items.php?item=<?php echo $row[0]; ?>">
      <div class=" col mt-4 overflow-hidden">
        <div class="card border border-primary" style="width: 14rem;">
          <?php echo '<img src=" data:image;base64,'.$row[9].'" class="card-img-top" style="border-bottom:1px solid #E5E5E5; height:150px;" alt="...">'; ?>
            <div class="card-body">

              <?php echo '<h5 class="card-title"> '.$row[2].' </h5>'; ?>
              <?php $id=$row[1] ?>
              <p><i class="fas fa-store-alt"></i> Toko Traktor</p>
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
    <?php
  }

  }



function tampil_item(){
  if (isset($_GET['item'])) {
    $id = $_GET['item'];
  }

  global $connBarang;
  $query = "SELECT * FROM jual_barang WHERE id_barang=$id";
  $result= mysqli_query($connBarang,$query);

  while ($row = mysqli_fetch_array($result)) {

    // code...
?>
  <div class="row mt-3">
    <div class="col-6">
      <div class="card">
        <?php echo '<img src=" data:image;base64,'.$row[9].'" class="card-img-top" style="border-bottom:1px solid #E5E5E5; height:200px;" alt="...">'; ?>
      </div>
        <button type="button" class="btn btn-success mt-5 col-lg-12" data-toggle="modal" data-target="#myModal" style="background:#FF7100;"><i class="fas fa-shopping-cart"></i>&nbsp; Beli</button>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Toko Pupuk</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
              <p>Some text in the modal.</p>
            </div>
            <?php

             ?>
            <div class="modal-footer">
              <a href="/PT-01/keranjang/cart.php?tambah= <?php echo $row[0]; ?> ">
              <button type="button" style="" class="btn btn-outline-success col-6">Tambah ke keranjang</button>
            </a>
              <a href="../checkout/checkout.php" class="col-6">
                <button type="button" style="background:#FF7100;color:white;"class="btn btn-success">Lanjutkan ke Pembayaran</button>
              </a>
            </div>
        </div>
      </div>
    </div>
    <div class="col-6">
      <h4>Pupuk Urea</h4>
      <h5 style="color:#E7362F;">Rp. 2.000.000</h5>
      <br>
      <br>
      <ul class="list-group">
      <li class="list-group-item">
      <?php echo '<p> '.$row[8].' </p>'; ?>
      </li>
      </ul>
    </div>
  </div>

  <?php
}
}

function tampil_biasa(){
  global $connBarang;
  $query = "SELECT * FROM jual_barang";
  $result =mysqli_query($connBarang,$query);
?>
<hr>

<div class="container d-flex justify-content-center col-12">

  <div class="row">


  <?php
  while($row = mysqli_fetch_array($result)){
    ?>
    <table>
      <tr>
        <td>

    <!-- <div class="container mb-5 col mt-5"> -->
      <a href="/PT-01/item/items.php?item=<?php echo $row[0]; ?>">
    <div class=" col mt-4 overflow-hidden">
      <div class="card border border-primary" style="width: 14rem;">
        <?php echo '<img src=" data:image;base64,'.$row[9].'" class="card-img-top" style="border-bottom:1px solid #E5E5E5; height:150px;" alt="...">'; ?>
          <div class="card-body">

            <?php echo '<h5 class="card-title"> '.$row[2].' </h5>'; ?>
            <?php $id=$row[1] ?>
            <p><i class="fas fa-store-alt"></i> Toko Traktor</p>
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
  <?php

}

function tampilkan(){
  global $conn;
  $query = "SELECT username FROM user WHERE username='$username'";
  $result = mysqli_query($conn,$query);

  while ($row = mysqli_fetch_array($result)) {



  }
}

function tampilkan_satu(){
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
  global $connBarang;
  $query = "SELECT * FROM jual_barang WHERE id_barang = $id";
  $result =mysqli_query($connBarang,$query);
}
?>
<div class="container mt-3">
  <h1 class="text-center">Database Barang</h1>
</div>
<hr>

<div class="container d-flex justify-content-center col-12">

  <div class="row">


  <?php
  while($row = mysqli_fetch_array($result)){
    ?>
    <table>
      <tr>
        <td>

    <!-- <div class="container mb-5 col mt-5"> -->
      <a href="/PT-01/main/main.php">
    <div class=" col mt-4 overflow-hidden">
      <div class="card border border-primary" style="width: 14rem;">
        <?php echo '<img src=" data:image;base64,'.$row[9].'" class="card-img-top" style="border-bottom:1px solid #E5E5E5; height:200px;" alt="...">'; ?>
          <div class="card-body">

            <?php echo '<h5 class="card-title"> '.$row[2].' </h5>'; ?>
            <?php $id=$row[1] ?>
            <p><i class="fas fa-store-alt"></i> Toko Traktor</p>
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
  <?php
}



function tampilkan_admin(){
  global $connBarang;
  $query = "SELECT * FROM jual_barang";
  $result =mysqli_query($connBarang,$query);
?>
<div class="container mt-3">
  <h1 class="text-center">Database Barang</h1>
</div>
<hr>

<div class="container d-flex justify-content-center col-12">

  <div class="row">


  <?php
  while($row = mysqli_fetch_array($result)){
    ?>
    <table>
      <tr>
        <td>

    <!-- <div class="container mb-5 col mt-5"> -->
      <a href="/PT-01/main/main.php">
    <div class=" col mt-4 overflow-hidden">
      <div class="card border border-primary" style="width: 14rem;">
        <?php echo '<img src=" data:image;base64,'.$row[9].'" class="card-img-top" style="border-bottom:1px solid #E5E5E5; height:200px;" alt="...">'; ?>
          <div class="card-body">

            <?php echo '<h5 class="card-title"> '.$row[2].' </h5>'; ?>
            <?php $id=$row[1] ?>
            <p><i class="fas fa-store-alt"></i> Toko Traktor</p>
            <div class="harga">
              <?php
              $rupiah = "Rp ".number_format($row[6],0,',','.');
              echo "<p><b> $rupiah </b></p>"; ?>
            </div>

          </a>
          <a href="/PT-01/register/conpik.php?edit=<?php echo $row[0]; ?>">
            <div class="float-left mt-3">
              <button type="button" style="width:190%" class="btn btn-outline-info" name="button-ganti" method="POST" > Edit  </button>
            </div>
          </a>

          <a href="/PT-01/register/conpik.php?delete=<?php echo $row[0]; ?>">
            <div class="float-right mt-3">
              <button type="button" method="POST" class="btn btn-outline-danger" name="button-hapus">
              Hapus  </button>
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
  <?php
}


if (isset($_GET['delete'])) {
  $id=$_GET['delete'];
  echo "$id";
  $qdel = "DELETE FROM jual_barang WHERE id_barang=$id";
  $q = mysqli_query($connBarang,$qdel);
  header('location:/PT-01/Admin_Toko/admin_toko.php');
  echo "$id";
}  else {
    mysqli_error($connBarang);
  }

  if (isset($_GET['edit'])) {
    $id2=$_GET['edit'];
    header("location:/PT-01/barang/UpdateBarang.php?id=$id2");
  }else{
    mysqli_error($connBarang);
  }

  function update($id,$name,$image,$nama_barang, $kondisi_barang, $kategori_barang,
  $alamat_barang, $harga_barang, $jml_barang, $deskripsi_barang){
    global $connBarang;

    echo $id.'<br>'.$name.'<br>'.$nama_barang;

    $query =
    "UPDATE jual_barang SET
    name = '$name',
    nama_barang = '$nama_barang',
    kondisi_barang = '$kondisi_barang',
    kategori_barang = '$kategori_barang',
    alamat_barang = '$alamat_barang',
    harga_barang = '$harga_barang',
    jumlah_barang = '$jml_barang',
    deskripsi_barang = '$deskripsi_barang',
    poto_barang = '$image'
    WHERE id_barang = '$id'" ;

    $result = mysqli_query($connBarang,$query);

    if($result){
      echo "<br/>Mantul bang";
    }else{
      echo "<br/>gagal update bang.";
    }
  }



function saveimages($name,$image,$nama_barang, $kondisi_barang, $kategori_barang,
  $alamat_barang, $harga_barang, $jml_barang, $deskripsi_barang){
  global $connBarang;
  $query = "INSERT INTO jual_barang(name,nama_barang,kondisi_barang,kategori_barang,
     alamat_barang,harga_barang,jumlah_barang,deskripsi_barang, poto_barang
  ) VALUES ('$name','$nama_barang','$kondisi_barang','$kategori_barang','$alamat_barang',
    '$harga_barang','$jml_barang','$deskripsi_barang','$image')";
  $result = mysqli_query($connBarang,$query);
  if($result){
    echo "<br/>Mantul bang";
  }else{
    echo "<br/>gagal upload bang.";
  }
}

function alamat_jual($data){
  global $connJual;

  $alamat = $data['alamat_penerima'];

  $insertJual = mysqli_query($connJual, "INSERT INTO tbl_jual(alamat_penerima);
  VALUES ('$alamat')");

  if($insertJual){
    echo ("
    <script>
      alert('Berhasil Menambahkan Barang');
      location.assign('checkout.php')
    </script>
    ");
  }else{
    echo ("
    <script>
      alert('Gagal Menambahkan Barang');
      location.assign('checkout.php')
    </script>
    ");
  }
}

function tampilkan_alamat(){
  global $connJual;

  return mysqli_query($connJual,"SELECT alamat_penerima from tbl_jual");
}



?>
