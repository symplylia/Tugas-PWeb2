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

    //Metode atau Function tampil data
    public function tampilData() {
        return "Nama: $this->nama, Nim: $this->nim, Jurusan: $this->jurusan";
    }

    //Metode atau function update jurusan
    public function updateJurusan($jurusan_baru) {
        $this->jurusan = $jurusan_baru;
    }
}

//Instansiasi Objek
$mahasiswa = new Mahasiswa("Putri Aulia", "230202042", "Jurusan Komputer Bisnis");

//Update jurusan
$mahasiswa->updateJurusan("JKB");

//Tampil data
echo $mahasiswa->tampilData();
?>