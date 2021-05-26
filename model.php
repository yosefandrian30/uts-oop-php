<?php 
include 'connection.php'; 
class Model extends Connection{

    public function __construct() 
    { 
        $this->conn = $this->get_connection(); 
    } 

//tabel absen
    public function insert($id_absen, $tgl_absen, $absen_masuk, $absen_keluar, $id_dosen, $sesi, $kelas_sesi) {
       
    $sql = "INSERT INTO tbabsen (tgl_absen, absen_masuk, absen_keluar, id_dosen, sesi, kelas_sesi) VALUES ('$tgl_absen', '$absen_masuk', '$absen_keluar', '$id_dosen', '$sesi', '$kelas_sesi')"; 
     $this->conn->query($sql);
   }
  
    public function tampil_absen(){ 
       $sql = "SELECT * FROM tbabsen"; 
       $bind = $this->conn->query($sql); 
       while ($obj = $bind->fetch_object()) { 
       $baris[] = $obj; 
       } 
       if(!empty($baris)){ 
           return $baris; 
       } 
   } 
    public function edit_absen($id_absen){ 
       $sql = "SELECT * FROM tbabsen WHERE id_absen='$id_absen'"; 
       $bind = $this->conn->query($sql); 
       while ($obj = $bind->fetch_object()){ 
       $baris = $obj; 
       } 
       return $baris; 
   } 
    public function update_absen($id_absen, $tgl_absen, $absen_masuk, $absen_keluar, $id_dosen, $sesi, $kelas_sesi){ 
       $sql = "UPDATE tbabsen SET id_absen='$id_absen', tgl_absen='$tgl_absen', absen masuk='$absen_masuk', absen_keluar='$absen_keluar', id_dosen='$id_dosen', sesi='$sesi', kelas_sesi='$kelas_sesi') WHERE id_absen='$id_absen'"; 
       $this->conn->query($sql);
   } 
    public function delete_absen($id){ 
       $sql = "DELETE FROM tbabsen WHERE id_absen='$id_absen'"; 
       $this->conn->query($sql);  
    }
}