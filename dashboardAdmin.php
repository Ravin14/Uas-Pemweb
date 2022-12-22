<?php include "koneksi.php";
session_start();
// mengembalikan user ke index apabila tidak terdapat session username
if (!isset($_SESSION['username'])) {
  header('location: index.php');
}else{
  $levelQuery = mysqli_query($koneksi, "SELECT userLevel FROM `user` WHERE username = '$_SESSION[username]';");
      $levelFetch = mysqli_fetch_array($levelQuery);
      $level = $levelFetch['userLevel'];
      if ($level != "ADMIN") {
        header("location:index.php");
      }
    }
// logout
if (isset($_POST['logout'])) {
  unset($_SESSION['username']);
  if (isset($_COOKIE['username'])) {
    unset($_SESSION['username']);
    setcookie("username", $_POST['username'], time() - 0.1);
  }

  // mengembalikan ke index
  header("location:index.php");
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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="./css/user.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/css/foundation.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/dataTables.foundation.min.css">
  <style type="text/css">
    body {
      font-family: 'Libre Franklin', sans-serif;
    }

    #container {
      height: 400px;
    }

    .highcharts-figure,
    .highcharts-data-table table {
      min-width: 310px;
      max-width: 800px;
      margin: 1em auto;
    }

    #sliders td input[type="range"] {
      display: inline;
    }

    #sliders td {
      padding-right: 1em;
      white-space: nowrap;
    }

    .breadcrumb-item a {
      color: #850000;
    }

    .breadcrumb-item>a:hover {
      color: #ffc12d;
    }

    .breadcrumb-item+.breadcrumb-item {
      color: #850000;
    }
  </style>
  <script src="https://code.highcharts.com/highcharts.js"></script>
  <script src="https://code.highcharts.com/modules/series-label.js"></script>
  <script src="https://code.highcharts.com/modules/exporting.js"></script>
  <script src="https://code.highcharts.com/modules/export-data.js"></script>
  <script src="https://code.highcharts.com/modules/accessibility.js"></script>

</head>


