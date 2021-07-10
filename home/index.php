<?php 
	session_start();
	require 'koneksi.php';
	if($_SESSION['status']!="login"){
		header("location:login.php?pesan=belum_login");
	}
	?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Dashboard - Admin</title>

  <!-- Custom fonts for this template-->
  
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link href="css/custom.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  

</head>

<body id="page-top" style="color: black;">

<?php
require ('koneksi.php');

?>
      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
<h1> Selamat Datang, <?=$_SESSION['nama']?></h1>

<?php require 'user.php'; ?>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="jumbotron text-center bg-primary" style="text-align: center;">
          <h1 class="display-1" style="color: WHITE;"><strong>TOKO BUKU</strong></h1>
	      </div>

	<br />
	

	<div class="text-center">
		<h3>Data Buku</h3>
		<a class="btn btn-primary" href="form_tambah.php">Tambah Buku</a>
	</div>
	<div style="overflow: auto;" class="table-responsive card-body" >
		<table class="table table-bordered table-hover table-primary " style="color: black;">
			<tr class="text-center">
				<th>No.</th>
				<th>Nama Buku</th>
				<th>Kategori</th>
				<th>Penerbit</th>
				<th>Harga</th>
				<th>Diskon</th>
				<th>Opsi</th>			
			</tr>
			<?php 
			include "+koneksi.php";
			$query = mysqli_query($koneksi, "SELECT * FROM buku");
			$nomor = 1;
			function rupiah($angka){
				$hasil_rupiah = "Rp " . number_format($angka,2,',','.');
				return $hasil_rupiah;
			}
			while($data = mysqli_fetch_array($query)) { ?>
				<tr class="text-center">
					<td align="center"><?php echo $nomor++; ?>.</td>
					<td><?php echo $data['nama']; ?></td>
					<td><?php echo $data['kategori']; ?></td>
					<td><?php echo $data['penerbit']; ?></td>
					<td><?php echo rupiah($data['harga']); ?></td>
					<td><?php echo rupiah(0.1 * $data['harga']); ?></td>
					<td width="90px" align="center">
            <a class="btn btn-success" href="form_detail.php?id=<?php echo $data['id']; ?>">Detail</a><br>
						<a class="btn btn-primary mt-2" href="form_edit.php?id=<?php echo $data['id']; ?>">Edit</a><br>
						<a class="btn btn-danger mt-2" href="proses_hapus.php?id=<?php echo $data['id']; ?>" onclick="return confirm('Yakin hapus data?')">Hapus</a>					
					</td>
				</tr>
			<?php
			} ?>
		</table>
	</div>
      <!-- End of Main Content -->
    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

<?php require 'logout-modal.php'; ?>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

</body>

</html>
