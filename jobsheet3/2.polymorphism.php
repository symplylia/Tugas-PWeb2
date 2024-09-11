<?php
// Kelas dasar Person untuk merepresentasikan seorang individu
class Person {
    protected $nama;

    // Constructor untuk menginisialisasi nama orang saat objek dibuat
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

    // Override metode getNama untuk menampilkan format berbeda
    public function getNama() {
        return "Student Name: " . $this->nama; 
    }

    // Metode untuk mendapatkan ID mahasiswa
    public function getStudentID() {
        return $this->studentID; 
    }
}

// Kelas Teacher yang mewarisi dari kelas Person
class Teacher extends Person {
    private $teacherID;

    // Constructor untuk menginisialisasi nama dan ID guru saat objek dibuat
    public function __construct($nama, $teacherID) {
        parent::__construct($nama); 
        $this->teacherID = $teacherID; 
    }

    // Override metode getNama untuk menampilkan format berbeda
    public function getNama() {
        return "Teacher Name: " . $this->nama; // Menampilkan nama dengan format khusus untuk Teacher
    }

    // Metode untuk mendapatkan ID guru
    public function getTeacherID() {
        return $this->teacherID; 
    }
}

// Membuat objek Student
$student = new Student("Putri Aulia", "123");
// Membuat objek Teacher
$teacher = new Teacher("Pak Anton", "T001");

// Menampilkan nama dan ID Student
echo $student->getNama(); // Output: Student Name: Putri Aulia
echo "<br>";
echo "Student ID: " . $student->getStudentID(); // Output: Student ID: 123
echo "<hr>";

// Menampilkan nama dan ID Teacher
echo $teacher->getNama(); // Output: Teacher Name: Pak Ahmad
echo "<br>";
echo "Teacher ID: " . $teacher->getTeacherID(); // Output: Teacher ID: T001
?>