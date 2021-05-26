<?php 
include 'model.php'; 
//tabel absen
if (isset($_POST['submit_simpan_absen'])) { 
    $id_absen = $_POST['id_absen']; 
    $tgl_absen = $_POST['tgl_absen']; 
    $absen_masuk = $_POST['absen_masuk']; 
    $absen_keluar =$_POST['absen_keluar'];
    $id_dosen=$_POST['id_dosen'];
    $sesi=$_POST['sesi'];
    $kelas_sesi=$_POST['kelas_sesi'];
    $model = new Model(); 
    $model->insert($id_absen, $tgl_absen, $absen_masuk, $absen_keluar, $id_dosen, $sesi, $kelas_sesi); 
    header('location:index.php'); 
}

if (isset($_POST['submit_edit_absen'])) { 
    $id_absen = $_POST['id_absen']; 
    $tgl_absen = $_POST['tgl_absen']; 
    $absen_masuk = $_POST['absen_masuk']; 
    $absen_keluar =$_POST['absen_keluar'];
    $id_dosen=$_POST['id_dosen'];
    $sesi=$_POST['sesi'];
    $kelas_sesi=$_POST['kelas_sesi'];
    $model = new Model(); 
    $model->update_absen($id_absen, $tgl_absen, $absen_masuk, $absen_keluar, $id_dosen, $sesi, $kelas_sesi); 
    header('location:index.php'); 
}

if (isset($_GET['id_absen'])) { 
    $id_absen = $_GET['id_absen']; 
    $model = new Model(); 
    $model->delete_absen($id_dosen); 
    header('location:index.php'); 
}