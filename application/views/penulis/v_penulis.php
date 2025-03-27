<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .container {
            max-width: 900px;
        }
        .table th {
            background-color:rgb(0, 0, 0);
            color: white;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Daftar Penulis</h2>

        <!-- Notifikasi -->
        <?php if ($this->session->flashdata('success')) : ?>
            <div class="alert alert-success"><?= $this->session->flashdata('success'); ?></div>
        <?php endif; ?>
        <?php if ($this->session->flashdata('error')) : ?>
            <div class="alert alert-danger"><?= $this->session->flashdata('error'); ?></div>
        <?php endif; ?>

        <!-- Tombol Tambah Penulis -->
        <a href="<?= base_url('penulis/add'); ?>" class="btn btn-primary mb-3">
            <i class="bi bi-plus-lg"></i> Tambah Penulis
        </a>

        <!-- Tabel Penulis -->
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Tanggal Lahir</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                <?php if (!empty($penulis)) : ?>
        <?php $no = 1; foreach ($penulis as $p) : ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= isset($p->nama) ? htmlspecialchars($p->nama) : 'Tidak ada data'; ?></td>
                <td><?= isset($p->alamat) ? htmlspecialchars($p->alamat) : 'Tidak ada data'; ?></td>
                <td><?= isset($p->tanggal_lahir) ? date('d-m-Y', strtotime($p->tanggal_lahir)) : '-'; ?></td>
                <td>
                    <a href="<?= base_url('penulis/edit/' . $p->id); ?>" class="btn btn-warning btn-sm">Edit</a>
                    <a href="<?= base_url('penulis/delete/' . $p->id); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?');">Hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
    <?php else : ?>
        <tr>
            <td colspan="5" class="text-center">Belum ada data penulis.</td>
        </tr>
    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
