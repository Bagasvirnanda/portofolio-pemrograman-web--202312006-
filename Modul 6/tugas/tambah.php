<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Gunakan nama kolom sesuai database (dengan spasi)
    $sql = "INSERT INTO produk (`nama produk`, harga, stok) VALUES (?, ?, ?)";
    
    $nama_produk = $conn->real_escape_string($_POST['nama_produk']);
    $harga = (int)$_POST['harga'];
    $stok = (int)$_POST['stok'];

    $stmt = $conn->prepare($sql);
    
    if ($stmt) {
        $stmt->bind_param("sii", $nama_produk, $harga, $stok);
        
        if ($stmt->execute()) {
            header("Location: index.php");
            exit();
        } else {
            echo "Error: " . $stmt->error;
        }
    } else {
        echo "Error: " . $conn->error;
    }
} else {
    header("Location: tambah_produk.php");
    exit();
}

$conn->close();
?>