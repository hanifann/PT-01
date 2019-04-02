<?php
session_start();
session_destroy();
session_unset();
setcookie("login","",-61);

echo "<script>alert('Log out Berhasil');
    document.location.href='/PT-01/main/main.php'</script>";
?>
