<?php
$ukuran_baju = "M"; // Anda bisa mengubah nilai ini untuk menguji ukuran berbeda

switch ($ukuran_baju) {
    case "S":
        echo "Anda memilih ukuran Small (Kecil)";
        break;
    case "M":
        echo "Anda memilih ukuran Medium (Sedang)";
        break;
    case "L":
        echo "Anda memilih ukuran Large (Besar)";
        break;
    case "XL":
        echo "Anda memilih ukuran Extra Large (Sangat Besar)";
        break;
    default:
        echo "Ukuran yang Anda pilih tidak tersedia";
}
?>