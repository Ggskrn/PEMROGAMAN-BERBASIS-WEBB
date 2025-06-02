<!DOCTYPE html>
<html>
<head>
    <title>Diskon Pembayaran Mahasiswa</title>
</head>
<body>
    <h2>Form Pembayaran UKT Mahasiswa</h2>
    <form method="post" action="">
        NPM: <input type="text" name="npm"><br>
        Nama: <input type="text" name="nama"><br>
        Prodi: <input type="text" name="prodi"><br>
        Semester: <input type="number" name="semester"><br>
        Biaya UKT: <input type="number" name="biaya_ukt"><br>
        <input type="submit" value="Hitung">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $npm = $_POST['npm'];
        $nama = $_POST['nama'];
        $prodi = $_POST['prodi'];
        $semester = $_POST['semester'];
        $biaya_ukt = $_POST['biaya_ukt'];
        
        // Menghitung diskon
        $diskon = 0;
        
        if ($biaya_ukt >= 5000000 && $semester > 8) {
            $diskon = 15;
        } elseif ($biaya_ukt >= 5000000) {
            $diskon = 10;
        }
        
        $jumlah_diskon = ($biaya_ukt * $diskon) / 100;
        $total_bayar = $biaya_ukt - $jumlah_diskon;
        
        // Format mata uang
        $biaya_ukt_formatted = "Rp. " . number_format($biaya_ukt, 0, ',', '.');
        $total_bayar_formatted = "Rp. " . number_format($total_bayar, 0, ',', '.');

        // Menampilkan hasil
        echo "<h3>Detail Pembayaran</h3>";
        echo "NPM: " . htmlspecialchars($npm) . "<br>";
        echo "NAMA: " . htmlspecialchars($nama) . "<br>";
        echo "PRODI: " . htmlspecialchars($prodi) . "<br>";
        echo "SEMESTER: " . htmlspecialchars($semester) . "<br>";
        echo "BIAYA UKT: " . $biaya_ukt_formatted . "<br>";
        echo "DISKON: " . $diskon . "%<br>";
        echo "YANG HARUS DIBAYAR: " . $total_bayar_formatted . "<br>";
    }
    ?>
</body>
</html>