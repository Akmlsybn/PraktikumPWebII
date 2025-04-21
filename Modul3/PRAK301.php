<html>
    <head>
        <title>PRAK301</title>
    </head>
    <body>
        <form method="post">
        Jumlah Peserta: <input type="number" name="peserta"><br>
        <button type="submit" name="submit">Cetak</button>
        </form>
    </body>
    <?php 
    if(isset($_POST['submit'])){
        $peserta = $_POST['peserta'];
        $i = 1;

        while($i <= $peserta){
            if ($i % 2 == 0) {
                echo "<h1 style='color:green;'>Peserta ke-$i</h1>";
            } else {
                echo "<h1 style='color:red;'>Peserta ke-$i</h1>";
            }
            $i++;
        }
    }
    ?>
</html>