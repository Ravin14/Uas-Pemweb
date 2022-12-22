<?php
require_once "koneksi.php";
session_start();
$idInput = $_GET['id_input'];

if (isset($_POST['update'])) {
    $varHari = $_POST['hari'];
    $varArmada = $_POST['armada'];
    $varJam = $_POST['jam-keberangkatan'];
    $varLokasi = $_POST['lokasi-penjemputan'];
    $varKotaKeberangkatan = $_POST['kota-keberangkatan'];
    $varTanggal = $_POST['tanggal-keberangkatan'];

    $result = mysqli_query($koneksi, "UPDATE jadwal SET hari='$varHari', id_armada='$varArmada', jam='$varJam', lokasi='$varLokasi', kotaKeberangkatan='$varKotaKeberangkatan', tanggal='$varTanggal' WHERE id_jadwal = '$idInput'");
    header("location:dashboardAdmin.php");
}

$result = mysqli_query($koneksi, "SELECT id_jadwal, hari, armada.jenisArmada AS jenisArmada, jam, tanggal, lokasi, kotaKeberangkatan FROM jadwal INNER JOIN armada on jadwal.id_armada = armada.id_armada WHERE id_jadwal = '$idInput'");
while ($item = mysqli_fetch_array($result)) {
    $ShowID = $item['id_jadwal'];
    $ShowHari = $item['hari'];
    $showArmada = $item['jenisArmada'];
    $ShowJam = $item['jam'];
    $ShowLokasi = $item['lokasi'];
    $ShowKotaKeberangkatan = $item['kotaKeberangkatan'];
    $ShowTanggal = $item['tanggal'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>Punokawan69 - Travel Kesayangan Keluarga Indonesia</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <form method="POST">
        <div class="container">
            <div class="main-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Id Jadwal</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input disabled type="text" class="form-control" value="<?= $ShowID ?>">
                                    </div>
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Hari</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <select name="hari" class="form-control">
                                            <option value="Senin">Senin</option>
                                            <option value="Selasa">Selasa</option>
                                            <option value="Rabu">Rabu</option>
                                            <option value="Kamis">Kamis</option>
                                            <option value="Jum'at">Jum'at</option>
                                            <option value="Sabtu">Sabtu</option>
                                            <option value="Minggu">Minggu</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Armada</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <select name="armada" class="form-control">
                                        <?php
                                            $showResult = mysqli_query($koneksi, "SELECT jadwal.id_armada AS idArmada, armada.jenisArmada AS jenisArmada FROM jadwal INNER JOIN armada on armada.id_armada = jadwal.id_armada");
                                            while ($item = mysqli_fetch_array($showResult)) {
                                                if ($item['jenisArmada'] == $showArmada) {
                                            ?>
                                                    <option value="<?= $item['idArmada'] ?>" selected><?= $item['jenisArmada'] ?></option>
                                                <?php } else { ?>
                                                    <option value="<?= $item['idArmada'] ?>"><?= $item['jenisArmada'] ?></option>
                                            <?php }
                                            } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Jam Keberangkatan</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" name="jam-keberangkatan" class="form-control" value="<?= $ShowJam ?>">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Tanggal Keberangkatan</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="date" name="tanggal-keberangkatan" class="form-control" value="<?= $ShowTanggal ?>">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Lokasi Penjemputan</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" name="lokasi-penjemputan" class="form-control" value="<?= $ShowLokasi ?>">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Kota Keberangkatan</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" name="kota-keberangkatan" class="form-control" value="<?= $ShowKotaKeberangkatan ?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3"></div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="submit" name="update" class="btn btn-primary px-4" value="Save Changes">
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
        </div>
    </form>
    <style type="text/css">
        body {
            background: #f7f7ff;
            margin-top: 20px;
        }

        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            min-height: 430px;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 0 solid transparent;
            border-radius: .25rem;
            margin-bottom: 1.5rem;
            box-shadow: 0 2px 6px 0 rgb(218 218 253 / 65%), 0 2px 6px 0 rgb(206 206 238 / 54%);
        }

        .me-2 {
            margin-right: .5rem !important;
        }

        input[type=file]::file-selector-button {
            margin-right: 20px;
            border: none;
            background: #084cdf;
            padding: 10px 20px;
            border-radius: 10px;
            color: #fff;
            cursor: pointer;
            transition: background .2s ease-in-out;
        }

        input[type=file]::file-selector-button:hover {
            background: #0d45a5;
        }
    </style>

    <script type="text/javascript">

    </script>
</body>

</html>