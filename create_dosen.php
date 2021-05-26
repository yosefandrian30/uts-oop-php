<!doctype html>
<html lang="en">
<head>
	<title>Tentang Dosen</title>
</head>

<body>
	<h1>Tentang Dosen</h1>
	<a href="dosen.php">Kembali</a>
	<br><br>
	<form action="proccess.php" method="post">
		<label>Id Dosen</label>
		<br>
		<input type="text" name="id_dosen">
		<br>
		<label>NIDN</label>
		<br>
		<input type="text" name="nidn">
		<br>
		<label>NIP</label>
		<br>
		<input type="text" name="nip">
		<br>
		<label>Nama Dosen</label>
		<br>
		<input type="text" name="nama_dosen">
		<br>
		<label>Id Prodi</label>
		<br>
		<input type="text" name="id_prodi">
		<br><br>
		<button type="submit" name="submit_simpan_dosen">Submit</button>
		<button type="reset">Reset</button>
	</form>
</body>
</html>