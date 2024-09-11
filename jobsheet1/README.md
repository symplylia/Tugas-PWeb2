# Jobsheet 1 
# Kelas dan Objek

Pada jobsheet ini, kita akan belajar tentang konsep dasar **Kelas** dan **Objek** dalam pemrograman berbasis PHP. Kelas disini adalah blueprint atau template untuk membuat objek, yang berisi atribut (properti) dan metode (fungsi) untuk digunakan oleh objek tersebut. Objek adalah instance dari kelas yang dibuat dan dapat memanfaatkan properti dan metode dari kelas tersebut.

## Kelas (Class)

Kelas adalah struktur dasar yang mendefinisikan karakteristik dan perilaku dari suatu objek. Pada contoh ini, kita akan membuat kelas `Mahasiswa` dengan beberapa properti dan metode.

### Contoh Kode:

```php
class Mahasiswa {
    public $nama;
    public $nim;
    public $jurusan;

     public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim; 
        $this->jurusan = $jurusan;
    }
    
  public function tampilData() {
        return "Nama: $this->nama, Nim: $this->nim, Jurusan: $this->jurusan";
    }
}
```

## Objek (Object)

Objek dibuat dari kelas menggunakan kata kunci new. Setelah objek dibuat, kita bisa mengatur nilai properti dan memanggil metode yang ada dalam kelas.

### Contoh Kode:

```php
$mahasiswa = new Mahasiswa("Putri Aulia", "230202042", "Jurusan Komputer Bisnis");
echo $mahasiswa->tampilData();
```

## Ringkasan

- Kelas (Class): Mendefinisikan struktur dan perilaku objek.
- Objek (Object): Dibuat dari kelas dan dapat menggunakan properti serta metode dari kelas tersebut.

# Encapsulation

**Encapsulation** (enkapsulasi) adalah salah satu prinsip utama dalam **Object-Oriented Programming** (OOP) yang digunakan untuk membatasi akses langsung ke beberapa komponen objek dan mengontrol cara komponen tersebut diakses atau dimodifikasi. Dengan enkapsulasi, kita dapat menjaga integritas data dan mencegah modifikasi yang tidak diinginkan pada properti suatu objek.

Dalam PHP, enkapsulasi dicapai dengan menggunakan kata kunci **private**, **protected**, dan **public** pada properti dan metode.

## 1. Definisi Kelas dengan Enkapsulasi

### Contoh Kode Kelas:

```php
class Mahasiswa {
    private $nama;
    private $nim;
    private $jurusan;

    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan; 
    }

    // Getter dan Setter untuk properti nama
    public function getNama() {
        return $this->nama;
    }

    public function setNama($nama) {
        $this->nama = $nama;
    }

    // Getter dan Setter untuk properti nim
    public function getNim() {
        return $this->nim;
    }

    public function setNim($nim) {
        $this->nim = $nim;
    }

    // Getter dan Setter untuk properti jurusan
    public function getJurusan() {
        return $this->jurusan;
    }

    public function setJurusan($jurusan) {
        $this->jurusan = $jurusan;
    }
}
```

#### Penjelasan

- Private: Properti $nama, $nim, dan $jurusan ditandai sebagai private sehingga tidak dapat diakses langsung dari luar kelas. Ini memastikan bahwa data tidak dapat diubah secara langsung, melainkan harus melalui metode yang disediakan (getter dan setter).
- Getter dan Setter: Metode getNama(), setNama(), dan metode serupa untuk properti lainnya digunakan untuk mengakses dan memodifikasi nilai properti yang bersifat private.
- Constructor: Digunakan untuk menginisialisasi nilai properti saat objek dibuat.

## 2. Membuat Objek menggunakan Enkapsulasi
### Contoh Kode Objek:

```php
$mahasiswa = new Mahasiswa("Putri Aulia", "230202042", "Jurusan Komputer Bisnis");
echo $mahasiswa->getNama(); 
echo "<br>";
echo $mahasiswa->getNim();
echo "<br>";
echo $mahasiswa->getJurusan();
```
#### Penjelasan
- Membuat Objek: Objek Mahasiswa dibuat dengan memberikan nilai awal untuk properti $nama, $nim, dan $jurusan.
- Menampilkan Informasi: Metode tampilkanInfo() dapat digunakan untuk menampilkan informasi lengkap dari objek mahasiswa.
## Ringkasan
Pada jobsheet ini, kita telah mempelajari:

