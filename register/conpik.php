<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="/conpik.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  </head>
  <body>
  </body>
</html>
<?php

session_start();
$conn = mysqli_connect("localhost","root","","db_barang_PT");

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
    $username = $data['username'];
    $password = $data['password'];
    $cek = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
    if(mysqli_num_rows($cek) > 0){
        $hasil = mysqli_fetch_assoc($cek);
        $passwordhash =  $hasil["password"];

        if(password_verify($password, $passwordhash)){
            $_SESSION["login"] = true;
            $_SESSION["username"] = $username;
            setcookie("login","ok", time()+3600);
            echo "<script>alert('Login Berhasil');
            document.location.href='/PT-01/main/main.php'</script>";
        }else{
            echo "<script>alert('Login gagal')</script>";
        }
    }
}


function keranjang(){
  global $connBarang;

    if (isset($_GET['tambah'])) {
    $tambah = $_GET['tambah'];
    $queryKi = "INSERT INTO keranjang(id_jual) VALUES($tambah)";
    $resultKi = mysqli_query($connBarang,$queryKi);
    if ($resultKi) {
      ?>
      <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Berhasil !</strong> barang berhasil ditambahkan ke keranjang.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
      <?php
    }else{
    }
  }

  $queryK = "SELECT * FROM keranjang";
  $resultK = mysqli_query($connBarang,$queryK);

  while ($row = mysqli_fetch_array($resultK)) {
  $query = "SELECT * FROM jual_barang WHERE id_barang = '$row[1]'";
  $result = mysqli_query($connBarang,$query);

    while($row1 = mysqli_fetch_array($result)){
      ?>
      <div class="container border mt-3 pt-3">

        <img class="avatar" src="asset/online-store.png" alt=""> Toko Traktor <a id="delk" href="/PT-01/register/conpik.php?delk=<?php echo $row1[0] ?>"><img class="float-right" src="garbage.png" alt=""></a><hr>
        <div class="container">
        <div class="row">
          <div class="col">
              <?php echo '<img src=" data:image;base64,'.$row1[9].'" class="card-img-top" style="border-bottom:1px solid #E5E5E5; height:150px; width:200px;" alt="...">'; ?>
          </div>
          <div class="col">
            <h3><?php echo $row1[2] ?></h3>
          </div>
          <div class="col pb-3">
            <div class="text-center">
                Sub Total
                <p style="color:#B6B6B6;">Belum termasuk ongkir</p>
                <?php
                $rupiah = "Rp ".number_format($row1[6],0,',','.');
                echo "<h5><b> $rupiah </b></h5>"; ?>
                <a href="/PT-01/checkout/checkout.php?bayar=<?= $row[1] ?>&udahlah=1">
                <button type="button"  style="background:#FF7100;" class="mt-4 btn btn-success col-md-5" name="button">Bayar</button>
              </a>
            </div>
          </div>
        </div>
      </div>

      </div>
    <?php
  }?>
    <?php
  }
  }

  function tunggu(){
    global $connBarang;

      if (isset($_GET['tambah'])) {
      $tambah = $_GET['tambah'];
      $queryKi = "INSERT INTO keranjang(id_jual) VALUES($tambah)";
      $resultKi = mysqli_query($connBarang,$queryKi);
      if ($resultKi) {
        ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Berhasil !</strong> barang berhasil ditambahkan ke keranjang.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
        <?php
      }else{
      }
    }

    $queryK = "SELECT * FROM keranjang";
    $resultK = mysqli_query($connBarang,$queryK);

    while ($row = mysqli_fetch_array($resultK)) {
    $query = "SELECT * FROM jual_barang WHERE id_barang = '$row[1]'";
    $result = mysqli_query($connBarang,$query);

      while($row1 = mysqli_fetch_array($result)){
        ?>
        <div class="container border mt-3 mb-4 pb-3 pt-3">
          <div class="container">
          <div class="row">
            <div class="col">
                <?php echo '<img src=" data:image;base64,'.$row1[9].'" class="card-img-top" style="border-bottom:1px solid #E5E5E5; height:150px; width:200px;" alt="...">'; ?>
            </div>
            <div class="col">
              <h3><?php echo $row1[2] ?></h3>
            </div>
            <div class="col pb-3">
              <div class="text-center">
                  Sub Total
                  <p style="color:#B6B6B6;">Belum termasuk ongkir</p>
                  <?php
                  $rupiah = "Rp ".number_format($row1[6],0,',','.');
                  echo "<h5><b> $rupiah </b></h5>"; ?>
              </div>
            </div>
          </div>
        </div>

        </div>
      <?php
    }?>
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
?>
  <div class="d-flex justify-content-center row mt-3">
    <div class="col-sm-5 d-flex justify-content-center">
      <div class="container d-flex justify-content-center">
        <?php echo '<img src=" data:image;base64,'.$row[9].'" class="img-thumbnail" style="border-bottom:1px solid #E5E5E5; height:150px; width:200px;" alt="...">'; ?>
      </div>
  </div>

  <!-- Modal Belum Login -->
  <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Anda belum login</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Silahkan login atau daftar
        </div>
        <div class="modal-footer">
          <a href="/PT-01/login/login.php" type="button" class="btn btn-secondary">Login</a>
          <a href="/PT-01/register/register.php" type="button" class="btn btn-primary">Daftar</a>
        </div>
      </div>
    </div>
  </div>


    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah <?= $row[2] ?></h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col">
              <?php echo '<img src=" data:image;base64,'.$row[9].'" class="img-thumbnail" style="border-bottom:1px solid #E5E5E5; height:100px; width:150px;" alt="...">'; ?>
            </div>
              <!-- <div class="col"> -->
                <div class="text-center col">
              <?php  $rupiah = "Rp ".number_format($row[6],0,',','.');?>
                <h5 style="color:#FF7100;"><b> <?= $rupiah ?> </b></h5>
                <form class="" action="/PT-01/checkout/checkout.php" method="get">

                  <input type="hidden" name="bayar" value="<?= $row[0]   ?>">
                  <input type="number" name="udahlah" min="1" value="1">
                  </script>

                </div>
            </div>
            </div>
            <div class="modal-footer">
              <a href="/PT-01/keranjang/cart.php?tambah=<?php echo $row[0];?>"> <button type="button" name="tkk" class="btn btn-outline-success">
                  Tambah ke keranjang
                </button></a>
              <a href="../checkout/checkout.php?bayar= <?= $row[0] ?>" class="col-6">
                <input type="submit" name="lkp" value="Lanjutkan ke Pembayaran" style="background:#FF7100;color:white;"class="btn btn-success"></textInput>
              </a>
            </form>
            </div>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="container">

      <h4 class="justify-content-center d-flex"><?= $row[2] ?></h4>
      <h5 class="d-flex justify-content-center" style="color:#E7362F;"><div class="harga">
        <?php
        $rupiah = "Rp ".number_format($row[6],0,',','.');
        echo "<p><b> $rupiah </b></p>"; ?>
      </div></h5>
      <?php
    }
    ?>

      <div class="d-flex justify-content-center">
      <button type="button" class="d-flex justify-content-center btn btn-success mt-2 col-8" data-toggle="modal" data-target="
      <?php if (isset($_SESSION['login'])) {
        echo "#myModal";
      }else {
        echo "#exampleModalLong";
      }
      ?>" style="background:#FF7100;"><i class="fas fa-shopping-cart"></i>&nbsp; Beli</button>

    </div>
    </div>
      <br>
      <br>
      <ul class="list-group">

      </ul>
    </div>
  </div>
  <?php
}


