<?php 
include '+koneksi.php';

$nama = $_GET['nama'];
$kategori = $_GET['kategori'];
$penerbit = $_GET['penerbit'];
$harga = $_GET['harga'];

$query = mysqli_query($koneksi, "INSERT INTO `buku` (`id` ,`nama`, `kategori`, `penerbit`, `harga`) VALUES (null, '$nama', '$kategori', '$penerbit', '$harga')");

if($query) {
    echo "<script>alert('Data berhasil ditambahkan!'); window.location='index.php';</script>";
} else {
    echo "<script>alert('Data gagal ditambahkan');</script>";
}
?>