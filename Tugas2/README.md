# Tugas 2 Praktikum Pemrograman Web 2
# Tujuan
Tugas ini saya buat untuk memenuhi nilai harian praktikum pemrograman web 2 yang diampuh oleh Bapak Prih Diantono Abda'u, S.Kom,M.Kom. Pada tugas kali ini juga kita masih menggunakan sistem OOP untuk program-program yang akan kita buat dan kita jalankan.
## Instruksi Kerja
## Koneksi.php
Koneksi ini bertujuan untuk menampung atau menyediakan fungsi-fungsi yang bertujuan untuk menghubungkan antara php dengan database
- Contoh Code
  ```php
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
  ```
## mhs_TiB.php
Pada file ini merupakan file untuk menampung atau mengambil tabel students pada database
- Contoh Code
  ```php
  $TiB = new students();
  $data_TiB = $TiB->TampilkanData();
  ```
- Tabel
  ```php
  <div class="content">
        <h1>Data Mahasiswa</h1>
        <table>
            <tr>
                <th>ID</th>
                <th>NIM</th>
                <th>Name</th>
                <th>Address</th>
                <th>Number Phone</th>
                <th>Id User</th>
                <th>Id Student Class</th>
            </tr>
            <?php 
            $no = 1;
            foreach($data_TiB as $row){
                ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['nim']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['address']; ?></td>
                    <td><?php echo $row['number_phone']; ?></td>
                    <td><?php echo $row['user_id']; ?></td>
                    <td><?php echo $row['student_class_id']; ?></td>
                </tr>
                <?php 
            }
            ?>
        </table>
    ```
## students.php
Pada file ini berfungsi untuk menampung atau memanggil tabel study_programs pada database
- Contoh Code
  ```php
  $db = new Study_programs();
  $data_db = $db->TampilkanData();

  $jurusan = new Study_programs();
  $data_jurusan = $jurusan->TampilkanData();
  ```
- Tabel
  ```php
  <div class="content">
        <h1>Data Jurusan</h1>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
            </tr>
            <?php 
            $no = 1;
            foreach($data_jurusan as $row){
                ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                </tr>
                <?php 
            }
            ?>
        </table>
  ```
## Khusus.php
Pada file ini berisi tampungan dari metode polymophism dimana hanya menampilkan data yang kita inginkan atau kita panggil
- Contoh Code
  ```php
  $db = new Study_programs();
  $data_spesifik = $db->TampilkanDataSpesifik();
  ```
- Tabel
  ```php
  <div class="content">
        <h1>Data</h1>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
            </tr>
            <?php 
            foreach($data_spesifik as $row){
                ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                </tr>
                <?php 
            }
            ?>
        </table>
  ```
# Index.php
Pada index.php ini berfungsi untuk membuat tampilan awal atau tampilan menu agar terlihat lebih tersusun rapi dan untuk menampilkan data-data yang sudah kita buat dalam satu tampilan.
- Contoh Code
  ```php
  <a href="mhs_TiB.php" class="button">Mahasiswa TiB</a>
        <a href="students.php" class="button">Students</a>
        <a href="address.php" class="button">Address</a>
        <a href="khusus.php" class="button">Khusus</a>
  ```

# Lain-lain
Pada tuugas kali ini juga saya menggunakan boostrap untuk mempercantik tampilan dari tugas yang saya buat. Dengan ERD yang saya dapat saya dapat mengimplementasikannya ke dalam code-code yang sudah saya pelajari dan saya pahami untuk menghasilkan output yang di inginkan.

# Kode lengkap dengan sudah ditambah boostrap
- koneksi.php
  
  ![koneksi](https://github.com/user-attachments/assets/e3de69c3-1ee3-4def-b8d5-67a1c9c49fdc)

- mhs_TiB.php
  
  ![mhs_TiB](https://github.com/user-attachments/assets/3c7936a7-0015-436b-87ed-b121a2ce725c)

- students.php

  ![students](https://github.com/user-attachments/assets/dccd7d05-cac0-4773-8f11-d21c900e4f1d)

- khusus.php

  ![khusus](https://github.com/user-attachments/assets/6f09d415-e572-4233-acf9-8f048d9ecd34)

- index.php

  ![index](https://github.com/user-attachments/assets/a3055dc6-8d20-4fe0-b835-a7cd74a3e72c)

