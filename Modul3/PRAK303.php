<html>
    <head>
        <title>PRAK303</title>
    </head>
    <body>
        <form action="" method="post">
        Batas Bawah: <input type="number" name="batasBawah"><br>
        Batas Atas: <input type="number" name="batasAtas"><br>
        <button type="submit" name="submit">Cetak</button><br><br>
        </form>
    </body>

    <?php 
    if (isset($_POST['submit'])){
        $batasBawah = $_POST['batasBawah'];
        $batasAtas = $_POST['batasAtas'];
        $i = $batasBawah;

        while ($i <= $batasAtas){
            if ((($i +7) % 5) == 0){
                echo "<img src='bintang.png' height='20' width='20'>";
            } else {
                echo $i . " ";
            }
            $i++;
        }
    }
    ?>
</html>