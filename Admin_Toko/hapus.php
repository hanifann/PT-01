<?php
// include database connection file
include_once("/register/conpik.php");

// Get id from URL to delete that user
$id = $_GET['id_barang'];

// Delete user row from table based on given id
$result = mysqli_query($connBarang, "DELETE FROM jual_barang WHERE id=$id");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:/PT-01/admin_toko/admin_toko.php");
?>
