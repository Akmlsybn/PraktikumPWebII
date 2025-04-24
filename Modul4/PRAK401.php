<html>
    <head>
        <title>PRAK401</title>
    </head>
    <body>
        <form action="" method="post">
            Panjang : <input type="number" name="panjang"> <br>
            Lebar : <input type="number" name="lebar"> <br>
            Nilai : <input type="text" name="nilai"><br>
            <button type="submit" name="cetak">Cetak</button>
        </form>
        <?php
        if (isset($_POST['cetak'])){
            $Matrix = explode(separator:'', string:$_POST['nilai']);

        }
        ?>
    </body>
</html>