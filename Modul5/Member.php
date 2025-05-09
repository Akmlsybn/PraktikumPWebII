<?php 
require 'Model.php';
$members = getAllMembers("SELECT * FROM member");

if (isset($_GET['id_member'])) {
    deleteData('member',  'id_member',  $_GET['id_member']);
    header("Location: Member.php?id=$delete");
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
</style>

<a href="index.php" class="btn-home">Kembali</a>
<a href="FormMember.php" class="btn-tambah">Tambah Member</a>
<table border="1">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Nomor</th>
        <th>Alamat</th>
        <th>Tanggal Daftar</th>
        <th>Tanggal Bayar</th>
        <th>Edit & Hapus</th>
    </tr>
<?php $no = 1; foreach ($members as $mem ): ?>
    <tr>
        <td><?= $no++ ?></td>
        <td><?= $mem['nama_member'] ?></td>
        <td><?= $mem['nomor_member'] ?></td>
        <td><?= $mem['alamat'] ?></td>
        <td><?= $mem['tgl_mendaftar'] ?></td>
        <td><?= $mem['tgl_terakhir_bayar'] ?></td>
        <td>
            <a class="btn-edit" href="FormMember.php?id_member=<?= $mem['id_member'] ?>">Edit Data</a>
            <a class="btn-hapus" href="Member.php?id_member=<?= $mem['id_member'] ?>">Hapus Data</a>
        </td>
    </tr>
<?php endforeach; ?>
</table>