- Bagaimana menggunakan enkapsulasi untuk melindungi properti dalam kelas.
- Cara mengakses dan mengubah properti private menggunakan metode getter dan setter.
- Keuntungan dari penggunaan enkapsulasi dalam menjaga integritas data.

# Inheritance

**Inheritance** (pewarisan) adalah salah satu prinsip dasar dalam **Object-Oriented Programming (OOP)** yang memungkinkan sebuah kelas untuk mewarisi properti dan metode dari kelas lain. Dengan inheritance, kita dapat membuat kelas yang lebih spesifik berdasarkan kelas yang lebih umum, mengurangi pengulangan kode, dan mempermudah pemeliharaan.

Dalam PHP, inheritance dilakukan dengan menggunakan kata kunci **extends**. Kelas yang mewarisi disebut sebagai **subclass (kelas turunan)**, dan kelas yang diwarisi disebut sebagai **superclass (kelas induk)**.

## 1. Definisi Kelas Induk (Superclass)

Pertama, kita akan mendefinisikan **kelas induk** yang mendefinisikan properti dan metode dasar yang dapat diwarisi oleh kelas lainnya.

### Contoh Kode Kelas Induk:

```php
class Pengguna {
    protected $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }

    public function getNama() {
        return $this->nama;
    }
}

```
#### Penjelasan
1. Kelas Induk (Parent Class): Kelas Pengguna adalah kelas induk yang mendefinisikan properti $nama dan metode getNama().

    - Properti $nama bersifat protected: Artinya, properti ini dapat diakses oleh kelas yang mewarisinya (kelas anak) tetapi tidak dapat diakses secara langsung dari luar kelas.
    - Metode getNama(): Metode ini digunakan untuk mengambil nilai dari properti $nama.
2. Konstruktor: Metode __construct() digunakan untuk menginisialisasi objek dari kelas ini. Ketika objek dibuat, nilai untuk properti $nama diberikan melalui konstruktor.

## 2. Definisi Kelas Turunan (Subclass)
Sekarang kita akan membuat kelas turunan yang mewarisi semua properti dan metode dari kelas induk. Kelas turunan juga dapat menambahkan properti dan metode baru atau meng-override metode dari kelas induk.

### Contoh Kode Kelas Turunan
```php
class Dosen extends Pengguna {
    private $mataKuliah;

    public function __construct($nama, $mataKuliah) {
        parent:: __construct($nama);
        $this->mataKuliah = $mataKuliah;
    }

    public function getmataKuliah() {
        return $this->mataKuliah;
    }
}
```
#### Penjelasan
1. Kelas Turunan (Child Class): Kelas Dosen adalah kelas turunan yang mewarisi semua properti dan metode dari kelas Pengguna. Properti $nama yang bersifat protected di kelas induk dapat diakses oleh kelas ini melalui konstruktor induk.

2. Kata Kunci extends: Digunakan untuk mendeklarasikan bahwa kelas Dosen mewarisi kelas Pengguna. Ini berarti kelas Dosen akan memiliki semua properti dan metode yang ada di kelas induk.

3. Konstruktor dengan parent::__construct():

    - parent::__construct($nama) memanggil konstruktor dari kelas induk Pengguna untuk menginisialisasi properti $nama. Ini memungkinkan kita untuk tidak menulis ulang logika inisialisasi nama di kelas turunan.
    - Kelas Dosen juga menambahkan properti baru yaitu $mataKuliah, yang diinisialisasi di dalam konstruktor.
4. Metode Getter getMataKuliah(): Metode ini digunakan untuk mengakses nilai properti $mataKuliah yang bersifat private di dalam kelas Dosen.simal.

## 3. Membuat Objek dari Kelas Turunan
Sekarang kita akan membuat objek dari kelas turunan Mobil dan menggunakan metode yang diwarisi serta metode yang di-override.

