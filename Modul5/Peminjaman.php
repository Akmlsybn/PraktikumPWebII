<?php  
require 'Model.php';

$minjam = getAllMembers("SELECT * FROM peminjaman");

if (isset($_GET['id_peminjaman'])) {
    deleteData('peminjaman', 'id_peminjaman', $_GET['id_peminjaman']);
    header("Location: Peminjaman.php?id=$delete");
}
?>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f5f7fa;
        padding: 20px;
    }

    a {
        text-decoration: none;
        color: #2980b9;
        margin-right: 8px;
    }

    a:hover {
        text-decoration: underline;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
        background-color: #ffffff;
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }

    th, td {
        padding: 12px 15px;
        border: 1px solid #ddd;
        text-align: left;
    }

    th {
        background-color: #34495e;
        color: white;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    tr:hover {
        background-color: #eaf1f8;
    }

    .btn-tambah {
        display: inline-block;
        padding: 8px 16px;
        background-color: #2ecc71;
        color: white;
        border-radius: 4px;
        margin-bottom: 10px;
    }

    .btn-edit {
        display: inline-block;
        padding: 8px 16px;
        background-color: blue;
        color: white;
        border-radius: 4px;
        margin-bottom: 10px;
    }

    .btn-hapus {
        display: inline-block;
        padding: 8px 16px;
        background-color:red;
        color: white;
        border-radius: 4px;
        margin-bottom: 10px;
    }

    .btn-home{
        display: inline-block;
        padding: 8px 16px;
        background-color: #2980b9;
        color: white;
        border-radius: 4px;
        margin-bottom: 10px;
    }

    .btn-tambah:hover {
        background-color: #27ae60;
    }
</style>

<a href="index.php " class="btn-home" >Kembali</a>
<a  class="btn-tambah" href="FormPeminjaman.php" >Tambah Peminjaman</a>
<table border="1">
    <tr>
        <th>No</th>
        <th>ID Member</th>
        <th>ID Buku</th>
        <th>Tanggal Pinjam</th>
        <th>Tanggal Kembali</th>
        <th>Edit & Hapus</th>
    </tr>
<?php $no = 1; foreach ($minjam as $pinjam ): ?>
    <tr>
        <td><?= $no++ ?></td>
        <td><?= $pinjam['id_member'] ?></td>
        <td><?= $pinjam['id_buku'] ?></td>
        <td><?= $pinjam['tgl_pinjam'] ?></td>
        <td><?= $pinjam['tgl_kembali'] ?></td>
        <td>
            <a class="btn-edit" href="FormPeminjaman.php?id_peminjaman=<?= $pinjam['id_peminjaman'] ?>">Edit Data</a>
            <a class="btn-hapus" href="Peminjaman.php?id_peminjaman=<?= $pinjam['id_peminjaman'] ?>">Hapus Data</a>
        </td>
    </tr>
<?php endforeach; ?>
</table>
