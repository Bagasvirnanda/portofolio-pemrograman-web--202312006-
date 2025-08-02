<?php
// Variabel dengan berbagai tipe data
$judul_buku = "Dasar-Dasar Web";       // String
$harga = 95000;                        // Integer
$rating = 4.5;                         // Float
$tersedia = true;                      // Boolean
$penerbit = null;                      // Null
$penulis = ["John Doe", "Jane Smith"]; // Array
$edisi = (object)['terbaru' => 3];     // Object

// Menampilkan informasi detail tentang variabel
echo "<h3>Informasi Variabel:</h3>";
echo "<pre>";
var_dump($judul_buku);  // string(15) "Dasar-Dasar Web"
var_dump($harga);       // int(95000)
var_dump($rating);      // float(4.5)
var_dump($tersedia);    // bool(true)
var_dump($penerbit);    // NULL
var_dump($penulis);     // array(2) { [0]=> string(8) "John Doe" [1]=> string(10) "Jane Smith" }
var_dump($edisi);       // object(stdClass)#1 (1) { ["terbaru"]=> int(3) }
echo "</pre>";
?>