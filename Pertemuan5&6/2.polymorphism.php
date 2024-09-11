<?php
// Kelas dasar Animal untuk merepresentasikan hewan
class Animal {
    protected $name;

    // Constructor untuk menginisialisasi nama hewan
    public function __construct($name){
        $this->name = $name;
    }

    // Metode untuk mendapatkan nama hewan
    public function getName() {
        return $this->name;
    }

    // Metode untuk membuat suara hewan, harus di-override di kelas turunan
    public function makeSound() {
        // Metode ini harus di-override di kelas turunan
        return "";
    }
}

// Kelas Anjing yang mewarisi dari kelas Animal
class Anjing extends Animal {
    public function makeSound() {
        return "Woof!";
    }
}

// Kelas Kucing yang mewarisi dari kelas Animal
class Kucing extends Animal {
    public function makeSound() {
        return "Meow!";
    }
}

// Kelas Printer untuk mencetak informasi hewan dan suaranya
class Printer {
    public function print(Animal $animal) {
        echo $animal->getName() . " says " . $animal->makeSound() . "<br>";
    }
}

$anjing = new Anjing("Bobby");      // Membuat objek Anjing dengan nama "Bobby"
$kucing = new Kucing("Ketty");      // Membuat objek Kucing dengan nama "Ketty"

$printer = new Printer();
$printer->print($anjing); // Output: Bobby says Woof!
$printer->print($kucing); // Output: Ketty says Meow!
?>
