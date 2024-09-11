<?php
abstract class Pengguna {
    protected $nama, $nim, $nip;
    abstract public function aksesFitur();

    public function getNama() {
        return $this->nama;
    }

    public function setNama($nama) {
        $this->nama = $nama;
    }
}

class Dosen extends Pengguna {
    public function aksesFitur() {
        echo "Akses fitur Dosen: " .$this->getNama(). "<br>";
    }
}

class Mahasiswa extends Pengguna {
    public function aksesFitur() {
        echo "Akses fitur Mahasiswa: " .$this->getNama(). " <br>";
    }
}

$dosen = new Dosen();
$dosen->setNama("Pak Abdau");
$dosen->aksesFitur();

$mahasiswa = new Mahasiswa();
$mahasiswa->setNama("Putri Aulia");
$mahasiswa->aksesFitur();
?>