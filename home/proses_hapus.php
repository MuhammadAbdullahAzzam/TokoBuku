<?php 
include '+koneksi.php';
$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM buku WHERE id = '$id'");
if($query) {
    echo "<script>alert('Data berhasil dihapus!'); window.location='index.php';</script>";
} else {
    echo "<script>alert('Data gagal dihapus'); window.location='index.php';</script>";
}
?>