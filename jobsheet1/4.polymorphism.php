<?php
// Kelas induk Pengguna
class Pengguna {
    protected $nama, $nim, $nip;

    // Metode aksesFitur() dari kelas induk, yang dapat di-override oleh kelas turunan
    public function aksesFitur() {
        echo "Akses fitur pengguna <br>"; // Menampilkan pesan akses fitur pengguna secara umum
    }

    // Getter untuk mengambil nilai properti nama
    public function getNama() {
        return $this->nama;
    }

    // Setter untuk mengubah nilai properti nama
    public function setNama($nama) {
        $this->nama = $nama;
    }
}

// Kelas Dosen mewarisi dari kelas Pengguna
class Dosen extends Pengguna {
    // Override metode aksesFitur() dari kelas induk
    public function aksesFitur() {
        // Mengakses nama dosen dengan memanggil getNama() dan menampilkan pesan khusus untuk dosen
        echo "Akses fitur Dosen: " .$this->getNama(). " <br>";
    }
}

// Kelas Mahasiswa mewarisi dari kelas Pengguna
class Mahasiswa extends Pengguna {
    // Override metode aksesFitur() dari kelas induk
    public function aksesFitur() {
        // Mengakses nama mahasiswa dengan memanggil getNama() dan menampilkan pesan khusus untuk mahasiswa
        echo "Akses fitur Mahasiswa: " .$this->getNama(). " <br>";
    }
}

// Membuat objek Pengguna
$pengguna = new Pengguna();
$pengguna->aksesFitur(); // Memanggil metode aksesFitur() dari kelas Pengguna yang tidak di-override

// Membuat objek Dosen dan menetapkan nama menggunakan setNama()
$dosen = new Dosen();
$dosen->setNama("Pak Abdau"); // Mengubah properti nama untuk objek dosen
$dosen->aksesFitur(); // Memanggil metode aksesFitur() yang telah di-override di kelas Dosen

// Membuat objek Mahasiswa dan menetapkan nama menggunakan setNama()
$mahasiswa = new Mahasiswa();
$mahasiswa->setNama("Putri Aulia"); // Mengubah properti nama untuk objek mahasiswa
$mahasiswa->aksesFitur(); // Memanggil metode aksesFitur() yang telah di-override di kelas Mahasiswa
?>
