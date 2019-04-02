<?php
require 'conpik.php';

if(isset($_POST["login"])){
    login($_POST);
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
<div class="container-mt4">
<h1>Login</h1>
    <form action="" method="post">
        <input type="text" name="username" placeholder="Username" autofocus required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit" name="login">Login</button><br>
        <a href="register.php">Belum punya akun? daftar disini</a>
    </form>
</body>
</html>