<?php 
class jenis_produk{
    private $koneksi;

    public function __construct(){
        global $dbh; // panggil instance object di koneksi.php
        $this->koneksi = $dbh;
    }
    public function datajenisproduk(){
      $sql = "SELECT * FROM jenis_produk";

      // prepare statment PDO
      $ps = $this->koneksi->prepare($sql);
      $ps->execute();
      $rs = $ps->fetchAll();
      return $rs;
    }
}
?>