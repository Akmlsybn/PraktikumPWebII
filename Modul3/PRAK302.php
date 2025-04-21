<html>
    <head>
        <title>PRAK302</title>
    </head>
    <body>
        <form action="" method="post">
            Tinggi: <input type="number" name="tinggi"><br>
            Alamat Gambar: <input type="text" name="gambar"><br>
            <button type="submit" name="submit">Cetak</button>
        </form>

        <?php 
        if(isset($_POST['submit'])){
            $tinggi = $_POST['tinggi'];
            $gambar = $_POST['gambar'];
            $i = 0;

            while($i < $tinggi){
                if ($i > 0){
                    $space = 0;
                    while ($space < $i){
                        echo "&nbsp&nbsp;&nbsp;&nbsp;&nbsp;";
                        $space++;
                    }
                } 
                $j = 1;
                while ($j <= $tinggi - $i){
                    echo "<img src='$gambar' height='20' width='20'>";
                    $j++;
                }
                echo "<br>";
                $i++;
            }
        }
        ?>
    </body>
</html>