<?php
include 'koneksi.php';
$id = $_GET['id'];
$sql = "SELECT * FROM produk WHERE `id produk` = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
$stmt->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Produk</title>
</head>
<body>
    <h2>Edit Produk</h2>
    <form action="process_edit_produk.php" method="POST">
        <input type="hidden" name="id_produk" value="<?php echo $row['id produk']; ?>">
        
        Nama Produk:
        <input type="text" name="name_produk" value="<?php echo $row['nama produk']; ?>" required><br><br>
        
        Harga:
        <input type="number" name="harga" value="<?php echo $row['harga']; ?>" required><br><br>
        
        Stok:
        <input type="number" name="stok" value="<?php echo $row['stok']; ?>" required><br><br>
        
        <input type="submit" value="Update">
    </form>
    
</body>
</html>