<?php
require_once "koneksi.php";
session_start();
$uname = $_SESSION['username'];

if (isset($_POST['update'])) {
    $varNama = $_POST['namaLengkap'];
    $varTempatLahir = $_POST['tempatLahir'];
    $varTanggalLahir = $_POST['tanggalLahir'];
    $varAlamat = $_POST['alamat'];
    $varEmail = $_POST['email'];
    $varTelepon = $_POST['telepon'];
    $varDesc = $_POST['desc'];

    $result = mysqli_query($koneksi, "UPDATE user SET namaLengkap='$varNama', tempatLahir='$varTempatLahir', tanggalLahir='$varTanggalLahir', alamat='$varAlamat', email='$varEmail', noTelepon='$varTelepon', userDesc='$varDesc' WHERE username = '$uname'");

    $levelQuery = mysqli_query($koneksi, "SELECT userLevel FROM `user` WHERE username = '$_SESSION[username]';");
    $levelFetch = mysqli_fetch_array($levelQuery);
    $level = $levelFetch['userLevel'];
    if ($result) {
        if($level == "USER"){
        header("location: user.php");
    }else{
        header("location:dashboardAdmin.php");
    }
}
}

$result = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$uname'");
while ($item = mysqli_fetch_array($result)) {
    $ShowNama = $item['namaLengkap'];
    $ShowTempatLahir = $item['tempatLahir'];
    $ShowTanggalLahir = $item['tanggalLahir'];
    $ShowAlamat = $item['alamat'];
    $ShowEmail = $item['email'];
    $ShowTelepon = $item['noTelepon'];
    $ShowDesc = $item['userDesc'];
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
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-column align-items-center text-center">
                                    <img src="./image/profil/cowok.png" alt="Admin"  class="rounded-circle" width="150">
                                    <div class="mt-3">
                                        <h4><?= $uname ?></h4>
                                        <p class="text-secondary mb-1"><?= $ShowDesc ?></p>
                                        <p class="text-muted font-size-sm"><?= $ShowAlamat ?></p>
                                        <input type="file" name="" id="" class="">
                                    </div>
                                </div>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Username</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input disabled type="text" class="form-control" value="<?= $uname ?>">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Nama</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" name="namaLengkap" class="form-control" value="<?= $ShowNama ?>">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Tempat Lahir</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" name="tempatLahir" class="form-control" value="<?= $ShowTempatLahir ?>">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Tanggal Lahir</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="date" name="tanggalLahir" class="form-control" value="<?= $ShowTanggalLahir ?>">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Alamat</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" name="alamat" class="form-control" value="<?= $ShowAlamat ?>">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Email</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" name="email" class="form-control" value="<?= $ShowEmail ?>">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Nomer Telepon</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" name="telepon" class="form-control" value="<?= $ShowTelepon ?>">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Deskripsi User</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" name="desc" class="form-control" value="<?= $ShowDesc ?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3"></div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="submit" name="update" class="btn btn-info px-4" value="Simpan Perubahan">
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
        min-height: 550px;
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
    input[type=file]::file-selector-button{
        background-color:#17a2b8 ;
    }

    input[type=file]::file-selector-button:hover {
        background: #37838f;
    }
   
    </style>

    <script type="text/javascript">

    </script>
</body>

</html>