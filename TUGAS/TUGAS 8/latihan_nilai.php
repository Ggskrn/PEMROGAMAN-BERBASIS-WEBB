<!DOCTYPE html>
<html>
<head>
    <title>Penilaian Mahasiswa</title>
</head>
<body>
    <h2>Form Penilaian Mahasiswa</h2>
    <form method="post" action="">
        Nama: <input type="text" name="nama"><br>
        Nilai: <input type="number" name="nilai"><br>
        <input type="submit" value="Proses">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST['nama'];
        $nilai = $_POST['nilai'];
        
        // Menentukan predikat
        if ($nilai >= 85 && $nilai <= 100) {
            $predikat = "A";
            $status = "Lulus";
        } elseif ($nilai >= 75 && $nilai <= 84) {
            $predikat = "B";
            $status = "Lulus";
        } elseif ($nilai >= 65 && $nilai <= 74) {
            $predikat = "C";
            $status = "Lulus";
        } elseif ($nilai >= 50 && $nilai <= 64) {
            $predikat = "D";
            $status = "Lulus";
        } elseif ($nilai >= 0 && $nilai <= 49) {
            $predikat = "E";
            $status = "Tidak Lulus";
        } else {
            $predikat = "Tidak valid";
            $status = "Nilai tidak valid";
        }

        // Menampilkan hasil
        echo "<h3>Hasil Penilaian</h3>";
        echo "Nama: " . htmlspecialchars($nama) . "<br>";
        echo "Nilai: " . htmlspecialchars($nilai) . "<br>";
        echo "Predikat: " . $predikat . "<br>";
        echo "Status: " . $status . "<br>";
    }
    ?>
</body>
</html>