<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'mahasiswa2';

 $conn = mysqli_connect($servername, $username, $password, $database);

function tampil($table) {
    global $conn;
    $query = "SELECT * FROM $table";
    $result = mysqli_query($conn, $query);
    return $result;
}

// if($conn) {
//     echo "Koneksi Berhasil!";
// } else {
//     echo "Koneksi Gagal! : ". mysqli_connect_error();
// }



