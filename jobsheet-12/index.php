<?php
$page_title = "Beranda";
include __DIR__ . '/includes/header.php';
require __DIR__ . '/includes/koneksi.php';

$totalBuku = $pdo->query("SELECT COUNT(*) FROM buku")->fetchColumn();
$totalAnggota = $pdo->query("SELECT COUNT(*) FROM anggota")->fetchColumn();
?>
        <section>
             <h2>Selamat Datang di Sistem Perpustakaan Mini &#128075;&#128218;</h2>
            <p id="deskripsiSM">Aplikasi sederhana untuk <b>mengelola data buku</b> dan <b>anggota perpustakaan</b>.</p>

        <section>
            <h2>Ringkasan</h2>
            <div class="stats-grid">
                <article>
                <h3>Total Buku</h3>
                <p><?php echo $totalBuku; ?></p>
            </article>
            <article>
                <h3>Total Anggota</h3>
                <p><?php echo $totalAnggota; ?></p>
            </article>
            <article>
                <h3>Sedang Dipinjam</h3>
                <p>0</p>
            </article>
            </div>
        </section>
<?php include __DIR__ . '/includes/footer.php'; ?>
