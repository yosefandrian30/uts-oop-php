<!doctype html>
<html lang="en">
<head>
	<title>Tambah Matakuliah</title>
</head>

<body>
	<h1>Tambah Mata Kuliah</h1>
	<a href="matakuliah.php">Kembali</a>
	<br><br>
	<form action="proccess.php" method="post">
		<label>Id Mata Kuliah</label>
		<br>
		<input type="text" name="id_mk">
		<br>
		<label>Nama Mata Kuliah</label>
		<br>
		<input type="text" name="nama_mk">
		<br>
		<label>SKS</label>
		<br>
		<input type="text" name="sks">
		<br>
		<label>Semester</label>
		<br>
		<input type="text" name="semester">
		<br>
		<label>Id Prodi</label>
		<br>
		<input type="text" name="id_prodi">
		<br><br>
		<button type="submit" name="submit_simpan_matakuliah">Submit</button>
		<button type="reset">Reset</button>
	</form>
</body>
</html>