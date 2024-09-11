<?php
//Definisi kelas
class Mobil {
    //Atribut atau properties
    public $merk;
    public $warna;

    //Constructor
    public function __construct($merk, $warna) {
        $this->merk = $merk;
        $this->warna = $warna;
    }

    //Metode atau function
    public function deskripsi() {
        return "Mobil ini adalah $this->merk berwarna $this->warna.";
    }
}

//Instansiasi objek
$mobil1 = new Mobil("Toyota", "Hitam");
echo $mobil1->deskripsi();
?>