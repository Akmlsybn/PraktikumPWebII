<?php 
require 'Model.php';
$buku = getAllMembers("SELECT * FROM buku");

if (isset($_GET['buku'])) {
    deleteData('buku', 'id_buku', $_GET['buku']);
    header("Location: Buku.php?id=$delete");
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

    .btn-tambah {
        display: inline-block;
        padding: 8px 16px;
        background-color: #2ecc71;
        color: white;
        border-radius: 4px;
        margin-bottom: 10px;
    }

    .btn-tambah:hover {
        background-color: #27ae60;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 10px;
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
        background-color: #f9f9f9;
    }

    tr:hover {
        background-color: #eaf1f8;
    }

    .btn-home{
        display: inline-block;
        padding: 8px 16px;
        background-color: #2980b9;
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
</style>

<a href="index.php" class="btn-home">Kembali</a>
<a href="FormBuku.php" class="btn-tambah">Tambah Buku</a>
<table border="1">
    <tr>
        <th>No</th>
        <th>Judul</th>
        <th>Pengarang</th>
        <th>Penerbit</th>
        <th>Tahun Terbit</th>
        <th>Edit dan Hapus</th>
    </tr>
<?php $no = 1; foreach ($buku as $book ): ?>
    <tr>
        <td><?= $no++ ?></td>
        <td><?= $book['judul_buku'] ?></td>
        <td><?= $book['penulis'] ?></td>
        <td><?= $book['penerbit'] ?></td>
        <td><?= $book['tahun_terbit'] ?></td>
        <td>
            <a class="btn-edit" href="FormBuku.php?id_buku=<?= $book['id_buku'] ?>">Edit Data</a>
            <a class="btn-hapus" href="Buku.php?buku=<?= $book['id_buku'] ?>">Hapus Data</a>
        </td>
    </tr>
<?php endforeach; ?>
</table>
