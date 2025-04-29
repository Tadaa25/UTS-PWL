<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<style>
    .custom-header {
        background-color: #b095fc;
        color: white;
        padding: 1rem;
        border-radius: 0.5rem 0.5rem 0 0;
    }

    .custom-card {
        border: 1px solid #e0e0e0;
        border-radius: 0.5rem;
        overflow: hidden;
        box-shadow: 0 2px 8px rgba(0,0,0,0.05);
        background-color: #fdfdff;
    }

    .btn-custom {
        background-color: #b095fc;
        color: white;
    }

    .btn-custom:hover {
        background-color: #9b82f0;
        color: white;
    }

    .table thead {
        background-color: #f0eaff;
    }

    .table tbody tr:hover {
        background-color: #f7f3ff;
    }
</style>

<div class="container mt-4">
    <div class="custom-card">
        <div class="custom-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Manajemen Pengguna</h5>
            <a href="<?= base_url('users/create') ?>" class="btn btn-light text-dark">
                <i class="bi bi-person-plus"></i> Tambah User
            </a>
        </div>
        <div class="p-3">
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Username</th>
                            <th>Role</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($users)): ?>
                            <?php foreach ($users as $index => $user): ?>
                                <tr>
                                    <td><?= $index + 1 ?></td>
                                    <td><?= esc($user['username']) ?></td>
                                    <td><?= esc($user['role']) ?></td>
                                    <td class="text-center">
                                        <a href="<?= base_url('users/edit/' . esc($user['username'])) ?>" class="btn btn-sm btn-outline-primary me-2">
                                            <i class="bi bi-pencil-square"></i> Edit
                                        </a>
                                        <a href="<?= base_url('users/delete/' . esc($user['username'])) ?>" class="btn btn-sm btn-outline-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus user ini?')">
                                            <i class="bi bi-trash"></i> Hapus
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="4" class="text-center text-muted">Tidak ada data pengguna.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
