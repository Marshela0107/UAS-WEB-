<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'restoran_db';

$conn = mysqli_connect($host, $user, $pass, $dbname);

if (!$conn) {
    die('Koneksi gagal: ' . mysqli_connect_error());
}
?>
