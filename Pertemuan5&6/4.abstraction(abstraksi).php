<?php
// Kelas abstrak Shape sebagai parent class 
abstract class Shape {
    abstract public function area();
}

// Kelas Rectangle (persegi panjang) yang mewarisi dari Shape
class Rectangle extends Shape {
    private $width;
    private $height;

    // Constructor untuk menginisialisasi nilai lebar dan tinggi
    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }
    
    // Implementasi metode area() untuk menghitung luas persegi panjang
    public function area() {
        return $this->width * $this->height;
    }
}

// Kelas Circle (lingkaran) yang mewarisi dari Shape
class Circle extends Shape {
    private $radius;

    // Constructor untuk menginisialisasi nilai jari-jari
    public function __construct($radius) {
        $this->radius = $radius;
    }

    // Implementasi metode area() untuk menghitung luas lingkaran
    public function area() {
        return pi() * pow($this->radius, 2);    // Menghitung luas dengan rumus: π x jari-jari^2
    }
}

$rectangle = new Rectangle(5, 10);
echo "Area of Rectangle: " . $rectangle->area(); // Output: Area of Rectangle: 50

$circle = new Circle(7);
echo "Area of Circle: " . $circle->area(); // Output: Area of Circle: 153.9380400259
?>