<?php
// Indexed array berisi nama-nama teman sekelas
$teman_sekelas = [
    "Andi Pratama",
    "Budi Santoso",
    "Citra Lestari",
    "Dewi Anggraeni",
    "Eko Wahyudi",
    "Firman Syah",
    "Gita Permata",
    "Hadi Nugroho"
];

// Menampilkan daftar nama menggunakan foreach
echo "<h3>Daftar Teman Sekelas:</h3>";
echo "<ul>";
foreach ($teman_sekelas as $nama) {
    echo "<li>" . $nama . "</li>";
}
echo "</ul>";

// Alternatif dengan penomoran
echo "<h3>Daftar Teman Sekelas dengan Nomor:</h3>";
echo "<ol>";
foreach ($teman_sekelas as $index => $nama) {
    echo "<li>" . ($index + 1) . ". " . $nama . "</li>";
}
echo "</ol>";
?>