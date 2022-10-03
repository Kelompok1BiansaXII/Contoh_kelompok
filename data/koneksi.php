<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "website"; 
// $database = diganti dengan nama database yg telah dibuat

$kon = mysqli_connect($hostname, $username, $password, $database);
if (!$kon) {
    die("Koneksi Tidak Berhasil: " . mysqli_connect_error());
}
?>
