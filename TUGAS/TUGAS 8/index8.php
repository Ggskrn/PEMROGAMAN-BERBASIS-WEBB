<?php 
$pageTitle = "Home";
include 'header.php'; 
?>

<div class="card">
    <h1>Selamat Datang di Tugas 8 Saya</h1>
    <p style="font-size: 1.1rem; line-height: 1.8;">GAGAS CAHYA KAMAJENGAN</p>
</div>

<div class="card">
    <h2>Menu Latihan</h2>
        <div class="upload-section">
    <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(250px, 1fr)); gap: 1.5rem;">
        <a href="ukt.php" style="text-decoration: none;">
            <div style="background: white; border-radius: 8px; padding: 1.5rem; box-shadow: 0 4px 12px rgba(0,0,0,0.05); transition: all 0.3s ease; border-left: 4px solid var(--gold);">
                <h3 style="margin-top: 0; color: var(--primary);">Bayar UKT</h3>
                <p style="color: #666;">Besaran Biaya UKT berdasarkan diskon</p>
            </div>
        </a>
        
        <a href="latihan_nilai.php" style="text-decoration: none;">
            <div style="background: white; border-radius: 8px; padding: 1.5rem; box-shadow: 0 4px 12px rgba(0,0,0,0.05); transition: all 0.3s ease; border-left: 4px solid var(--gold);">
                <h3 style="margin-top: 0; color: var(--primary);">Akreditasi Nilai Akhir</h3>
                <p style="color: #666;">Hasil Akreditasi berdasarkan Nilai Akhir</p>
            </div>
        </a>
            </div>
        </a>
    </div>
</div>

<?php include 'footer.php'; ?>