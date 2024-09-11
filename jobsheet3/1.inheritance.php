<?php
// Kelas dasar Person untuk merepresentasikan orang
class Person {
    protected $nama;

    // Constructor untuk menginisialisasi nama mahasiswa
    public function __construct($nama) {
        $this->nama = $nama;
    }

     // Metode untuk mendapatkan nama orang
    public function getNama() {
        return $this->nama;
    }
}

// Kelas Student yang mewarisi dari kelas Person
class Student extends Person {
    private $studentID;

    // Constructor untuk menginisialisasi nama dan ID mahasiswa saat objek dibuat
    public function __construct($nama, $studentID) {
        parent::__construct($nama);
        $this->studentID = $studentID;
    }

    // Metode untuk mendapatkan ID mahasiswa
    public function getStudentID() {
        return $this->studentID;
    }
}

// Membuat objek Student
$student = new Student("Nama : Putri Aulia", "ID : 123");

// Menampilkan nama mahasiswa dengan memanggil metode getNama() dari kelas parent
echo $student->getNama();
echo "<br>";
// Menampilkan ID mahasiswa dengan memanggil metode getStudentID()
echo $student->getStudentID(); // Output: ID : 123
?>
