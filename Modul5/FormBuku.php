<?php 
require 'Model.php';

$buku = ['id_buku' => '', 'judul_buku' => '', 'penulis' => '', 'penerbit' => '', 'tahun_terbit' => ''];
if (isset($_GET['id_buku'])) {
    $id_buku = $_GET['id_buku'];
    $query = "SELECT * FROM buku WHERE id_buku = $id_buku";
    $buku = getAllMembers($query)[0];
}

if (isset($_POST['submit'])){
    if (isset($_GET['id_buku'])) {
        updateData('buku', $_POST, 'id_buku', $_GET['id_buku']);
    } else {
        insertData('buku', $_POST);
    }
    header("Location: Buku.php");
}
?>

<style>
    body {
        background: linear-gradient(to right, #ffecd2, #fcb69f);
        font-family: Arial, sans-serif;
        min-height: 100vh;
        margin: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 20px;
    }

    .form-container {
        background-color: #fff;
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
        width: 100%;
        max-width: 500px;
    }

    .form-container h2 {
        text-align: center;
        margin-bottom: 25px;
        color: #333;
    }

    .btn-primary {
        width: 100%;
    }
</style>

<div class="form-container">
    <h2>Form Buku</h2>
    <form method="POST">
        <?php if (isset($_GET['id_buku'])): ?>
            <input type="hidden" name="id_buku" value="<?= $buku['id_buku'] ?>">
        <?php endif; ?>
        <div class="mb-3">
            <label for="judul_buku" class="form-label">Judul Buku</label>
            <input type="text" class="form-control" id="judul_buku" name="judul_buku" value="<?= $buku['judul_buku'] ?>" required>
        </div>
        <div class="mb-3">
            <label for="penulis" class="form-label">Penulis</label>
            <input type="text" class="form-control" id="penulis" name="penulis" value="<?= $buku['penulis'] ?>" required>
        </div>
        <div class="mb-3">
            <label for="penerbit" class="form-label">Penerbit</label>
            <input type="text" class="form-control" id="penerbit" name="penerbit" value="<?= $buku['penerbit'] ?>" required>
        </div>
        <div class="mb-3">
            <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
            <input type="text" class="form-control" id="tahun_terbit" name="tahun_terbit" value="<?= $buku['tahun_terbit'] ?>" required>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
