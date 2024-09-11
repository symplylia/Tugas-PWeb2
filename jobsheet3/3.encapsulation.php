<?php
// Kelas dasar Person untuk merepresentasikan seorang individu
class Person {
    protected $nama;

    // Constructor untuk menginisialisasi nama orang saat objek dibuat
    public function __construct($nama) {
        $this->nama = $nama;
    }

    // Metode getter untuk mengambil nilai nama
    public function getNama() {
        return $this->nama;
    }

    // Metode setter untuk mengubah nilai nama
    public function setNama($nama) {
        $this->nama = $nama;
    }
}

// Kelas Student yang mewarisi dari kelas Person
class Student extends Person {
    private $studentID;

    // Constructor untuk menginisialisasi nama dan ID mahasiswa
    public function __construct($nama, $studentID) {
        parent::__construct($nama); 
        $this->studentID = $studentID; 
    }

    // Override metode getNama untuk menampilkan format khusus untuk Student
    public function getNama() {
        return "Student Name: " . $this->nama;
    }

    // Metode getter untuk mengambil nilai studentID
    public function getStudentID() {
        return $this->studentID;
    }

    // Metode setter untuk mengubah nilai studentID
    public function setStudentID($studentID) {
        $this->studentID = $studentID;
    }
}

// Membuat objek Student
$student = new Student("Putri Aulia", "123");

// Menampilkan nama dan ID Student sebelum diubah
echo $student->getNama(); // Output: Student Name: Putri Aulia
echo "<br>";
echo "Student ID: " . $student->getStudentID(); // Output: Student ID: 123
echo "<hr>";

// Mengubah nama dan studentID menggunakan setter
$student->setNama("Aulia Zuifani");
$student->setStudentID("456");

// Menampilkan nama dan ID Student setelah diubah
echo $student->getNama(); // Output: Student Name: Aulia Zuifani
echo "<br>";
echo "Student ID: " . $student->getStudentID(); // Output: Student ID: 456
?>
