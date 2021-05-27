<!doctype html> 
<html lang="en">  
        <head> 
        <title>Tambah Data Absen</title> 
        </head>  
    <body> 
    <h1>Tambah</h1> 
    <a href="index.php">Kembali</a> 
    <br><br> 
        <form action="proccess.php" method="post"> 
            <label>Id Absen</label> 
            <br> 
            <input type="text" name="id_absen"> 
            <br> 
            <label>Tanggal Absen</label> 
            <br> 
            <input type="date" name="tgl_absen"> 
            <br> 
            <label>Absen Masuk</label> 
            <br> 
            <input type="time" name="absen_masuk"> 
            <br> 
            <label>Absen Keluar</label> 
            <br> 
            <input type="time" name="absen_keluar"> 
            <br> 
            <label>Id Dosen</label> 
            <br>
            <input type="text" name="id_dosen">
            <br>
            <label>Sesi</label> 
            <br>
            <input type="text" name="sesi">
            <br>
            <label>Kelas Sesi</label> 
            <br>
            <input type="text" name="kelas_sesi">
            <br><br>
            <button type="submit" name="submit_simpan_absen">Submit</button> 
            <button type="reset">Reset</button> 
        </form> 
    </body>  
</html> 