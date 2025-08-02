<?php
// Mendefinisikan array
$buah = ["Apel", "Mangga", "Jeruk", "Pisang", "Anggur"];

// Menggunakan foreach untuk menampilkan semua elemen
echo "<h3>Daftar Buah-buahan:</h3>";
foreach ($buah as $nama_buah) {
    echo "- " . $nama_buah . "<br>";
}

// Contoh lain dengan array asosiatif
$mahasiswa = [
    "nama" => "Budi Santoso",
    "nim" => "2023001",
    "prodi" => "Teknik Informatika",
    "semester" => 3
];

echo "<h3>Data Mahasiswa:</h3>";
foreach ($mahasiswa as $key => $value) {
    echo ucfirst($key) . ": " . $value . "<br>";
}
?>