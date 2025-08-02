<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Manajemen Produk</title>
    <style>
        table { border-collapse: collapse; width: 80%; margin: 20px auto; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
        .action-buttons a { margin-right: 5px; }
    </style>
</head>
<body>
    <h1 style="text-align: center;">Daftar Produk Toko Online</h1>
    <div style="text-align: center; margin: 20px;">
        <a href="tambah.php" style="padding: 10px; background: #4CAF50; color: white; text-decoration: none;">Tambah Produk Baru</a>
    </div>
    
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM produk";
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['id produk'] . "</td>";
                    echo "<td>" . $row['nama produk'] . "</td>";
                    echo "<td>Rp " . number_format($row['harga'], 0, ',', '.') . "</td>";
                    echo "<td>" . $row['stok'] . "</td>";
                    echo "<td class='action-buttons'>";
                    echo "<a href='edit.php?id=" . $row['id produk'] . "'>Edit</a>";
                    echo "<a href='hapus.php?id=" . $row['id produk'] . "' onclick='return confirm(\"Yakin ingin menghapus?\")'>Hapus</a>";
                    echo "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5'>Tidak ada data produk</td></tr>";
            }
            $conn->close();
            ?>
        </tbody>
    </table>
</body>
</html>