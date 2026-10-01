<?php
$page_title = "Beranda";
include __DIR__ . '/includes/header.php';

$totalBuku = count($_SESSION['buku'] ?? []);
$totalAnggota = count($_SESSION['anggota'] ?? []);
?>

        <section>
            <h2>Selamat Datang di Sistem Perpustakaan Mini &#128075;&#128218;</h2>
            <p id="deskripsiSM">Aplikasi sederhana untuk <b>mengelola data buku</b> dan <b>anggota perpustakaan</b>.</p>
            <!-- p itu paragraf, intinya kaya description-->
        </section>

        <section>
            <h2>Ringkasan</h2>
            <div class="stats-grid"> <!-- ++ biar lurus, bisa di atur di css -->
                <article> <!-- div itu untuk mengelompokkan -->
                    <h3>Total Buku</h3>
                    <p><?php echo $totalBuku ?></p>
                </article> <!-- article itu satu bagian yang bisa berdiri sendiri-->
                <article>
                    <h3>Total Anggota</h3>
                    <p><?php echo $totalAnggota ?></p> <!-- p adalah paragraf, mirip description -->
                </article>
                <article>
                    <h3>Sedang Dipinjam</h3>
                    <p>0</p>
                </article>
            </div>
        </section>
<?php include __DIR__ . '/includes/footer.php'; ?>