<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
<img src="<?= base_url('images/' . $biodata['gambar']) ?>" alt="Foto" class="img-thumbnail mb-3" width="200">
<p><b>Nama: <?= $biodata['nama'] ?></b></p>
<p><b>NIM: <?= $biodata['nim'] ?></b></p>
<?= $this->endSection() ?>
