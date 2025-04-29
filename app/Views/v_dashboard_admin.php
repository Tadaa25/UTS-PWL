<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<h2 class="mb-4">👋 Selamat Datang, <strong><?= esc($username) ?></strong></h2>
<p class="mb-5 text-muted">Role Anda: <span class="badge bg-info text-white"><?= esc($role) ?></span></p>

<div class="row">
    <!-- Total Users Card -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-0 shadow h-100 py-2 card-hover bg-light">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col mr-2">
                        <div class="text-sm fw-bold text-primary text-uppercase mb-1">
                            👥 Total Anggota Grup
                        </div>
                        <div class="h4 mb-0 fw-bold text-dark">
                            <?= esc($userCount) ?>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-users fa-3x text-primary"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Admin Users Card -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-0 shadow h-100 py-2 card-hover bg-success text-white">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col mr-2">
                        <div class="text-sm fw-bold text-uppercase mb-1">
                            🛡️ Admin Perpustakaan
                        </div>
                        <div class="h4 mb-0 fw-bold">
                            <?= esc($adminCount) ?>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-user-shield fa-3x text-white-50"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Regular Users Card -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-0 shadow h-100 py-2 card-hover bg-warning text-dark">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col mr-2">
                        <div class="text-sm fw-bold text-uppercase mb-1">
                            📚 User Perpustakaan
                        </div>
                        <div class="h4 mb-0 fw-bold">
                            <?= esc($userRoleCount) ?>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-book-reader fa-3x text-dark-50"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .card-hover {
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .card-hover:hover {
        transform: translateY(-5px);
        box-shadow: 0 0 20px rgba(0,0,0,0.15);
    }

    .text-sm {
        font-size: 0.85rem;
    }

    .fw-bold {
        font-weight: 600;
    }
</style>

<?= $this->endSection() ?>
