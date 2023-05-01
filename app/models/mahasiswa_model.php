<?php 
class Mahasiswa_model {
    private $dbh; //database handler
    private $stmt;
    public function __construct() {
        // data source name
        $dsn = 'msyql:host=localhost;dbname=phpmvc';
        // pengecekan koneksi
        try {
            $this->dbh =new PDO ($dsn,'root','');
        } catch(PDOException $e) {
            die($e->getMessage());
        }
    }
    public function getAllMahasiswa() {
        $this->stmt = $this->dbh->prepare('select * FROM mahasiswa');
        $this->stmt->execute(); //menjalankan qeerynya
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}