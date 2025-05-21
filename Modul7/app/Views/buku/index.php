<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container py-3">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h1 class="mb-2 text-center fw-bold">📚 Daftar Buku</h1>
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>

            <div class="d-flex justify-content-end mb-3">
                <a href="/buku/create" class="btn btn-primary shadow-sm">
                    ➕ Tambah Buku
                </a>
            </div>

            <div class="table-responsive">
                <table class="table table-striped table-hover align-middle shadow-sm rounded">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Judul</th>
                            <th scope="col">Penulis</th>
                            <th scope="col">Penerbit</th>
                            <th scope="col">Tahun Terbit</th>
                            <th scope="col" class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($buku as $b) : ?>
                            <tr>
                                <th scope="row"><?= $i++; ?></th>
                                <td><?= esc($b['judul']); ?></td>
                                <td><?= esc($b['penulis']); ?></td>
                                <td><?= esc($b['penerbit']); ?></td>
                                <td><?= esc($b['tahun_terbit']); ?></td>
                                <td class="text-center">
                                    <a href="/buku/edit/<?= $b['id']; ?>" class="btn btn-sm btn-warning me-1">✏️ Edit</a>
                                    <form action="/buku/<?= $b['id']; ?>" method="post" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus?');">
                                        <?= csrf_field(); ?>
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="btn btn-sm btn-danger">🗑️ Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>
<?= $this->endSection(); ?>