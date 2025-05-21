<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="card shadow-sm rounded">
                <div class="card-body">
                    <h3 class="card-title text-center mb-4 fw-bold text-success">📚 Tambah Data Buku</h3>

                    <form action="/buku/save" method="POST">
                        <?= csrf_field(); ?>

                        <!-- Judul -->
                        <div class="mb-3">
                            <label for="judul" class="form-label">Judul</label>
                            <input 
                                type="text" 
                                class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>" 
                                id="judul" 
                                name="judul" 
                                autofocus 
                                value="<?= old('judul'); ?>"
                            >
                            <div class="invalid-feedback">
                                <?= $validation->getError('judul'); ?>
                            </div>
                        </div>

                        <!-- Penulis -->
                        <div class="mb-3">
                            <label for="penulis" class="form-label">Penulis</label>
                            <input 
                                type="text" 
                                class="form-control <?= ($validation->hasError('penulis')) ? 'is-invalid' : ''; ?>" 
                                id="penulis" 
                                name="penulis" 
                                value="<?= old('penulis'); ?>"
                            >
                            <div class="invalid-feedback">
                                <?= $validation->getError('penulis'); ?>
                            </div>
                        </div>

                        <!-- Penerbit -->
                        <div class="mb-3">
                            <label for="penerbit" class="form-label">Penerbit</label>
                            <input 
                                type="text" 
                                class="form-control <?= ($validation->hasError('penerbit')) ? 'is-invalid' : ''; ?>" 
                                id="penerbit" 
                                name="penerbit" 
                                value="<?= old('penerbit'); ?>"
                            >
                            <div class="invalid-feedback">
                                <?= $validation->getError('penerbit'); ?>
                            </div>
                        </div>

                        <!-- Tahun Terbit -->
                        <div class="mb-4">
                            <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
                            <input 
                                type="text" 
                                class="form-control <?= ($validation->hasError('tahun_terbit')) ? 'is-invalid' : ''; ?>" 
                                id="tahun_terbit" 
                                name="tahun_terbit" 
                                value="<?= old('tahun_terbit'); ?>"
                            >
                            <div class="invalid-feedback">
                                <?= $validation->getError('tahun_terbit'); ?>
                            </div>
                        </div>

                        <!-- Submit -->
                        <div class="d-grid">
                            <button type="submit" class="btn btn-success shadow-sm">
                                ➕ Tambah Buku
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>