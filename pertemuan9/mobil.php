<?php
// Definisi Kelas Mobil
class Mobil {
    // Properti atau Parameter
    public $merk;
    public $warna;
    public $kecepatan = 0;

    // Konstruktor
    public function __construct($merk, $warna) {
        $this->merk = $merk;
        $this->warna = $warna;
    }

    // Method untuk menampilkan informasi mobil
    public function tampilkanInfo() {
        echo "Mobil ini adalah $this->merk berwarna $this->warna dengan kecepatan $this->kecepatan km/jam.<br>";
    }

    // Method untuk menjalankan mobil
    public function jalankan($kecepatan) {
        $this->kecepatan = $kecepatan;
        echo "Mobil dijalankan dengan kecepatan $kecepatan km/jam.<br>";
    }

    // Method untuk menghentikan mobil
    public function berhenti() {
        $this->kecepatan = 0;
        echo "Mobil berhenti.<br>";
    }
}

// Membuat Objek dari Kelas Mobil
$mobil1 = new Mobil("Toyota", "Merah");

// Menggunakan method tampilkanInfo
$mobil1->tampilkanInfo();

// Menggunakan method jalankan
$mobil1->jalankan(60);

// Menggunakan method berhenti
$mobil1->berhenti();
?>
