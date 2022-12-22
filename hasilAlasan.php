<?php
include "koneksi.php";
$hasil = $_GET['hasil'];
$idInput = $_GET['id_input'];
$queryPembatalan = mysqli_query($koneksi, "SELECT * FROM `requestpembatalan` WHERE id_request = '$idInput';");
$PembatalanFetch = mysqli_fetch_array($queryPembatalan);
$idPemesanan = $PembatalanFetch['id_pemesanan'];
if($hasil == "Terima"){
    $result = mysqli_query($koneksi, "UPDATE pemesanan SET jumlahPenumpang = 0,status = 'DIBATALKAN' WHERE id_pemesanan = $idPemesanan");
    $result2 = mysqli_query($koneksi, "UPDATE requestpembatalan SET status ='DITERIMA' WHERE id_request=$idInput");

}
elseif ($hasil == "Tolak") {
    $result = mysqli_query($koneksi, "UPDATE pemesanan SET status ='FALSE' WHERE id_pemesanan = $idPemesanan");
    $result2 = mysqli_query($koneksi, "UPDATE requestpembatalan SET status ='DITOLAK' WHERE id_request=$idInput");
}

header("location:dashboardAdmin.php");
?>