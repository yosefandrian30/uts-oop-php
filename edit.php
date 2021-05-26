<?php
$id_absen = $_GET['id_absen'];
include 'model.php';
$model = new Model();
$data = $model->edit_absen($id_absen);?>
<!doctype html>
<html lang="en">
<head>
	<title>Edit Daftar Absen Mahasiswa</title>
</head>

<!doctype html>
<html lang="en">

<head>
	<title>Edit Daftar Absen Mahasiswa</title>
</head>

<body>
	<h1>Edit Nilai Mahasiswa</h1>
	<a href="index.php">Kembali</a>
	<br><br>
	<form action="proccess.php" method="post">
		<label>ID Absen</label>
		<br>
		<input type="text" name="id_absen" value="<?php echo $data->id_absen?>">
		<br>
		<label>Tanggal Absen</label>
		<br>
		<input type="text" name="tgl_absen" value="<?php echo $data->tgl_absen ?>">
		<br>
		<label>Absen Masuk</label>
		<br>
		<input type="time" name="absen_masuk" value="<?php echo $data->absen_masuk ?>">
		<br>
        <label>Absen Keluar</label>
		<br>
		<input type="time" name="absen_keluar" value="<?php echo $data->absen_keluar ?>">
		<br>
		<label>ID Dosen</label>
		<br>
		<input type="text" name="id_dosen" value="<?php echo $data->id_dosen ?>">
		<br>
		<label>Sesi</label>
		<br>
		<input type="text" name="sesi" value="<?php echo $data->sesi ?>">
		<br>
		<label>Kelas Sesi</label>
		<br>
		<input type="text" name="kelas_sesi" value="<?php echo $data->kelas_sesi ?>">
		<br><br>
		<button type="submit" name="submit_edit">Submit</button>
	</form>
</body>
</html>