### Contoh Kode Objek
```php
dosen = new Dosen("Nama : Prih Diantoro Abda'u", "MatKul : P.Web2");
echo $dosen->getNama();
echo "<br>";
echo $dosen->getmataKuliah();
```
#### Penjelasan
1. Pembuatan Objek:

    - Objek dosen dibuat dari kelas Dosen dengan memanggil konstruktor dan memberikan dua parameter: nama dosen dan mata kuliah yang diajar.
    - Nilai "Nama: Prih Diantoro Abda'u" digunakan untuk mengisi properti $nama dari kelas induk, dan "MatKul: Pemrograman Web 2" digunakan untuk mengisi properti $mataKuliah dari kelas Dosen.
2. Penggunaan Metode Getter:

    - getNama() dipanggil untuk mengambil nilai $nama dari objek dosen, yang diwarisi dari kelas induk Pengguna.
    - getMataKuliah() digunakan untuk mengambil nilai $mataKuliah, yang merupakan properti baru di kelas Dosen.
## Ringkasan
Pada jobsheet ini, kita telah mempelajari:

- Bagaimana mendefinisikan kelas induk dan kelas turunan menggunakan inheritance.
- Cara meng-override metode pada kelas turunan.
- Manfaat inheritance dalam mengurangi duplikasi kode dan mempermudah pemeliharaan.

# Polymorphism 

Proyek ini adalah implementasi sederhana dari konsep Pewarisan (Inheritance) dan Overriding di dalam Pemrograman Berorientasi Objek (OOP) menggunakan bahasa PHP. Kode ini mendemonstrasikan bagaimana sebuah kelas induk dapat mewariskan properti dan metode ke kelas-kelas turunannya, dan bagaimana kelas turunan dapat mengubah (override) metode yang diwarisi sesuai dengan kebutuhan spesifik.
Pada jobsheet ini, kita akan fokus pada dua jenis polimorfisme tersebut dalam PHP.
## 1. Mempelajari Kode
### - Kelas Pengguna
```php
class Pengguna {
    protected $nama, $nim, $nip;

    public function aksesFitur() {
        echo "Akses fitur pengguna <br>";
    }

    public function getNama() {
        return $this->nama;
    }

    public function setNama($nama) {
        $this->nama = $nama;
    }
}
```
#### Penjelasan
- protected $nama, $nim, $nip; - Mendeklarasikan properti yang dapat diakses oleh kelas turunan.
- public function aksesFitur() - Menampilkan pesan untuk akses fitur umum.
- public function getNama() - Mengembalikan nilai properti $nama.
- public function setNama($nama) - Menetapkan nilai untuk properti $nama.

### - Kelas Dosen
```php
class Dosen extends Pengguna {
    public function aksesFitur() {
        echo "Akses fitur Dosen: " . $this->getNama() . " <br>";
    }
}
```
#### Penjelasan
- class Dosen extends Pengguna - Kelas Dosen mewarisi dari kelas Pengguna.
- public function aksesFitur() - Meng-override metode aksesFitur() untuk menampilkan pesan yang lebih spesifik.

### - Kelas Mahasiswa
```php
class Mahasiswa extends Pengguna {
    public function aksesFitur() {
        echo "Akses fitur Mahasiswa: " . $this->getNama() . " <br>";
    }
}
```
#### Penjelasan
- class Mahasiswa extends Pengguna - Kelas Mahasiswa mewarisi dari kelas Pengguna.
- public function aksesFitur() - Meng-override metode aksesFitur() untuk menampilkan pesan yang lebih spesifik.

## 2. Menjalankan Kode:
### - Objek Pengguna
```php
$pengguna = new Pengguna();
$pengguna->aksesFitur();
```
#### Penjelasan
- Membuat objek Pengguna.
- Memanggil metode aksesFitur() yang menampilkan pesan umum.

