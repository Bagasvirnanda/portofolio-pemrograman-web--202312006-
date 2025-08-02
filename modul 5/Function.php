<?php
function sapa($nama, $waktu) {
    // Mengubah waktu ke lowercase untuk memastikan pengecekan case insensitive
    $waktu = strtolower($waktu);
    
    // Menentukan pesan berdasarkan waktu
    if ($waktu == "pagi") {
        $pesan = "Selamat Pagi";
    } elseif ($waktu == "siang") {
        $pesan = "Selamat Siang";
    } elseif ($waktu == "sore") {
        $pesan = "Selamat Sore";
    } elseif ($waktu == "malam") {
        $pesan = "Selamat Malam";
    } else {
        $pesan = "Halo";
    }
    
    return $pesan . ", " . $nama . "!";
}

// Contoh penggunaan fungsi
echo sapa("Budi", "Pagi") . "<br>";  // Output: Selamat Pagi, Budi!
echo sapa("Ani", "Malam") . "<br>";  // Output: Selamat Malam, Ani!
echo sapa("John", "Siang") . "<br>"; // Output: Selamat Siang, John!
echo sapa("Lisa", "Sore") . "<br>";  // Output: Selamat Sore, Lisa!
echo sapa("Doni", "Tengah Hari") . "<br>"; // Output: Halo, Doni!
?>