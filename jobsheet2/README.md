# Jobsheet 2 : Menggunakan Konsep Kelas dan Objek dalam PHP
# Tujuan
Pada jobsheet kali ini, mahasiswa diharapkan dapat menerapkan konsep kelas dan objek dalam PHP dengan mengikuti serangkaian instruksi dan tugas yang berfokus pada pembuatan dan penggunaan kelas serta objek.

# Instruksi Kerja
### 1. Membuat Class dan Object
- Buat class Mahasiswa dengan atribut nama, nim, dan jurusan. Atribut pada class mahasiswa menggunakan tipe atribut **Public**, agar atribut tersebut dapat diakses pada class itu sendiri ataupun diluar dari class tersebut.
  ```php
  class Mahasiswa {
    //Atribut atau Properties
    public $nama;
    public $nim;
    public $jurusan;
  }
  ```
- Buat metode tampilData() pada class Mahasiswa. Fungsi return yaitu untuk mengembalikan nilai.
  ```php
  //Metode atau Function tampil data
    public function tampilData() {
        return "Nama: $this->nama, Nim: $this->nim, Jurusan: $this->jurusan";
    }
  ```
- Instansiasi object dari class Mahasiswa dan tampilkan data mahasiswa. Tahap ini dilakukan dengan membuat variabel baru dimana burtujuan untuk menampung data, dan kode "new Mahasiswa" digunakan untuk menggunakan class.
  ```php
  //Instansiasi Objek
  $mahasiswa = new Mahasiswa("Putri Aulia", "230202042", "Jurusan Komputer Bisnis");
  echo $mahasiswa->tampilData();
  ```
- **Kode lengkap**

- **Output**

### 2. Implementasi Constructor
- Tambahkan construct pada class Mahasiswa untuk menginisialisasi atribut dari objek seperti nama, nim, dan jurusan.
  ```php
  //Constructor
    public function __construct($nama, $nip, $mataKuliah) {
        $this->nama = $nama;
        $this->nip = $nip;
        $this->mataKuliah = $mataKuliah;
  ```
- **Kode lengkap**

- **Output**

## 3. Membuat Metode Tambahan
- Buat metode updateJurusan() pada class Mahasiswa
  ```php
  //Metode atau function update jurusan
    public function updateJurusan($jurusan_baru) {
        $this->jurusan = $jurusan_baru;
    }
  ```
- Gunakan metode ini untuk megubah jurusan dari objek yang sudah ada.
  ```php
  //Instansiasi Objek
  $mahasiswa = new Mahasiswa("Putri Aulia", "230202042", "Jurusan Komputer Bisnis");

  //Update jurusan
  $mahasiswa->updateJurusan("JKB");
  ```
- **Kode lengkap**

- **Output**

## 4. Penggunaan Atribut dan Metode
- Ubah nilai yang terdapat pada atribut nim dari object Mahasiswa menggunakan metode **setter**. Sebelum itu buat metode get dan set terlebih dahulu
  ```php
    //Mengambil nilai atribut
    public function getNim() {
        return $this->nim;
    }

    //Mengubah nilai atribut
    public function setNim($nim) {
        $this->nim = $nim;
    }
  ```
- Instansiasi object
  ```php
  //Instansiasi Objek
  $mahasiswa = new Mahasiswa("Putri Aulia", "230202042", "Jurusan Komputer Bisnis");

  //Mengubah nilai atribut
  $mahasiswa->setNim("123456789");
  ```
- Tampilkan data Mahasiswa yang sudah diubah atau diperbarui dengan memanggil metode tampilData().
  ```php
  //Tampil data
  echo $mahasiswa->tampilData();
  ```
- **Kode lengkap**

- **Output**

# Tugas
## 1. Implementasikan class Dosen
```php
//Definisi Class
class Dosen {
    public $nama;
    public $nip;
    public $mataKuliah;

    //Constructor
    public function __construct($nama, $nip, $mataKuliah) {
        $this->nama = $nama;
        $this->nip = $nip;
        $this->mataKuliah = $mataKuliah;
    }
```
## 2. Buat metode tampilDosen()
```php
 //Metode atau function
    public function tampilkanDosen() {
        return "Nama: $this->nama". "<br>" . "Nip: $this->nip". "<br>" . "MataKuliah $this->mataKuliah". "<hr>";
    }
```
## 3. Buat objek dari kelas Dosen, dan gunakan metode tampilDosen()
```php
//Instansiasi Objek
$dosen1 = new Dosen("Annas Setiawan", "09876543", "Basis Data");
echo $dosen1->tampilkanDosen();
```
- **Kode lengkap**

- **Output**
  

  
