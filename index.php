<?php 
include 'model.php'; 
$model = new Model(); 
$index = 1; 
?> 
<!doctype html> 
<html lang="en">  
  <head> 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" 
  rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Daftar Absen Mahasiswa</title> 
  </head>  
<body> 
 
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"> PI 2</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" 
    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link" aria-current="page" href="index.php">Daftar Absen Mahasiswa</a>
        <a class="nav-link" href="dosen.php">Dosen</a>
        <a class="nav-link" href="jadwal.php">Jadwal</a>
        <a class="nav-link" href="matakuliah.php">Mata Kuliah</a>
        <a class="nav-link" href="prodi.php">Prodi</a>
      </div>
    </div>
  </div>
</nav>
<div class="container">
   
      <h1><center>Daftar Absen Mahasiswa</center></h1> 
       <a href="create.php">Tambah Data</a> 
       <br> 
       <a href="print.php" target="_blank">Cetak Data</a> 
      <br><br> 
    
      
        <table class="table table-bordered table-striped"> 
          <thead class="text-center"> 
            <tr> 
                <th>ID Absen</th> 
                <th>Tanggal Absen</th> 
                <th>Absen Masuk</th> 
                <th>Absen Keluar</th> 
                <th>ID Dosen</th> 
                <th>Sesi</th> 
                <th>Kelas Sesi</th>
                <th>Aksi</th>   
                 
            </tr> 
          </thead> 
          <tbody class="text-center"> 
          <?php 
          $result = $model->tampil_absen(); 
          if ( !empty($result)) { 
            foreach ($result as $data) : ?> 
              <tr> 
                <td><?= $index++            ?></td> 
                <td><?= $data->tgl_absen    ?></td> 
                <td><?= $data->absen_masuk  ?></td> 
                <td><?= $data->absen_keluar ?></td> 
                <td><?= $data->id_dosen     ?></td> 
                <td><?= $data->sesi         ?></td> 
                <td><?= $data->kelas_sesi   ?></td> 
                <td> 
                   <a name="edit" id="edit"  class="btn btn-success" href="edit.php?id_absen=<?= $data->id_absen ?>">Edit</a> 
                   <a  name="hapus" id="hapus" class="btn btn-danger" href="proccess.php?id_absen=<?= $data->id_absen ?>">Delete</a> 
                </td> 
              </tr> 
            <?php endforeach; 
        } else{ ?> 
              <tr> 
                <td colspan="9">Belum ada data pada daftar absen mahasiswa.</td> 
              </tr> 
              <?php } ?> 
          </tbody> 
        </table> 
      </div>
  </div>
</body>  
</html> 