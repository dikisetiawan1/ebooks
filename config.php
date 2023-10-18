<?php




// sesuaikan dengan server anda
$host = 'localhost'; // host server
$user = 'root'; // username server
$pass = ''; // password server, kalau pakai xampp kosongin saja
$dbname = 'db_food'; // nama database anda

$conn = mysqli_connect($host, $user, $pass, $dbname);


// cek koneksi

if (!$conn) {
    echo ("Koneksi Gagal" . mysqli_connect_error());
    exit();
};

// $view = 'view/index.php';
