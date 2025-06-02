<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perhitungan Total Pembelian</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 20px;
            color: #333;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #2c3e50;
        }
        .result {
            margin-top: 20px;
            padding: 15px;
            background: #f9f9f9;
            border-left: 4px solid #3498db;
        }
        .highlight {
            font-weight: bold;
            color: #e74c3c;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🛒 Perhitungan Total Pembelian</h1>
        
        <div class="result">
            <?php
            // Konstanta pajak 10%
            define("PAJAK", 0.10);
            
            // Data barang dalam array
            $barang = [
                "nama" => "Keyboard",
                "harga" => 150000
            ];
            
            // Jumlah beli
            $jumlah_beli = 2;
            
            // Hitung total
            $total_sebelum_pajak = $barang["harga"] * $jumlah_beli;
            $pajak = $total_sebelum_pajak * PAJAK;
            $total_bayar = $total_sebelum_pajak + $pajak;
            
            // Format rupiah
            function rupiah($angka) {
                return "Rp " . number_format($angka, 0, ',', '.');
            }
            ?>
            
            <p><strong>Nama Barang:</strong> <?= $barang["nama"] ?></p>
            <p><strong>Harga Satuan:</strong> <?= rupiah($barang["harga"]) ?></p>
            <p><strong>Jumlah Beli:</strong> <?= $jumlah_beli ?></p>
            <p><strong>Total (Sebelum Pajak):</strong> <?= rupiah($total_sebelum_pajak) ?></p>
            <p><strong>Pajak (10%):</strong> <?= rupiah($pajak) ?></p>
            <p class="highlight">💳 <strong>Total Bayar:</strong> <?= rupiah($total_bayar) ?></p>
        </div>
    </div>
</body>
</html>