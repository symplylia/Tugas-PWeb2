<?php
//Definisi Class
class Dosen {
    public $nama;
    public $nip;
    public $mataKuliah;

    //Constructor
    public function __construct($nama, $nip, $mataKuliah) {
        $this->nama = $nama;
        $this->nip = $nip;
        $this->mataKuliah = $mataKuliah;
    }

     //Metode atau function
    public function tampilkanDosen() {
        return "Nama: $this->nama". "<br>" . "Nip: $this->nip". "<br>" . "MataKuliah $this->mataKuliah". "<hr>";
    }
}

//Instansiasi Objek
$dosen1 = new Dosen("Annas Setiawan", "09876543", "Basis Data");
echo $dosen1->tampilkanDosen();
?>