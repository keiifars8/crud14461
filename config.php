<?php
$host = "database-1.czdp5w75g4pu.us-east-1.rds.amazonaws.com";
$user = "admin";
$pass = "american0sug4rya";
$db   = "db_siswa";

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
