<?php
session_start();
$conn = mysqli_connect("localhost","root","","login_system");
function register($data){
    global $conn;
    

    $username = $data["username"];
    $password = $data["password"];
    $cpassword = $data["cpass"];

    if($password == $cpassword){
        $password = password_hash($password, PASSWORD_BCRYPT);
        $quer = "INSERT INTO users (username, password) VALUES('$username','$password')";
        mysqli_query($conn, $quer);

        echo "<script>alert('Data Berhasil di simpan')</script>";
    }else{
        echo "<script>alert('Password tidak sama !!!')</alert>";
    }
}

function login($data){
    $username = $data["username"];
    $password = $data["password"];
    global $conn;
    $cek = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");
    if(mysqli_num_rows($cek) > 0){
        $hasil = mysqli_fetch_assoc($cek);
        $passwordhash =  $hasil["password"];

        if(password_verify($password, $passwordhash)){

            $_SESSION["login"] = true;

            setcookie("login","ok", time()+60);
            echo "<script>alert('Login Berhasil');
            document.location.href='admin.php'</script>";
        }else{
            echo "<script>alert('Login gagal')</script>";
        }
    }
}
?>
