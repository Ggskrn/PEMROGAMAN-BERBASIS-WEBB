<?php
include 'koneksi_db.php'; // Ganti sesuai dengan nama file koneksi kamu

// Ambil data buku dari database
$result = $conn->query("SELECT * FROM Buku");

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Hapus Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php include 'nav.php'; ?> <!-- Opsional, jika kamu punya file nav -->
    <div class="container mt-4">
        <h2>Hapus Buku</h2>
        <p>Pilih buku yang ingin dihapus:</p>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Tahun Terbit</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?= $row['ID'] ?></td>
                        <td><?= htmlspecialchars($row['Judul']) ?></td>
                        <td><?= htmlspecialchars($row['Penulis']) ?></td>
                        <td><?= $row['Tahun_Terbit'] ?></td>
                        <td>Rp<?= number_format($row['Harga'], 2) ?></td>
                        <td><?= $row['stok'] ?></td>
                        <td>
                            <a href="proses_hapus.php?id=<?= $row['ID'] ?>" 
                               class="btn btn-danger btn-sm"
                               onclick="return confirm('Yakin ingin menghapus buku ini?')">
                               Hapus
                            </a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