### - Objek Dosen
```php
$dosen = new Dosen();
$dosen->setNama("Pak Abdau");
$dosen->aksesFitur();
```
#### Penjelasan
- Membuat objek Dosen.
- Menetapkan nama menggunakan metode setNama().
- Memanggil metode aksesFitur() yang menampilkan pesan khusus untuk dosen dengan nama yang telah diatur.

### - Objek Mahasiswa
```php
$mahasiswa = new Mahasiswa();
$mahasiswa->setNama("Putri Aulia");
$mahasiswa->aksesFitur();
```
#### Penjelasan
- Membuat objek Mahasiswa.
- Menetapkan nama menggunakan metode setNama().
- Memanggil metode aksesFitur() yang menampilkan pesan khusus untuk mahasiswa dengan nama yang telah diatur.

# Abstraksi 

Pada PHP, kelas abstrak (abstract class) adalah kelas yang tidak dapat diinstansiasi secara langsung. Kelas abstrak biasanya digunakan sebagai cetak biru untuk kelas lain. Kelas yang mewarisi dari kelas abstrak harus mengimplementasikan metode-metode abstrak yang ada di dalamnya.

- **Kelas abstrak**: Sebuah kelas yang tidak dapat diinstansiasi secara langsung, tetapi harus diturunkan (diturunkan ke kelas lain).
- **Metode abstrak**: Metode yang dideklarasikan dalam kelas abstrak tanpa implementasi. Kelas turunan harus mengimplementasikan metode tersebut.

### Contoh Kode:

```php
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
```
### Kelas Abstrak Pengguna:
```php
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
```
#### Penjelasan
- Kelas Abstrak: Pengguna adalah kelas abstrak yang mendeklarasikan metode abstrak aksesFitur(), yang artinya metode ini harus diimplementasikan oleh kelas turunan.
- Protected Properties: Properti $nama, $nim, dan $nip menggunakan akses modifier protected, yang berarti properti ini hanya dapat diakses oleh kelas itu sendiri atau kelas turunannya.
- Metode getNama() dan setNama(): Kedua metode ini adalah metode umum untuk mendapatkan (getNama()) dan menetapkan (setNama()) nilai dari properti $nama.

### Kelas Dosen:
```php
class Dosen extends Pengguna {
    public function aksesFitur() {
        echo "Akses fitur Dosen: " .$this->getNama(). "<br>";
    }
}
```
#### Penjelasan
- Turunan dari Pengguna: Dosen adalah kelas yang mewarisi dari kelas abstrak Pengguna dan harus mengimplementasikan metode aksesFitur().
- Implementasi aksesFitur(): Pada kelas Dosen, metode aksesFitur() menampilkan pesan yang menegaskan bahwa pengguna tersebut adalah seorang dosen, termasuk dengan menampilkan nama dosen yang telah diset menggunakan getNama().

### Kelas Mahasiswa:
```php
class Mahasiswa extends Pengguna {
    public function aksesFitur() {
        echo "Akses fitur Mahasiswa: " .$this->getNama(). " <br>";
    }
}
```
#### Penjelasan
- Turunan dari Pengguna: Mahasiswa juga merupakan kelas yang mewarisi dari Pengguna dan harus mengimplementasikan metode aksesFitur().
- Implementasi aksesFitur(): Pada kelas Mahasiswa, metode ini menampilkan pesan yang menegaskan bahwa pengguna tersebut adalah mahasiswa, disertai nama mahasiswa yang telah diset.
## Ringkasan
- Kelas Abstrak: Pengguna adalah cetak biru yang tidak bisa diinstansiasi secara langsung, tetapi digunakan sebagai dasar bagi kelas Dosen dan Mahasiswa.
- Pewarisan dan Polimorfisme: Kelas Dosen dan Mahasiswa mewarisi properti dan metode dari Pengguna. Meskipun mereka memiliki struktur yang sama, setiap kelas dapat mengimplementasikan logika mereka sendiri pada metode aksesFitur().
- Abstraksi: Kelas abstrak memaksa setiap kelas turunan untuk menyediakan implementasi konkret dari metode yang dideklarasikan sebagai abstrak.
  
Dengan abstraksi dan pewarisan ini, kode menjadi lebih terstruktur, modular, dan mudah diperluas.
