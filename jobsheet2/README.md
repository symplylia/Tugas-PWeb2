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
  
  ![class object](https://github.com/user-attachments/assets/9d04639f-7415-4b6e-84a4-db82968e44e6)

- **Output**
  
  ![Screenshot 2024-09-12 083524](https://github.com/user-attachments/assets/2909b338-2105-4c76-ab35-744c085ab90e)


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
  
  ![construct](https://github.com/user-attachments/assets/0b163169-22ba-4991-b27e-0407697ac8ae)


- **Output**
  
  ![Screenshot 2024-09-12 083702](https://github.com/user-attachments/assets/6173e0d7-267a-4591-88b4-c21afc1e6609)


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
  
  ![tambahan](https://github.com/user-attachments/assets/b76ffc9f-5eab-461d-8c5f-efc338ac3e91)

- **Output**
  
  ![Screenshot 2024-09-12 083834](https://github.com/user-attachments/assets/5f1da9ea-6399-4993-b019-e104094d8fb0)

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
  
  ![atribut](https://github.com/user-attachments/assets/8b49165a-4a4f-45f2-9e6e-14ef79653a5e)

- **Output**
  
  ![Screenshot 2024-09-12 084113](https://github.com/user-attachments/assets/8d403450-ed9a-4a2b-b70b-df2b901c3850)

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
  
  ![tugas](https://github.com/user-attachments/assets/64f4364b-1091-4166-9fda-98815760c517)

- **Output**
  
  ![Screenshot 2024-09-12 084137](https://github.com/user-attachments/assets/70f3176e-014c-434f-838a-f6555cb36117)


  
