<!doctype html> 
<html lang="en">  
        <head> 
        <title>Tambah Jadwal Mahasiswa</title> 
        </head>  
    <body> 
    <h1>Tambah</h1> 
    <a href="jadwal.php">Kembali</a> 
    <br><br> 
        <form action="proccess.php" method="post"> 
            <label>ID</label> 
            <br> 
            <input type="text" name="id"> 
            <br> 
            <label>Id Dosen</label> 
            <br> 
            <input type="text" name="id_dosen"> 
            <br> 
            <label>Hari</label> 
            <br> 
            <input type="text" name="hari"> 
            <br> 
            <label>Tahun Akademik</label> 
            <br> 
            <input type="text" name="thn_akademik"> 
            <br> 
            <label>Semester</label> 
            <br> 
            <input type="text" name="semester">
            <br>
            <label>Id Mata Kuliah</label> 
            <br> 
            <input type="text" name="id_mk"> 
            <br>
            <label>Sesi</label> 
            <br> 
            <input type="text" name="sesi">
            <br>
            <labe>Jam Masuk</label> 
            <br> 
            <input type="time" name="jam_masuk">
            <br>
            <labe>Jam Keluar</label> 
            <br> 
            <input type="time" name="jam_keluar">
            <br>
            <labe>Kelas</label> 
            <br> 
            <input type="text" name="kelas">
            <br>
            <labe>Ruang</label> 
            <br> 
            <input type="text" name="ruang">
            <br>
            <labe>Status</label> 
            <br> 
            <input type="text" name="status">
            <br>
            <labe>Kelas Sesi</label> 
            <br> 
            <input type="text" name="kelas_sesi">
            <br><br> 
            <button type="submit" name="submit_simpan_mahasiswa">Submit</button> 
            <button type="reset">Reset</button> 
        </form> 
    </body>  
</html> 