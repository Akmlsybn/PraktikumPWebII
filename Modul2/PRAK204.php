<html>
    <head>
        <title>PRAK204</title>
    </head>
    <body>
        <form method="post">
            Nilai: <input type="number" name="nilai"><br>
            <input type="submit" name="konversi" value="Konversi">
        </form>
    </body>
</html>

<?php
if (isset($_POST['konversi'])){
    $nilai = $_POST['nilai'];
    if ($nilai == null){
        echo "<h2>Hasil: nol</h2>";
    } else if ($nilai > 0 && $nilai < 10){
        echo "<h2>Hasil: satuan</h2>";
    } else if ($nilai >= 11 && $nilai < 20){
        echo "<h2>Hasil: belasan</h2>";
    } else if ($nilai >= 10 && $nilai < 100){
        echo "<h2>Hasil: puluhan</h2>";
    } else if ($nilai >= 100 && $nilai < 1000){
        echo "<h2>Hasil: ratusan</h2>";
    } else {
        echo "<h2>Hasil: Anda Menginput Melebihi Limit Bilangan</h2>";
    }
} 
?>