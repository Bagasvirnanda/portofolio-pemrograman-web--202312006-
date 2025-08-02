<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_produk = (int)$_POST['id_produk'];
    $nama_produk = $conn->real_escape_string($_POST['name_produk']);
    $harga = (int)$_POST['harga'];
    $stok = (int)$_POST['stok'];

    $sql = "UPDATE produk SET `nama produk`=?, harga=?, stok=? WHERE `id produk`=?";
    $stmt = $conn->prepare($sql);
    
    if ($stmt) {
        $stmt->bind_param("siii", $nama_produk, $harga, $stok, $id_produk);
        
        if ($stmt->execute()) {
            header("Location: index.php");
            exit();
        } else {
            die("Error execute: " . $stmt->error);
        }
    } else {
        die("Error prepare: " . $conn->error);
    }
} else {
    die("Invalid request method");
}
?>