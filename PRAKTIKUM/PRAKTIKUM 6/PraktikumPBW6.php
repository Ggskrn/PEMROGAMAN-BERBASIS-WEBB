<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum PHP: Total Pembelian</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            background-color: #f5f5f5;
            color: #333;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        .container {
            background: white;
            border-radius: 8px;
            padding: 25px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        h1 {
            color: #2c3e50;
            text-align: center;
            border-bottom: 2px solid #3498db;
            padding-bottom: 10px;
        }
        .section {
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 1px dashed #ddd;
        }
        .result {
            background: #f9f9f9;
            padding: 15px;
            border-left: 4px solid #3498db;
            margin-top: 15px;
        }
        .highlight {
            color: #e74c3c;
            font-weight: bold;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 15px 0;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Praktikum PHP: Total Pembelian dengan Array</h1>

        <!-- Contoh Variabel -->
        <div class="section">
            <h2>1. Contoh Variabel</h2>
            <?php
            $nama = "Budi";
            $umur = 20;
            echo "<p>Nama: $nama</p>";
            echo "<p>Umur: $umur tahun</p>";
            ?>
        </div>

        <!-- Contoh Konstanta -->
        <div class="section">
            <h2>2. Contoh Konstanta</h2>
            <?php
            define("SITE_NAME", "unsika.ac.id");
            define("VERSION", "1.0");
            echo "<p>Selamat datang di " . SITE_NAME . "</p>";
            echo "<p>Versi Sistem: " . VERSION . "</p>";
            ?>
        </div>

        <!-- Contoh Tipe Data -->
        <div class="section">
            <h2>3. Contoh Tipe Data</h2>
            <table>
                <tr>
                    <th>Tipe Data</th>
                    <th>Contoh</th>
                    <th>Output</th>
                </tr>
                <tr>
                    <td>String</td>
                    <td>$nama = "Andi";</td>
                    <td><?php $nama = "Andi"; echo $nama; ?></td>
                </tr>
                <tr>
                    <td>Integer</td>
                    <td>$umur = 25;</td>
                    <td><?php $umur = 25; echo $umur; ?></td>
                </tr>
                <tr>
                    <td>Float</td>
                    <td>$berat = 55.5;</td>
                    <td><?php $berat = 55.5; echo $berat; ?></td>
                </tr>
                <tr>
                    <td>Boolean</td>
                    <td>$isLogin = true;</td>
                    <td><?php $isLogin = true; echo $isLogin ? 'true' : 'false'; ?></td>
                </tr>
                <tr>
                    <td>Array</td>
                    <td>$buah = ["apel", "jeruk"];</td>
                    <td><?php $buah = ["apel", "jeruk"]; echo $buah[1]; ?></td>
                </tr>
            </table>
        </div>

        <!-- Contoh Operator Aritmatika -->
        <div class="section">
            <h2>4. Contoh Operator Aritmatika</h2>
            <?php
            $a = 10;
            $b = 3;
            echo "<p>Penjumlahan ($a + $b): " . ($a + $b) . "</p>";
            echo "<p>Pengurangan ($a - $b): " . ($a - $b) . "</p>";
            echo "<p>Perkalian ($a * $b): " . ($a * $b) . "</p>";
            echo "<p>Pembagian ($a / $b): " . round($a / $b, 2) . "</p>";
            echo "<p>Modulus ($a % $b): " . ($a % $b) . "</p>";
            ?>
        </div>

        <!-- Latihan Praktikum -->
        <div class="section">
            <h2>5. Latihan Praktikum: Perhitungan Total Pembelian</h2>
            <div class="result">
                <?php
                // Konstanta pajak 10%
                define("PAJAK", 0.10);
                
                // Data barang dalam array
                $barang = [
                    "nama" => "Keyboard",
                    "harga" => 150000
                ];
                
                // Variabel jumlah beli
                $jumlah_beli = 2;
                
                // Hitung total harga
                $total_sebelum_pajak = $barang["harga"] * $jumlah_beli;
                $pajak = $total_sebelum_pajak * PAJAK;
                $total_bayar = $total_sebelum_pajak + $pajak;
                
                // Fungsi format rupiah
                function formatRupiah($angka) {
                    return "Rp " . number_format($angka, 0, ',', '.');
                }
                ?>
                
                <p><strong>Nama Barang:</strong> <?= $barang["nama"] ?></p>
                <p><strong>Harga Satuan:</strong> <?= formatRupiah($barang["harga"]) ?></p>
                <p><strong>Jumlah Beli:</strong> <?= $jumlah_beli ?></p>
                <p><strong>Total Harga (Sebelum Pajak):</strong> <?= formatRupiah($total_sebelum_pajak) ?></p>
                <p><strong>Pajak (10%):</strong> <?= formatRupiah($pajak) ?></p>
                <p class="highlight"><strong>Total Bayar:</strong> <?= formatRupiah($total_bayar) ?></p>
            </div>
        </div>
    </div>
</body>
</html>