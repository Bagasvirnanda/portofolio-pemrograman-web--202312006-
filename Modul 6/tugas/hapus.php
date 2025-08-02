<?php
include 'koneksi.php';

// Aktifkan error reporting untuk debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Pastikan parameter id ada
if(isset($_GET['id'])) {
    $id = (int)$_GET['id'];
    
    // Gunakan backticks untuk kolom dengan spasi
    $sql = "DELETE FROM produk WHERE `id produk` = ?";
    
    $stmt = $conn->prepare($sql);
    
    if($stmt === false) {
        die("Error preparing statement: " . $conn->error);
    }
    
    $stmt->bind_param("i", $id);
    
    if ($stmt->execute()) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error deleting record: " . $stmt->error;
    }
    
    $stmt->close();
} else {
    echo "ID tidak ditemukan";
}

$conn->close();
?>