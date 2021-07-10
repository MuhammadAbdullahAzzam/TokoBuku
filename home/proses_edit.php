<?php 
include '+koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$kategori = $_POST['kategori'];
$penerbit = $_POST['penerbit'];
$harga = $_POST['harga'];

$query = mysqli_query($koneksi, "UPDATE buku SET nama='$nama', kategori='$kategori', penerbit='$penerbit', harga='$harga' WHERE id='$id'");

if($query) {
    echo "<script>alert('Data berhasil diedit!'); window.location='index.php';</script>";
} else {
    echo "<script>alert('Data gagal diedit');</script>";
}
?>