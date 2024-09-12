# Jobsheet 3 : Menerapkan Konsep Inheritance, Polymorphism, Encapsulation, dan Abstraction dalam PHP
# Tujuan
Pada jobsheet ini diharapkan setiap mahasiswa dapat menerapkan prinsip OOP pada pemrograman PHP melalui tugas yang mengintegrasikan konsep Inheritance, Polymorphism, Encapsulation, dan Abstraction.

# Instruksi
## 1. Inheritance
- Buat class Person dengan menggunakan atribut nama dan metode getNama()
  ```php
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
  ```
  - Buat class Student yang mewarisi dari class Person dan tambah atribut studentID serta metode getStudentID().
  - ```PHP
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
    ```

## 2. Polymorphism
- Buat class Teacher yang mewarisi class Person dan tambah atribut teacherID.
  ```php
  class Teacher extends Person {
    private $teacherID;
  ```
  - Override metode getNama() di class Student dan Teacher untuk menampilkan format berbeda.
    ```php
    // Override metode getNama untuk menampilkan format berbeda
    public function getNama() {
        return "Teacher Name: " . $this->nama; // Menampilkan nama dengan format khusus untuk Teacher
    }

    // Metode untuk mendapatkan ID guru
    public function getTeacherID() {
        return $this->teacherID; 
    }
    ```

  ## 3. Encapsulation
  - Ubah atribut studentID pada class Student menjadi private
    ```php
    class Student extends Person {
    private $studentID;
    ```
  - Tambah metode setter dan getter untuk mengakses serta mengubah nilai atribut nama dan studentID
    ```php
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
    ```

  ## 4. Abstraction
  - Buat class abstract Course menggunakan metode abstract getCourseDetails().
    ```php
    // Kelas abstrak Course untuk mewakili kursus
    abstract class Course {
    protected $courseName;

    // Constructor untuk menginisialisasi nama kursus
    public function __construct($courseName) {
        $this->courseName = $courseName;
    }

    // Metode abstrak untuk mendapatkan detail kursus
    abstract public function getCourseDetails();
    }
    ```
    - Buat class OnlineCourse dan OfflineCourse dengan mengimplementasikan getCourseDetails()
      ```php
      // Kelas OnlineCourse yang mewarisi dari Course
      class OnlineCourse extends Course {
      private $duration;
      private $platform;

      // Constructor untuk menginisialisasi nama kursus, durasi, dan platform
      public function __construct($courseName, $duration, $platform) {
        parent::__construct($courseName); // Memanggil constructor dari parent
        $this->duration = $duration;
        $this->platform = $platform;
      }

      // Implementasi metode abstrak getCourseDetails untuk OnlineCourse
      public function getCourseDetails() {
        return "Online Course: $this->courseName, Duration: $this->duration, Platform: $this->platform";
      }
      }

      // Kelas OfflineCourse yang mewarisi dari Course
      class OfflineCourse extends Course {
      // Atribut tambahan untuk lokasi dan jadwal
      private $location;
      private $schedule;

      // Constructor untuk menginisialisasi nama kursus, lokasi, dan jadwal
      public function __construct($courseName, $location, $schedule) {
        parent::__construct($courseName); // Memanggil constructor dari parent
        $this->location = $location;
        $this->schedule = $schedule;
      }

      // Implementasi metode abstrak getCourseDetails untuk OfflineCourse
      public function getCourseDetails() {
        return "Offline Course: $this->courseName, Location: $this->location, Schedule: $this->schedule";
      }
      }
      ```
  - **Kode lengkap**

  - **Output**

  # Tugas
  ## 1. Implementasi class Person
  ```php
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

  ```
 ## 2. Gunakan konsep inheritance dan Polymorphism
 - Membuat class Dosen
   ```php
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
   ```
- Membuat class Mahasiswa
  ```php
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
  ```
## 3. Gunakan Encapsulation
- Ubah atribut pada class Mahasiswa menjadi private
  ```php
  class Mahasiswa extends Person {
    private $nim; // Menggunakan encapsulation dengan atribut private
  ```
- Ubah atribut pada class Dosen menjadi private
  ```php
  class Dosen extends Person {
    private $nidn;
  ```

  ## 4. Buat class abstract Jurnal dan Implementasikan konsep abstraction
  ```php
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
  ```
- **Kode lengkap**
  
- **Output**  
