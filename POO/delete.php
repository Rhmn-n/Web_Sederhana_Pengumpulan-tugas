<?php
include "koneksi.php";

$id = $_GET['id'];

// Ambil nama file dulu
$data = mysqli_query($conn,"SELECT file FROM tugas WHERE id='$id'");
$row = mysqli_fetch_assoc($data);

// Hapus file dari folder uploads
unlink("uploads/".$row['file']);

// Hapus data dari database
mysqli_query($conn,"DELETE FROM tugas WHERE id='$id'");

echo "
<script>
alert('Tugas berhasil dihapus');
window.location='lihat_tugas.php';
</script>
";
?>