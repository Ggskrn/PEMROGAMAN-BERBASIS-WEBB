<?php 
$pageTitle = "Home";
include 'header.php'; 
?>

<div class="card">
    <h1>Selamat Datang di Latihan Praktikum Saya</h1>
    <p style="font-size: 1.1rem; line-height: 1.8;">GAGAS CAHYA KAMAJENGAN</p>
</div>

<div class="card">
    <h2>Menu Latihan</h2>
        <div class="upload-section">
          <a>
                <div class="upload-section">
                <h2>LIST TUGAS</h2>
                <ol class="assignment-list">
                    <li><a href="Tugas1.html">Tugas 1 - [Membuat Lamaran Pekerjaan]</a></li>
                    <li><a href="Tugas2.html">Tugas 2 - [Membuat Formulir Daftar Sederhana]</a></li>
                    <li><a href="Tugas3.html">Tugas 3 - [Membuat Website Sederhana]</a></li>
                    <li><a href="Tugas5.html">Tugas 4 - [Membuat Program Javascript Sederhana]</a></li>
                    <li><a href="Tugas6.php">Tugas 6 - [Membuat Program Javascript Sederhana]</a></li>
                    
                </ol>
            
                <h2>LIST PRAKTIKUM</h2>
                <ol class="assignment-list">
                    <li><a href="praktikumPBW1.html">Praktikum 1</a></li>
                    <li><a href="praktikumPBW2.html">Praktikum 2</a></li>
                    <li><a href="praktikumPBW5.html">Praktikum 3</a></li>
                    <li><a href="praktikumPBWPaKamal.html">Praktikum 4</a></li>
                </ol>
            </div>
        </a>
    <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(250px, 1fr)); gap: 1.5rem;">
        <a href="kendaraan.php" style="text-decoration: none;">
            <div style="background: white; border-radius: 8px; padding: 1.5rem; box-shadow: 0 4px 12px rgba(0,0,0,0.05); transition: all 0.3s ease; border-left: 4px solid var(--gold);">
                <h3 style="margin-top: 0; color: var(--primary);">Jenis Kendaraan</h3>
                <p style="color: #666;">Analisis kendaraan berdasarkan jumlah roda</p>
            </div>
        </a>
        
        <a href="bilangan_genap.php" style="text-decoration: none;">
            <div style="background: white; border-radius: 8px; padding: 1.5rem; box-shadow: 0 4px 12px rgba(0,0,0,0.05); transition: all 0.3s ease; border-left: 4px solid var(--gold);">
                <h3 style="margin-top: 0; color: var(--primary);">Bilangan Genap</h3>
                <p style="color: #666;">Deret bilangan genap 2-10</p>
            </div>
        </a>
        
        <a href="daftar_hewan.php" style="text-decoration: none;">
            <div style="background: white; border-radius: 8px; padding: 1.5rem; box-shadow: 0 4px 12px rgba(0,0,0,0.05); transition: all 0.3s ease; border-left: 4px solid var(--gold);">
                <h3 style="margin-top: 0; color: var(--primary);">Daftar Hewan</h3>
                <p style="color: #666;">Koleksi berbagai nama hewan</p>
            </div>
        </a>
        <a href="latihan_nilai.php" style="text-decoration: none;">
            <div style="background: white; border-radius: 8px; padding: 1.5rem; box-shadow: 0 4px 12px rgba(0,0,0,0.05); transition: all 0.3s ease; border-left: 4px solid var(--gold);">
                <h3 style="margin-top: 0; color: var(--primary);">Daftar Hewan</h3>
                <p style="color: #666;">Koleksi berbagai nama hewan</p>
            </div>
        </a>
            </div>
        </a>
    </div>
</div>

<?php include 'footer.php'; ?>