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
        location.assign('/login/login.php')</script>";
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
            document.location.href='/main/main.php'</script>";
        }else{
            echo "<script>alert('Login gagal')</script>";
        }
    }
}

function tampilkan(){
  global $conn;
  return mysqli_query($conn, "SELECT username from user");
}

function tampilkan_barang(){
  global $connBarang;
  $query = "SELECT * FROM jual_barang";
  $result =mysqli_query($connBarang,$query);
?>
<div class="container mt-3">
        <div class="row">
  <?php
  while($row = mysqli_fetch_array($result)){
    ?>

      <a href="">


    <div class="col md-4 overflow-hidden">
      <div class="card" style="width: 15rem;">
        <?php echo '<img src=" data:image;base64,'.$row[9].'" class="card-img-top" style="border-bottom:1px solid #E5E5E5;" alt="...">'; ?>
          <div class="card-body">

            <?php echo '<h5 class="card-title"> '.$row[2].' </h5>'; ?>
            <p><i class="fas fa-store-alt"></i> Toko Traktor</p>
            <div class="harga">
              <?php echo "<p> Rp. $row[6] ,- </p>"; ?>
            </div>
          </div>
      </div>
    </div>
  </a>
  <?php
}?>
</div>
</div>
  <?php
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
