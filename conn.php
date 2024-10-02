<?php
$servername = "localhost"; //Nama server database
$username = "root";        //Nama pengguna MySQL
$password = "";             //Nama sandi MySQL
$dbname = "pendaftaranmahasiswa"; //Nama database

//Membuat koneksi ke database
$conn = mysqli_connect($servername, $username, $password, $dbname);

//Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>