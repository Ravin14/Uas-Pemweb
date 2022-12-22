<?php
require_once "koneksi.php";
session_start();
$idInput = $_GET['id_input'];
if (isset($_POST['update'])) {
    $varJenis = $_POST['jenis-armada'];
    $varKapasitas = $_POST['kapasitas'];
    $varHarga = $_POST['harga'];

    $result = mysqli_query($koneksi, "UPDATE armada SET jenisArmada='$varJenis', kapasitas='$varKapasitas', harga='$varHarga' WHERE id_armada = '$idInput'");

        header("location:dashboardAdmin.php");
    }

$result = mysqli_query($koneksi, "SELECT * FROM armada WHERE id_armada = '$idInput'");
while ($item = mysqli_fetch_array($result)) {
    $ShowID = $item['id_armada'];
    $ShowJenis = $item['jenisArmada'];
    $ShowKapasitas = $item['kapasitas'];
    $ShowHarga = $item['harga'];
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
                                        <h6 class="mb-0">Id Armada</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input disabled type="text" class="form-control" value="<?= $ShowID ?>">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Jenis Armada</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" name="jenis-armada" class="form-control" value="<?= $ShowJenis ?>">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Kapasitas</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" name="kapasitas" class="form-control" value="<?= $ShowKapasitas ?>">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Harga</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" name="harga" class="form-control" value="<?= $ShowHarga ?>">
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
        min-height: 330px;
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