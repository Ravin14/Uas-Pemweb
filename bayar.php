<?php
require_once "koneksi.php";
$idInput = $_GET['id_pemesanan'];

$result = mysqli_query($koneksi, "UPDATE `pemesanan` SET `status`='ACC' WHERE id_pemesanan = $idInput");
header("location:recipt.php?id_pemesanan=$idInput");
?>