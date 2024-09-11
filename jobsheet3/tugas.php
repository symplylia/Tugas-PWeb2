<?php
// Kelas induk Person
class Person {
    protected $nama;
    protected $role;

    // Constructor untuk menginisialisasi nama dan role
    public function __construct($nama, $role) {
        $this->nama = $nama;
        $this->role = $role;
    }

    // Getter untuk nama
    public function getNama() {
        return $this->nama;
    }

    // Metode yang akan di-override oleh kelas anak
    public function getRole() {
        return $this->role;
    }
}

// Kelas Dosen mewarisi dari Person
class Dosen extends Person {
    private $nidn; 

    // Constructor untuk inisialisasi nama, nidn, dan role
    public function __construct($nama, $nidn) {
        parent::__construct($nama, "Dosen"); 
        $this->nidn = $nidn; 
    }

    // Getter untuk NIDN
    public function getNIDN() {
        return $this->nidn;
    }
}

// Kelas Mahasiswa mewarisi dari Person
class Mahasiswa extends Person {
    private $nim; // Menggunakan encapsulation dengan atribut private

    // Constructor untuk inisialisasi nama, nim, dan role
    public function __construct($nama, $nim) {
        parent::__construct($nama, "Mahasiswa"); 
        $this->nim = $nim; 
    }

    // Getter untuk NIM
    public function getNIM() {
        return $this->nim;
    }
}

// Kelas abstrak Jurnal
abstract class Jurnal {
    protected $judul;

    // Constructor untuk inisialisasi judul jurnal
    public function __construct($judul) {
        $this->judul = $judul;
    }

    // Metode abstrak untuk pengajuan jurnal
    abstract public function ajukanJurnal();
}

// Kelas JurnalDosen yang mewarisi dari Jurnal
class JurnalDosen extends Jurnal {
    private $nidn;

    // Constructor untuk inisialisasi judul dan nidn
    public function __construct($judul, $nidn) {
        parent::__construct($judul); // Memanggil constructor dari kelas abstrak
        $this->nidn = $nidn;
    }

    // Implementasi metode ajukanJurnal
    public function ajukanJurnal() {
        return "Jurnal Dosen berjudul '$this->judul' dengan NIDN $this->nidn diajukan.";
    }
}

// Kelas JurnalMahasiswa yang mewarisi dari Jurnal
class JurnalMahasiswa extends Jurnal {
    private $nim;

    // Constructor untuk inisialisasi judul dan nim
    public function __construct($judul, $nim) {
        parent::__construct($judul); // Memanggil constructor dari kelas abstrak
        $this->nim = $nim;
    }

    // Implementasi metode ajukanJurnal
    public function ajukanJurnal() {
        return "Jurnal Mahasiswa berjudul '$this->judul' dengan NIM $this->nim diajukan.";
    }
}

// Membuat objek Dosen
$dosen = new Dosen("Lutfi Syafirullah", "101001");
// Membuat objek Mahasiswa
$mahasiswa = new Mahasiswa("Putri Aulia", "230202042");

// Menampilkan role dan data dosen
echo $dosen->getNama() . " - " . $dosen->getRole() . ", NIDN: " . $dosen->getNIDN() . "<br>";

// Menampilkan role dan data mahasiswa
echo $mahasiswa->getNama() . " - " . $mahasiswa->getRole() . ", NIM: " . $mahasiswa->getNIM() . "<hr>";

// Membuat objek JurnalDosen dan JurnalMahasiswa
$jurnalDosen = new JurnalDosen("AI Research", "101001");
$jurnalMahasiswa = new JurnalMahasiswa("Machine Learning", "230202042");

// Menampilkan pengajuan jurnal
echo $jurnalDosen->ajukanJurnal() . "<br>";
echo $jurnalMahasiswa->ajukanJurnal() . "<br>";
?>
