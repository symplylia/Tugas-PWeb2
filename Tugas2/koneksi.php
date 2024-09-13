<?php 
class database {
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "mahasiswa";
    public $link;
    public $error;

    public function __construct() {
        $this->link = mysqli_connect($this->host, $this->username, $this->password, $this->database);
        if (!$this->link) {
            $this->error = "Koneksi ke Database Gagal: " . mysqli_connect_error();
            return false;
        }
    }

    // Fungsi TampilkanData umum di kelas database
    public function TampilkanData() {
        return "Metode TampilkanData dari class database";
    }
}

class Students extends database { 
    public function TampilkanData() {
        $query = "SELECT * FROM students";
        $result = mysqli_query($this->link, $query);

        if (!$result) {
            die("Query Error: " . mysqli_error($this->link));
        }

        $array = array();
        while ($row = mysqli_fetch_array($result)) {
            $array[] = $row;
        }
        return $array;
    }
}

class Study_programs extends database {
    // Override untuk menampilkan data study programs
    public function TampilkanData() {
        $query = "SELECT * FROM study_programs";
        $result = mysqli_query($this->link, $query);

        if (!$result) {
            die("Query Error: " . mysqli_error($this->link));
        }

        $array = array();
        while ($row = mysqli_fetch_array($result)) {
            $array[] = $row;
        }
        return $array;
    }

    // Metode baru untuk polymorphism, menampilkan program studi spesifik
    public function TampilkanDataSpesifik() {
        $query = "SELECT * FROM study_programs WHERE id = 101";  // Contoh spesifik untuk id = 1
        $result = mysqli_query($this->link, $query);

        if (!$result) {
            die("Query Error: " . mysqli_error($this->link));
        }

        $array = array();
        while ($row = mysqli_fetch_array($result)) {
            $array[] = $row;
        }
        return $array;
    }
}

// Subclass yang mengimplementasikan polymorphism untuk mhs_TiB
class mhs_TiB extends database {
    public function TampilkanData() {
        $query = "SELECT m.nim, m.name, sp.study_program_name 
                  FROM students m
                  JOIN study_programs sp ON m.study_program_id = sp.id";
        $result = mysqli_query($this->link, $query);

        if (!$result) {
            die("Query Error: " . mysqli_error($this->link));
        }

        $array = array();
        while ($row = mysqli_fetch_array($result)) {
            $array[] = $row;
        }
        return $array;
    }
}

class mhs_TiBSpesifik extends mhs_TiB {
    // Override metode TampilkanData untuk menampilkan data spesifik (contoh: hanya id = 1)
    public function TampilkanData() {
        $query = "SELECT m.nim, m.name, sp.study_program_name 
                  FROM students m
                  JOIN study_programs sp ON m.study_program_id = sp.id
                  WHERE m.id = 1";  // Filter untuk id tertentu
        $result = mysqli_query($this->link, $query);

        if (!$result) {
            die("Query Error: " . mysqli_error($this->link));
        }

        $array = array();
        while ($row = mysqli_fetch_array($result)) {
            $array[] = $row;
        }
        return $array;
    }
    public function TampilkanDataSpesifik() {
        $query = "SELECT * FROM students WHERE id = 101";  // Contoh spesifik untuk id = 1
        $result = mysqli_query($this->link, $query);

        if (!$result) {
            die("Query Error: " . mysqli_error($this->link));
        }

        $array = array();
        while ($row = mysqli_fetch_array($result)) {
            $array[] = $row;
        }
        return $array;
    }
}

?>