<?php
include "koneksi.php";
if(isset($_POST['submit'])){
    $dataInput = $_GET['id_pemesanan'];
    $dataQuery = mysqli_query($koneksi, "SELECT * FROM `pemesanan` WHERE id_pemesanan = $dataInput;");
    $dataFetch = mysqli_fetch_array($dataQuery);
    $idUser = $dataFetch['id_pelanggan'];
    $commentInput = $_POST['comment'];
    $query = "INSERT INTO `requestpembatalan`(`id_pelanggan`, `id_pemesanan`, `alasanRequest`, `status`) VALUES ('" . $idUser . "', '" . $dataInput . "', '" . $commentInput . "', 'DIAJUKAN')";
    $koneksi->query($query);
    $result = mysqli_query($koneksi, "UPDATE pemesanan SET status ='PENDING' WHERE id_pemesanan = '$dataInput'");

    header("location:user.php");
}
?>