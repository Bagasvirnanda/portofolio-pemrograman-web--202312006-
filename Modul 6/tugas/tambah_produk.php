<!DOCTYPE html>
<html>
<head>
    <title>Tambah Produk Baru</title>
    <style>
        form { width: 50%; margin: 20px auto; }
        input[type="text"], input[type="number"] { 
            width: 100%; 
            padding: 8px; 
            margin: 5px 0 15px; 
        }
        input[type="submit"] { 
            background: #4CAF50; 
            color: white; 
            padding: 10px 15px; 
            border: none; 
            cursor: pointer; 
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">Tambah Produk Baru</h1>
    <form action="tambah.php" method="post">
        <label for="nama_produk">Nama Produk:</label>
        <input type="text" name="nama_produk" required>
        
        <label for="harga">Harga:</label>
        <input type="number" name="harga" min="0" required>
        
        <label for="stok">Stok:</label>
        <input type="number" name="stok" min="0" required>
        
        <input type="submit" value="Simpan">
    </form>
</body>
</html>