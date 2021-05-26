<!doctype html>
<html lang="en">
<head>
	<title>Prodi</title>
</head>

<body>
	<h1>Prodi</h1>
	<a href="prodi.php">Kembali</a>
	<br><br>
	<form action="proccess.php" method="post">
		<label>Id Prodi</label>
		<br>
		<input type="text" name="id_prodi">
		<br>
		<label>Nama Prodi</label>
		<br>
		<input type="text" name="nama_prodi">
		<br><br>
		
		<button type="submit" name="submit_simpan_prodi">Submit</button>
		<button type="reset">Reset</button>
	</form>
</body>
</html>