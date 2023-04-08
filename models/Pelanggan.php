<?php 
class Pelanggan{
    private $koneksi;

    public function __construct(){
        global $dbh; // panggil instance object di koneksi.php
        $this->koneksi = $dbh;
    }

    
    public function dataPelanggan(){
        $sql = "SELECT c.*, k.nama AS plngn
        FROM pelanggan c
        INNER JOIN kartu k ON k.id = c.kartu_id
        ORDER BY c.id DESC";

        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }
}
?>