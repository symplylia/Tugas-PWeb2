<?php
// Kelas dasar Hewan untuk merepresentasikan hewan
class Hewan {
    protected $nama;

    // Constructor untuk menginisialisasi nama hewan
    public function __construct($nama){
        $this->nama = $nama;
    }

    // Metode untuk mendapatkan nama hewan
    public function getNama() {
        return $this->nama;
    }
}

// Kelas Anjing yang mewarisi dari kelas Hewan
class Anjing extends Hewan {
    // Metode untuk membuat suara Anjing
    public function buatSuara() {
        return "Woof!";
    }
}

// Kelas Kucing yang mewarisi dari kelas Hewan
class Kucing extends Hewan {
    // Metode untuk membuat suara Kucing
    public function buatSuara() {
        return "Meow!";
    }
}

// Membuat objek Anjing dengan nama "Bobby"
$anjing = new Anjing("Bobby");
echo $anjing->getNama() . " says " . $anjing->buatSuara(); // Output: Bobby says Woof!
