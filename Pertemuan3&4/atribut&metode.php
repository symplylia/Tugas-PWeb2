<?php
//Menambah atribut dan metode
class Buku {
    public $judul;
    public $penulis;

    public function __construct($judul, $penulis) {
    $this->judul = $judul;
    $this->penulis = $penulis;
    }

     //Metode atau function
    public function tampilkanInfo() {
    return "Buku: $this->judul, ditulis oleh $this->penulis.";
    }
}

$buku1 = new Buku("Pemrograman PHP", "Jhon Doe");
echo $buku1->tampilkanInfo();
?>