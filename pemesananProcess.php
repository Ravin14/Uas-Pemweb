<?php
session_start();
include "koneksi.php";

if (isset($_POST['pesan'])) {
        $pass = 1;

        // Syarat tidak boleh kurang dari hari ini
        $date_now = date("Y-m-d");

        if ($date_now >= $_POST['jadwal']) {
                $pass = 0;
                header("location:pemesanan.php?announcement='pemesanan harus tidak boleh kurang atau sama dengan hari ini!'");
        }

        // Syarat tidak boleh lebih dari 2 hari ini
        $datePlus3 = date('Y-m-d', strtotime($date_now . ' + 2 days'));
        if ($_POST['jadwal'] > $datePlus3) {
                $pass = 0;
                header("location:pemesanan.php?announcement='Pemesanan tidak boleh lebih dari 2 hari setelah ini'");
        }

        // Kota tujuan tidak boleh sama dengan kota keberangkatan
        if ($_POST['kotaKeberangkatan'] == $_POST['kota-tujuan']) {
                $pass = 0;
                header("location:pemesanan.php?announcement='Kota tujuan tidak boleh sama dengan kota keberangkatan'");
        }
        $totalQuery = mysqli_query($koneksi, "SELECT (armada.kapasitas - SUM(pemesanan.jumlahPenumpang))  AS sisa FROM `pemesanan`, `armada` WHERE pemesanan.kotaKeberangkatan = '" . $_POST['kotaKeberangkatan'] . "' AND pemesanan.id_armada = '" . $_POST['kelasArmada'] . "' AND armada.id_armada = '" . $_POST['kelasArmada'] . "' AND pemesanan.tanggal = '" . $_POST['jadwal'] . "';
        ");
        $fetchArrayTotal = mysqli_fetch_array($totalQuery);
        $sisa = $fetchArrayTotal['sisa'];
        if($sisa != null){
        if ($sisa < $_POST['jumlah-penumpang']) {
                // Menembalikan GET Announcement/warning untuk ditampilkan
                $pass = 0;
                header("location:pemesanan.php?announcement=Pemesanan Melebihi Kapasitas! Sisa Kapasitas : $sisa");
        }}else{
                if($_POST['jumlah-penumpang']){
                        if($_POST['jumlah-penumpang'] > 14){
                        $pass = 0;
                        header("location:pemesanan.php?announcement=Pemesanan Melebihi Kapasitas! Sisa Kapastias : 14");
                        }
                }
        }
        if ($pass == 1) {
                $tglKeberangkatan = $_POST['jadwal'];
                $idUser = mysqli_query($koneksi, "SELECT id_pelanggan FROM `user` WHERE username = '$_SESSION[username]';");
                $idUserFetch = mysqli_fetch_array($idUser);
                $idUserInput = $idUserFetch['id_pelanggan'];
                $akunPemesan = $_SESSION['username'];
                $jumlahPenumpang = $_POST['jumlah-penumpang'];
                $kotaBerangkat = $_POST['kotaKeberangkatan'];
                $kotaTujuan = $_POST['kota-tujuan'];
                $kelasArmada = $_POST['kelasArmada'];
                $idJadwal = mysqli_query($koneksi, "SELECT id_jadwal FROM `jadwal` WHERE kotaKeberangkatan = '$kotaBerangkat' AND id_armada = '$kelasArmada' AND tanggal = '$tglKeberangkatan';");
                $idJadwalfetch = mysqli_fetch_array($idJadwal);
                $idJadwalInput = $idJadwalfetch['id_jadwal'];
                $status = "FALSE";

                $query = "INSERT INTO `pemesanan` (`tanggal`,`id_pelanggan`, `id_jadwal`, `jumlahPenumpang`, `kotaKeberangkatan`, `kotaTujuan`, `id_armada`, `status`) VALUES ('" . $tglKeberangkatan . "', '" . $idUserInput . "', '" . $idJadwalInput . "', '" . $jumlahPenumpang . "', '" . $kotaBerangkat . "', '" . $kotaTujuan . "', '" . $kelasArmada . "', '" . $status . "')";
                $koneksi->query($query);

                header("location:pemesanan.php");
        }
}