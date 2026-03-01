<?php

include "koneksi.php";

$nama = $_POST['nama'];
$nim = $_POST['nim'];
$matkul = $_POST['matkul'];
$judul = $_POST['judul'];

$file = $_FILES['file']['name'];
$tmp  = $_FILES['file']['tmp_name'];

$folder = "uploads/";

// buat folder jika belum ada
if(!is_dir($folder)){
mkdir($folder);
}

// upload file
move_uploaded_file($tmp, $folder.$file);

// simpan database
mysqli_query($conn,"INSERT INTO tugas
VALUES('','$nama','$nim','$matkul','$judul','$file',NOW())");

echo "<h2>Tugas Berhasil Diupload</h2>";

echo "<a href='index.html'>Kembali ke Home</a><br><br>";

echo "<a href='data.php'>Lihat Data Tugas</a>";

?>