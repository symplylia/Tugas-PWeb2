<?php
//Definisi Class
class Mahasiswa {
    //Atribut atau Properties
    public $nama;
    public $nim;
    public $jurusan;

    //Constructor
    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim; 
        $this->jurusan = $jurusan;
    }

    //Mengambil nilai atribut
    public function getNim() {
        return $this->nim;
    }

    //Mengubah nilai atribut
    public function setNim($nim) {
        $this->nim = $nim;
    }

    //Metode atau Function
    public function tampilData() {
        return "Nama: $this->nama, Nim: $this->nim, Jurusan: $this->jurusan";
    }
}

//Instansiasi Objek
$mahasiswa = new Mahasiswa("Putri Aulia", "230202042", "Jurusan Komputer Bisnis");

//Mengubah nilai atribut
$mahasiswa->setNim("123456789");

//Tampil data
echo $mahasiswa->tampilData();
?>