<?php
$host = "localhost";
$user = "root";  // Sesuaikan dengan user MySQL Anda
$pass = "";  // Sesuaikan dengan password MySQL Anda
$db   = "penulis";  // Ganti dengan nama database Anda

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
