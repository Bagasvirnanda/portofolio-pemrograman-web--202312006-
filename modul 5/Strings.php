<?php
$kalimat = "STITEK Bontang adalah kampus IT terbaik";

// Menampilkan informasi string asli
echo "<h3>String Asli:</h3>";
echo $kalimat . "<br><br>";

// Menampilkan informasi string dengan berbagai fungsi
echo "<h3>Analisis String:</h3>";
echo "Panjang kalimat: " . strlen($kalimat) . " karakter<br>";
echo "Jumlah kata: " . str_word_count($kalimat) . " kata<br>";
echo "Mengganti kata: " . str_replace("terbaik", "favorit", $kalimat) . "<br>";

// Mengubah semua teks menjadi huruf kapital
echo "<h3>String dalam Huruf Kapital:</h3>";
echo strtoupper($kalimat);
?>