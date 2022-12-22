<head>
    <meta charset="uts-8">
</head>
<?php
ob_start();
// set session dan menghapus session username apabila ada
if (isset($_SESSION['username'])) {
    unset($_SESSION['username']);
}


// connect ke mySQL
include "koneksi.php";

// buat variable
$announcement = "";
$usernameLogin = "";
$passwordLogin = "";

// check username & password match
if (isset($_POST['login'])) {
    $query = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$_POST[username]'");
    $fetchArray = mysqli_fetch_array($query);

    // apabila username yang diinput tidak ada di database
    if (!isset($fetchArray['username'])) {
        $announcement = "Username tidak tersedia";
    }

    // apabila username tersedia tapi password tidak sesuai
    elseif($fetchArray['password'] != md5($_POST['password'])){
		$announcement = "Password tidak match dengan username";
	}

    // apabila username dan password tersedia dan sesuai
    else {
        $announcement = "";
    }

    // set session dan masuk ke tabel data user
    if ($announcement == "") {
        $_SESSION['username'] = $_POST['username'];

        // set cookies / remember me
        if (isset($_POST['remember'])) {
			setcookie("username", $_POST['username'], time() + (60*60*24));
		}
    header("location:index.php");
    }
}

// auto login apabila sudah ada cookies
if (isset($_COOKIE['username'])) {
    $_SESSION['username'] = $_COOKIE['username'];
}
?>