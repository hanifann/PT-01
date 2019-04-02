<?php
session_start();

if(isset($_COOKIE["login"])){
    if($_COOKIE["login"] == "ok"){
        $_SESSION["login"] = true;
    }
}


if(!isset($_SESSION['login'])){
    echo "<script>alert('Anda belum Login');
    document.location.href='index.php'</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
crossorigin="anonymous">
</head>
<body>
<div class="container-div4">
    <h1>Selamat Datang di halaman administrator</h1>
    <a href="logut.php">Logout disini</a>
</body>
</html>