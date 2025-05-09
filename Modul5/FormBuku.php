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
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 0;
        padding: 20px;
    }

    .form-container {
        background-color: #ffffff;
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
        width: 100%;
        max-width: 600px;
    }

    .form-container h2 {
        text-align: center;
        margin-bottom: 25px;
        color: #2c3e50;
    }

    .form-container input[type="text"],
    .form-container input[type="date"],
    .form-container input[type="number"] {
        width: 100%;
        padding: 12px;
        font-size: 1.1rem;
        border: 1px solid #ccc;
        border-radius: 6px;
        box-sizing: border-box;
        margin-top: 5px;
        margin-bottom: 15px;
    }

    .form-label {
        font-weight: bold;
        display: block;
        margin-bottom: 5px;
    }

    .btn-primary {
        width: 100%;
        padding: 12px;
        font-size: 1.1rem;
        background-color: #2c3e50;
        color: white;
        border: none;
        border-radius: 6px;
        cursor: pointer;
    }

    .btn-primary:hover {
        background-color: #1a252f;
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
