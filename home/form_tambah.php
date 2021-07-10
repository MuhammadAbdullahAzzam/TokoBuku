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
		<a class="btn btn-primary" href="index.php"><- Lihat Semua Data</a>

		
		<div class="container text-center">
			<h3>Input Data Buku Baru</h3>
			<form action="proses_tambah.php" method="GET">
				<div class="mb-3">
					<label class="form-label">Nama Buku</label>
					<input type="text" class="form-control" name="nama" id="nama">
				</div>
				<div class="mb-3">
					<label class="form-label">Kategori</label>
					<input type="text" class="form-control" name="kategori" id="kategori">
				</div>
				<div class="mb-3">
					<label class="form-label">Penerbit</label>
					<input type="text" class="form-control" name="penerbit" id="penerbit">
				</div>
				<div class="mb-3">
					<label class="form-label">Harga</label>
					<input type="number" class="form-control" name="harga" id="harga">
				</div>
				<button type="submit" class="btn btn-primary">Simpan</button>
			</form>
		</div>
	</div>
	
</body>
</html>