<?php 
require 'Model.php';

$peminjaman = ['id_peminjaman' => '', 'id_member' => '', 'id_buku' => '', 'tgl_pinjam' => '', 'tgl_kembali' => ''];

if (isset($_GET['id_peminjaman'])) {
    $id_peminjaman = $_GET['id_peminjaman'];
    $query = "SELECT * FROM peminjaman WHERE id_peminjaman = $id_peminjaman";
    $peminjaman = getAllMembers($query)[0];
}

if (isset($_POST['submit'])){
    if (isset($_GET['id_peminjaman'])) {
        updateData('peminjaman', $_POST, 'id_peminjaman', $_GET['id_peminjaman']);
    } else {
        insertData('peminjaman', $_POST);
    }
    header("Location: Peminjaman.php");
}
?>

<style>
    body {
        background: linear-gradient(to right, #a1c4fd, #c2e9fb);
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
        margin-top: 10px;
    }
</style>


<div class="form-container">
    <h2>Form Peminjaman</h2>
    <form method="POST">
        <?php if (isset($_GET['id_peminjaman'])): ?>
            <input type="hidden" name="id_peminjaman" value="<?= $peminjaman['id_peminjaman'] ?>">
        <?php endif; ?>

        <div class="mb-3">
            <label for="id_member" class="form-label">Pilih Member</label>
            <select name="id_member" id="id_member" class="form-select" required>
                <option value="">Pilih Member</option>
                <?php 
                $members = getAllMembers("SELECT * FROM member");
                foreach ($members as $member): ?>
                    <option value="<?= $member['id_member'] ?>" <?= ($peminjaman['id_member'] == $member['id_member']) ? 'selected' : '' ?>>
                        <?= $member['nama_member'] ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="mb-3">
            <label for="id_buku" class="form-label">Pilih Buku</label>
            <select name="id_buku" id="id_buku" class="form-select" required>
                <option value="">Pilih Buku</option>
                <?php 
                $books = getAllMembers("SELECT * FROM buku");
                foreach ($books as $book): ?>
                    <option value="<?= $book['id_buku'] ?>" <?= ($peminjaman['id_buku'] == $book['id_buku']) ? 'selected' : '' ?>>
                        <?= $book['judul_buku'] ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="mb-3">
            <label for="tgl_pinjam" class="form-label">Tanggal Pinjam</label>
            <input type="date" class="form-control" id="tgl_pinjam" name="tgl_pinjam" value="<?= $peminjaman['tgl_pinjam'] ?>" required>
        </div>
        <div class="mb-3">
            <label for="tgl_kembali" class="form-label">Tanggal Kembali</label>
            <input type="date" class="form-control" id="tgl_kembali" name="tgl_kembali" value="<?= $peminjaman['tgl_kembali'] ?>" required>
        </div>
        <button type="submit" name="submit" class="btn btn-primary w-100">Simpan</button>
    </form>
</div>
