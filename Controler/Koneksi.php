<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "Penjualan";

$koneksi = mysqli_connect($servername, $username, $password, $database);

// Periksa koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}