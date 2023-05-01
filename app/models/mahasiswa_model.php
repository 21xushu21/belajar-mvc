<?php 
class Mahasiswa_model {
    private $mhs = [
        [
            "nama" => "madon",
            "alamat" => "jlmndsf",
            "email" => "gadfh@daj.com",
        ],
        [
            "nama" => "agus",
            "alamat" => "hgjfjyt",
            "email" => "gaedasf@daj.com",
        ],        
        [
            "nama" => "yaya",
            "alamat" => "asdfasdf",
            "email" => "asdfasd@daj.com",
        ],
        ];
    public function getAllMahasiswa() {
        return $this->mhs;
    }
}