<!DOCTYPE html>
<html>
<head>
    <title>Latihan Kondisi PHP</title>
</head>
<body>
    <h1>Cek Nilai</h1>
    <?php
    $nilai = 85;
    echo "<p>Nilai Anda: $nilai</p>";

    if ($nilai > 90) {
        echo "<p style='color:blue;'>Sangat Baik! Lulus dengan predikat istimewa</p>";
    } elseif ($nilai > 80) {
        echo "<p style='color:green;'>Baik! Anda lulus dengan baik</p>";
    } elseif ($nilai >= 75) {
        echo "<p style='color:lightgreen;'>Cukup! Anda lulus</p>";
    } else {
        echo "<p style='color:red;'>Maaf, Anda perlu belajar lagi.</p>";
    }
    ?>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>Latihan Perulangan PHP</title>
</head>
<body>
    <h1>Daftar Angka 1 sampai 5</h1>
    <ul>
    <?php
    for ($i = 1; $i <= 5; $i++) {
        echo "<li>Ini adalah item nomor " . $i . "</li>";
    }
    ?>
    </ul>
</body>
</html>