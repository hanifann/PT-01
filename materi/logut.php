<?php
session_start();
session_destroy();
session_unset();
setcookie("login","",-61);

echo "<script>alert('Log out Berhasil');
    document.location.href='/main/main.php'</script>";
?>
