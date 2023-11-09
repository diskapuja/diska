<?php 
$conn = new mysqli("localhost", "root", "", "yt_perpus");

if ($conn->connect_errno) {
  echo "Koneksi Gagal, silahkan coba lihat DB: " . $conn->connect_error;
  exit();
}

?>