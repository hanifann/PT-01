<?php
session_start();
$conn = mysqli_connect("localhost","root","","Login_PT");
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

        echo "<script>alert('Data Berhasil di simpan')</script>";
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

            setcookie("login","ok", time()+60);
            echo "<script>alert('Login Berhasil');
            document.location.href='/PT-01/main/main.php'</script>";
        }else{
            echo "<script>alert('Login gagal')</script>";
        }
    }
}


?>