function tampil_biasa(){
  global $connBarang;
  $query = "SELECT * FROM jual_barang";
  $result =mysqli_query($connBarang,$query);
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
      <div class="card border" style="width: 11rem;">
        <?php echo '<img src=" data:image;base64,'.$row[9].'" class="card-img-top" style="border-bottom:1px solid #E5E5E5; height:100px;" alt="...">'; ?>
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
      <div class="card border" style="width: 11rem;">
        <?php echo '<img src=" data:image;base64,'.$row[9].'" class="card-img-top" style="border-bottom:1px solid #E5E5E5; height:120px;" alt="...">'; ?>
          <div class="card-body">

            <?php echo '<h5 class="card-title"> '.$row[2].' </h5>'; ?>
            <?php $id=$row[1] ?>
            <p><i class="fas fa-store-alt"></i> Toko Traktor</p>
            <div class="harga">
              <?php
              $rupiah = "Rp ".number_format($row[6],0,',','.');
              echo "<p><b> $rupiah </b></p>"; ?>
            </div>

            <div class="row">
              <p class="col">Stock</p>
                <p class="text-center col-5 mr-3 rounded border border-primary"><?= $row[7]  ?></p>
                </div>

          </a>
          <a href="/PT-01/register/conpik.php?edit=<?php echo $row[0]; ?>">
            <div class="float-left mt-3">
              <button type="button"  class="btn btn-outline-info" name="button-ganti" method="POST" > Edit  </button>
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

if (isset($_GET['delk'])) {
  $id3=$_GET['delk'];
  echo "$id3";
  $qdelk = "DELETE FROM keranjang WHERE id_jual=$id3";
  $q2 = mysqli_query($connBarang,$qdelk);
  header('location:/PT-01/keranjang/cart.php');
}else {
  mysqli_error($connBarang);
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
