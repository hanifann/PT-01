<?php
var_dump(md5("text"));
echo "<br>";
var_dump(sha1("text"));
echo "<br>";
var_dump(hash("sha384","text"));
echo "<br>";
var_dump(password_hash("text", PASSWORD_DEFAULT));
echo "<br>";
?>