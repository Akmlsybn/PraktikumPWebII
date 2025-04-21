<?php
$jumlah = 0;

if (isset($_POST['submit'])) {
    $jumlah = $_POST['jumlah'];
}

if (isset($_POST['tambah'])) {
    $jumlah = $_POST['jumlah'] + 1;
}

if (isset($_POST['kurang'])) {
    $jumlah = $_POST['jumlah'] - 1;
    if ($jumlah < 0) {
        $jumlah = 0;
    }
}
?>

<html>
    <head>
        <title>PRAK304</title>
    </head>
    <body>
    <form method="post">
    <?php if (!isset($_POST['submit']) && !isset($_POST['tambah']) && !isset($_POST['kurang'])): ?>
        Jumlah bintang: <input type="number" name="jumlah"><br>
        <button type="submit" name="submit">Submit</button>
    <?php else: ?>
        <p>Jumlah bintang <?= $jumlah ?></p>

        <?php
        for ($i = 0; $i < $jumlah; $i++) {
            echo "<img src='bintang.png' width='50'>";
        }
        ?>
        <br>
        <input type="hidden" name="jumlah" value="<?= $jumlah ?>">
        <button type="submit" name="tambah">Tambah</button>
        <button type="submit" name="kurang">Kurang</button>
    <?php endif; ?>
    </body>
</html>