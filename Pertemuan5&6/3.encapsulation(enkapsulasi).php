<?php
// Kelas untuk merepresentasikan rekening bank
class BankAccount {
    private $balance;   // Atribut privat untuk menyimpan saldo rekening

    // Constructor untuk menginisialisasi saldo awal saat objek dibuat
    public function __construct($balance) {
        $this->balance = $balance;
    }

    // Metode untuk melakukan deposit (menambah uang ke rekening)
    public function deposit($amount) {
        // Memeriksa jika jumlah deposit lebih dari 0
        if ($amount > 0) {
            $this->balance += $amount;  // Tambahkan jumlah deposit ke saldo

        }
    }
    
    // Metode untuk melakukan penarikan uang dari rekening
    public function withdraw($amount) {
        // Memeriksa jika jumlah penarikan lebih dari 0 dan tidak melebihi saldo
        if ($amount > 0 && $amount <= $this->balance) {
            $this->balance -= $amount;  // Kurangi saldo dengan jumlah yang ditarik
        }
    }
    
    // Metode untuk mendapatkan saldo saat ini
    public function getBalance() {
        return $this->balance;
    }
}

// Membuat objek rekening bank dengan saldo awal 1000
$account = new BankAccount(1000);
$account->deposit(500);     // Melakukan deposit sejumlah 500 ke rekening
$account->withdraw(200);    // Melakukan penarikan sejumlah 200 dari rekening

// Menampilkan saldo saat ini dengan memanggil metode getBalance
echo "Current Balance: " . $account->getBalance(); // Output: Current Balance: 1300
?>