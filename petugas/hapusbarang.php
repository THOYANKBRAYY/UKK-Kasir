<?php
include_once("../koneksi/koneksi.php");
 
$id = $_GET['produkID'];
$result = mysqli_query($koneksi, "DELETE FROM kasirproduk WHERE produkID=$id");
header("Location:index.php?page=stok");
?>