<?php 
require 'Model.php';

$member = ['id_member' => '', 'nama_member' => '', 'nomor_member' => '', 'alamat' => '', 'tgl_terakhir_bayar' => ''];
if (isset($_GET['id_member'])) {
    $id_member = $_GET['id_member'];
    $query = "SELECT * FROM member WHERE id_member = $id_member";
    $member = getAllMembers($query)[0];
}

if (isset($_POST['submit'])){
    if (isset($_GET['id_member'])) {
        updateData('member', $_POST, 'id_member', $_GET['id_member']);
    } else {
        insertData('member', $_POST);
    }
    header("Location: Member.php");
}
?>

<style>
    body {
        background: linear-gradient(to right, #74ebd5, #9face6);
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
        max-width: 500px;
    }

    .form-container h2 {
        text-align: center;
        margin-bottom: 25px;
        color: #2c3e50;
    }

    .btn-primary {
        width: 100%;
    }
</style>


<div class="form-container">
    <h2>Form Member</h2>
    <form method="POST">
        <?php if (isset($_GET['id_member'])): ?>
            <input type="hidden" name="id_member" value="<?= $member['id_member'] ?>">
        <?php endif; ?>
        <div class="mb-3">
            <label for="nama_member" class="form-label">Nama Member</label>
            <input type="text" class="form-control" id="nama_member" name="nama_member" value="<?= $member['nama_member'] ?>" required>
        </div>
        <div class="mb-3">
            <label for="nomor_member" class="form-label">Nomor Member</label>
            <input type="text" class="form-control" id="nomor_member" name="nomor_member" value="<?= $member['nomor_member'] ?>" required>
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $member['alamat'] ?>" required>
        </div>
        <div class="mb-3">
            <label for="tgl_bayar" class="form-label">Tanggal Bayar</label>
            <input type="date" class="form-control" id="tgl_bayar" name="tgl_terakhir_bayar" value="<?= $member['tgl_terakhir_bayar'] ?>" required>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
