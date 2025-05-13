<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
<img src="<?= base_url('images/' . $biodata['gambar']) ?>" alt="Foto" class="img-thumbnail mb-3" width="200">
<p>Nama: <?= $biodata['nama'] ?></p>
<p>NIM: <?= $biodata['nim'] ?></p>
<?= $this->endSection() ?>
