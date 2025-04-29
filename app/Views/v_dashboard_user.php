<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<h2 class="mb-4">👋 Selamat Datang, <strong><?= esc($username) ?></strong></h2>
<p class="mb-5 text-muted">Role Anda: <span class="badge bg-info text-white"><?= esc($role) ?></span></p>

<!-- Dashboard User Perpustakaan -->
<div class="row mb-4">
    <!-- Informasi Buku yang Sedang Dipinjam -->
    <div class="col-md-6">
        <div class="card shadow">
            <div class="card-body">
                <h5 class="card-title">Status Peminjaman Buku</h5>
                <p><strong>Judul Buku:</strong> Pemrograman Dasar</p>
                <p><strong>Tanggal Peminjaman:</strong> 20 April 2025</p>
                <p><strong>Tanggal Jatuh Tempo:</strong> 4 Mei 2025</p>
                <p><strong>Status:</strong> <span class="btn btn-success">Dipinjam</span></p>

            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card shadow">
            <div class="card-body">
                <h5 class="card-title">Riwayat Peminjaman</h5>
                <p><strong>Total Buku Dipinjam:</strong> 12</p>
                <p><strong>Terlambat Pernah:</strong> 1 kali</p>
                <p><strong >Denda Terakhir:</strong> <a class="btn btn-warning">Rp5.000</a></p>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