<body>
<?php include "navbar.php"; ?>	
  <?php
  if (isset($_GET['announcement'])) { ?>
    <script>
      alert(<?= $_GET['announcement'] ?>)
    </script>
  <?php } ?>
  <div class="container">
    <div class="main-body">

      <!-- Breadcrumb -->
      <nav aria-label="breadcrumb" class="main-breadcrumb">
        <div class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Admin Dashboard</li>
        </div>
      </nav>
      <!-- /Breadcrumb -->
      <?php
      $username = $_SESSION['username'];
      $result = mysqli_query($koneksi, "SELECT * FROM `user` WHERE username = '$username'");
      while ($item = mysqli_fetch_array($result)) {
        $idUser = $item['id_pelanggan'];
      ?>
        <div class="row gutters-sm">
          <div class="col-md-4 mb-3">
            <div class="card">
              <div class="card-body">
                <div class="d-flex flex-column align-items-center text-center">
                  <img src="./image/profil/cowok.png" alt="Admin" class="rounded-circle" width="150">
                  <div class="mt-3">
                    <h4><?= $item['namaLengkap']; ?></h4>
                    <p class="text-secondary mb-1"><?= $item['userDesc'] ?></p>
                    <p class="text-muted font-size-sm"><?= $item['alamat'] ?></p>
                    <form method="POST">
                      <button type="submit" name="logout" class="btn btn-danger">Logout</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-8">
            <div class="card mb-3">
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-3">
                    <h6 class="mb-0">Username</h6>
                  </div>
                  <div class="col-sm-9 text-secondary">
                    <?= $item['username']; ?>
                  </div>
                </div>
                <hr>

                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Nama</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?= $item['namaLengkap']; ?>
                    </div>
                  </div>
                  <hr>

                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Tempat Lahir</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?= $item['tempatLahir']; ?>
                    </div>
                  </div>
                  <hr>

                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Tanggal Lahir</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?= $item['tanggalLahir']; ?>
                    </div>
                  </div>
                  <hr>

                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Alamat</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?= $item['alamat']; ?>
                    </div>
                  </div>
                  <hr>

                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?= $item['email']; ?>
                    </div>
                  </div>
                  <hr>

                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Nomer Telepon</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?= $item['noTelepon']; ?>
                    </div>
                  </div>
                <?php } ?>
                <hr>

                <div class="row">
                  <div class="col-sm-12">
                    <a class="btn btn-info " target="__blank" href="edit-admin.php">Edit</a>
                  </div>
                </div>
                </div>
              </div>

            </div>
          </div>

        </div>
    </div>

    <div class="container-fluid mt-3">
      <div class="row d-flex justify-content-center">
        <div class="col-sm-12">
          <div class="card">
            <div class="card-body">
              <div class="card-title">Grafik Penjualan Elf Punokawan69</div>
              <hr>

              <?php

              $tma = mysqli_query($koneksi, "SELECT SUM(jumlahPenumpang) AS totalPenumpang, tanggal
                            FROM pemesanan
                            GROUP BY tanggal;
                            ");
              while ($row = mysqli_fetch_array($tma)) {
                $data[] = array(
                  $row['tanggal'],
                  floatval($row['totalPenumpang'])
                );
              }
              $json = json_encode($data)

              ?>

              <div id="grafik"></div>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Upcoming Jadwal Elf</h5>
              <div class="row">
                <div class="col-sm-12">
                  <a class="btn btn-success " target="__blank" href="requiryJadwal.php">Add</a>
                </div>
                          
              </div>
              <hr>
              <table id="tabel-data-jadwal" class="table table-striped" style="width:100%">
                <thead><?php
                        $resultJadwal = mysqli_query($koneksi, "SELECT id_jadwal, hari, jam, lokasi, kotaKeberangkatan, armada.jenisArmada AS jenisArmada, tanggal FROM `jadwal` INNER JOIN `armada` ON armada.id_armada = jadwal.id_armada WHERE tanggal > NOW() ORDER BY id_jadwal ASC;");
                        ?>
                  <tr>
                    <th>ID Jadwal</th>
                    <th>Hari</th>
                    <th>Jam</th>
                    <th>Lokasi</th>
                    <th>Kota Keberangkatan</th>
                    <th>Jenis Armada</th>
                    <th>Tanggal</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  while ($itemJadwal = mysqli_fetch_array($resultJadwal)) { ?>
                    <tr>
                      <td><?= $itemJadwal['id_jadwal'] ?></td>
                      <td><?= $itemJadwal['hari'] ?></td>
                      <td><?= $itemJadwal['lokasi'] ?></td>
                      <td><?= $itemJadwal['kotaKeberangkatan'] ?></td>
                      <td><?= $itemJadwal['jenisArmada'] ?></td>
                      <td><?= $itemJadwal['tanggal'] ?></td>
                      <td>
                        <a href="edit-jadwal-admin.php?id_input=<?= $itemJadwal['id_jadwal'] ?>" onclick="" class="btn btn-info">Edit</a>
                        <a href="jadwalAdmin/deleteJadwal.php?id_input=<?= $itemJadwal['id_jadwal'] ?>" onclick="" class="btn btn-info">Delete</a>
                      </td>
                    </tr>
                  <?php
                  } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid mt-3">
      <div class="row d-flex justify-content-center">
        <div class="col-sm-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Ajuan Pembatalan</h5>
              <hr>
              <table id="tabel-data-pembatalan" class="table table-striped" style="width:100%">
                <thead><?php
                        $resultPembatalan = mysqli_query($koneksi, "SELECT id_request, user.username AS username FROM `requestpembatalan` INNER JOIN `user` ON user.id_pelanggan = requestpembatalan.id_pelanggan WHERE status = 'DIAJUKAN' ORDER BY id_request ASC;");
                        ?>
                  <tr>
                    <th>ID Request</th>
                    <th>Username</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  while ($itemPembatalan = mysqli_fetch_array($resultPembatalan)) { ?>
                    <tr>
                      <td><?= $itemPembatalan['id_request'] ?></td>
                      <td><?= $itemPembatalan['username'] ?></td>
                      <td>
                        <a href="cekAlasan.php?id_request=<?= $itemPembatalan['id_request'] ?>" onclick="" class="btn btn-info">Lihat Alasan</a>
                      </td>
                    </tr>
                  <?php
                  } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid mt-3">
      <div class="row d-flex justify-content-center">
        <div class="col-sm-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">User</h5>
              <hr>
              <table id="tabel-data-user" class="table table-striped" style="width:100%">
                <thead><?php
                        $resultUser = mysqli_query($koneksi, "SELECT * FROM `user` WHERE userLevel != 'ADMIN' ORDER BY id_pelanggan ASC");
                        ?>
                  <tr>
                    <th>Username</th>
                    <th>Nama Lengkap</th>
                    <th>No telepon</th>
                    <th>Email</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  while ($itemUser = mysqli_fetch_array($resultUser)) { ?>
                    <tr>
                      <td><?= $itemUser['username'] ?></td>
                      <td><?= $itemUser['namaLengkap'] ?></td>
                      <td><?= $itemUser['noTelepon'] ?></td>
                      <td><?= $itemUser['email'] ?></td>
                      <td>
                        <a href="edit-user-admin.php?id_input=<?= $itemUser['id_pelanggan'] ?>" onclick="" class="btn btn-info">Edit</a>
                        <a href="userAdmin/deleteUser.php?id_input=<?= $itemUser['id_pelanggan'] ?>" onclick="" class="btn btn-info">Delete</a>
                      </td>
                    </tr>
                  <?php
                  } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid mt-3">
      <div class="row d-flex justify-content-center">
        <div class="col-sm-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Armada</h5>
              <div class="row">
                <div class="col-sm-12">
                  <a class="btn btn-success " target="__blank" href="requiryJadwal.php">Add</a>
                </div>
                          
              </div>
              <hr>
              <table id="tabel-data-armada" class="table table-striped" style="width:100%">
                <thead><?php
                        $resultArmada = mysqli_query($koneksi, "SELECT * FROM `armada` ORDER BY id_armada ASC");
                        ?>
                  <tr>
                    <th>ID Armada</th>
                    <th>Jenis Armada</th>
                    <th>Kapastias</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  while ($itemArmada = mysqli_fetch_array($resultArmada)) { ?>
                    <tr>
                      <td><?= $itemArmada['id_armada'] ?></td>
                      <td><?= $itemArmada['jenisArmada'] ?></td>
                      <td><?= $itemArmada['kapasitas'] ?></td>
                      <td><?= $itemArmada['harga'] ?></td>
                      <td>
                        <a href="edit-armada-admin.php?id_input=<?= $itemArmada['id_armada'] ?>" onclick="" class="btn btn-info">Edit</a>
                        <a href="armadaAdmin/deleteArmada.php?id_input=<?= $itemArmada['id_armada'] ?>" onclick="" class="btn btn-info">Delete</a>
                      </td>
                    </tr>
                  <?php
                  } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php include "footer.php"; ?>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="themejs/highcharts.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/highcharts-3d.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <?php
    $tanggalchart = mysqli_query($koneksi, "SELECT  tanggal FROM pemesanan GROUP BY tanggal;
      ");
    ?>
    <script type="text/javascript">
      $(document).ready(function() {
        $('#tabel-data-jadwal').DataTable({
          order: [
            [2, 'desc']
          ],
        });

        $('#tabel-data-pembatalan').DataTable({
          order: [
            [2, 'desc']
          ],
        });

        $('#tabel-data-user').DataTable({
          order: [
            [2, 'desc']
          ],
        });
        $('#tabel-data-armada').DataTable({
          order: [
            [2, 'desc']
          ],
        });
      });
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src=" https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
    <script type="text/javascript">
      Highcharts.chart('grafik', {
        title: {
          text: 'Angka Penjualan'
        },
        subtitle: {
          text: 'per hari'
        },
        yAxis: {
          title: {
            text: 'Jumlah Penumpang'
          }
        },
        xAxis: {
          type: 'category',
          accessibility: {
            rangeDescription: 'Waktu'
          }
        },
        tooltip: {
          pointFormat: '{point.y} Meter'
        },
        legend: {
          layout: 'vertical',
          align: 'right',
          verticalAlign: 'middle'
        },
        plotOptions: {
          series: {
            label: {
              connectorAllowed: false
            }
          }
        },
        series: [{
          name: 'Angka Penjualan',
          lineWidth: 2,
          data: <?= $json ?>
        }],
        responsive: {
          rules: [{
            condition: {
              maxWidth: 500
            },
            chartOptions: {
              legend: {
                layout: 'horizontal',
                align: 'center',
                verticalAlign: 'bottom'
              }
            }
          }]
        },
        chart: {
          zoomType: 'x'
        }

      });
    </script>
</body>
	

</html>
