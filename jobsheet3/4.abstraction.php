<?php
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

// Membuat objek OnlineCourse
$onlineCourse = new OnlineCourse("P.Web1", "4 weeks", "GitHub");

// Membuat objek OfflineCourse
$offlineCourse = new OfflineCourse("P.web2", "Lab Pemrograman", "07.30 - 15.30");

// Menampilkan detail OnlineCourse
echo $onlineCourse->getCourseDetails(); // Output: Online Course: P.Web1, Duration: 4 weeks, Platform: GitHub
echo "<br>";

// Menampilkan detail OfflineCourse
echo $offlineCourse->getCourseDetails(); // Output: Offline Course: P.Web2, Location: Lab Pemrograman, Schedule: 07.30 - 15.30
?>
