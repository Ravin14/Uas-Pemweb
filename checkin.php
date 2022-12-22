<?php
include "koneksi.php";
$idPemesanan = $_GET['id_pemesanan'];
$result = mysqli_query($koneksi, "SELECT * FROM `pemesanan` WHERE id_pemesanan = '$idPemesanan';");
$resultFetch = mysqli_fetch_array($result);
date_default_timezone_set('Asia/Jakarta');
$today = date("Y-m-d");
if($today == $resultFetch['tanggal'] && $resultFetch['status'] == "ACC"){
    $checkin = mysqli_query($koneksi, "UPDATE `pemesanan` SET status = 'DONE' WHERE id_pemesanan = '$idPemesanan';");

    if($checkin){
        header("location:user.php?announcement='CHECK-IN BERHASIL'");
    }
}else{
    header("location:user.php?announcement='CHECK-IN GAGAL'");
}
?>