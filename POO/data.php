<?php
include "koneksi.php";
?>

<!DOCTYPE html>
<html>
<head>

<title>Daftar Tugas</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-5">

<h2 class="text-center">
Daftar Tugas Terkumpul
</h2>

<table class="table table-striped table-hover mt-4">

<thead class="table-dark">

<tr>
<th>No</th>
<th>Nama</th>
<th>NIM</th>
<th>Mata Kuliah</th>
<th>Judul</th>
<th>File</th>
</tr>

</thead>

<tbody>

<?php

$no=1;

$data = mysqli_query($conn,"SELECT * FROM tugas");

while($d = mysqli_fetch_array($data)){

?>

<tr>

<td><?php echo $no++; ?></td>

<td><?php echo $d['nama']; ?></td>

<td><?php echo $d['nim']; ?></td>

<td><?php echo $d['matkul']; ?></td>

<td><?php echo $d['judul']; ?></td>

<td>

<td>

<a href="uploads/<?php echo $d['file']; ?>" class="btn btn-success btn-sm">
Download
</a>

<a href="delete.php?id=<?php echo $d['id']; ?>" 
class="btn btn-danger btn-sm"
onclick="return confirm('Yakin mau hapus tugas?')">
Delete
</a>

</td>

</td>

</tr>

<?php } ?>

</tbody>

</table>

<div class="text-center mt-4">

<a href="index.html" class="btn btn-primary">
Kembali ke Home
</a>

</div>

</div>

</body>

</html>