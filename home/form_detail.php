<!DOCTYPE html>
<html>
<head>
	<title>TOKO BUKU</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</head>
<body>
	<div class="jumbotron text-center bg-primary">	
		<h1 class="display-1"><strong>TOKO BUKU</strong></h1>
	</div>

	<br>
	<div class="card-body">
		

		
		<div class="container text-center">
			<h3>Detail Data Buku</h3>
			<form>
                <?php 
                    include "+koneksi.php";
                    $id = $_GET['id'];
                    $query = mysqli_query($koneksi, "SELECT * FROM buku WHERE id = '$id'");
                    $data = mysqli_fetch_array($query);
                ?>
				<div class="mb-3 mt-5">
                    <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
					<label class="form-label">Nama Buku</label>
                    <h2><?php echo $data['nama'] ?></h2>
				</div>
				<div class="mb-3">
					<label class="form-label">Kategori Buku</label>
                    <h2><?php echo $data['kategori'] ?></h2>
				</div>
				<div class="mb-3">
					<label class="form-label">Penerbit</label>
                    <h2><?php echo $data['penerbit'] ?></h2>
				</div>
				<div class="mb-3">
					<label class="form-label">Harga</label>
                    <h2><?php echo $data['harga'] ?></h2>
				</div>
                <div class="mt-5">
                <a class="btn btn-primary" href="index.php"><- Lihat Semua Data</a>
                <button class="btn btn-primary" onClick="window.print()">Cetak Data</button>
                </div>
			</form>
		</div>
	</div>
	
</body>
</html>