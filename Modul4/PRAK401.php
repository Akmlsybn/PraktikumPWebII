<html>
    <head>
        <title>PRAK401</title>
        <style>
            table {
                border-collapse: collapse;
            }
            td {
                border: 1px solid;
                padding: 5px;
            }
        </style>
    </head>
    <body>
        <form method="post">
            <label for="panjang">Panjang :</label>
            <input type="number" name="panjang"><br>
            <label for="lebar">Lebar :</label>
            <input type="number" name="lebar"><br>
            <label for="nilai">Nilai :</label>
            <input type="text" name="nilai"><br>
            <button type="submit" name="submit">Submit</button>
        </form>

        
<?php 
    $panjang = $nilai = $lebar = " ";

    if (isset($_POST['submit'])) {
        $panjang = $_POST['panjang'];
        $lebar = $_POST['lebar'];
        $nilai = $_POST['nilai'];

        $nilaiArray = explode(" ", $nilai);

        if ($panjang * $lebar != count($nilaiArray)){
            echo "Panjang Nilai Tidak Sesuai Dengan Ukuran Matriks";
        } else { ?>
            <table>
                <?php 
                for ($i = 0; $i < $panjang; $i++) { 
                ?>
                    <tr>
                    <?php for ($j = 0; $j < $lebar; $j++) { ?>
                        <td>
                            <?php 
                            if (empty($nilaiArray[($i * $panjang) + $j])){
                                echo 0;
                            } else {
                                echo $nilaiArray[($i * $panjang) + $j];
                            }
                            ?>
                        </td>
                    <?php } ?>
                </tr>
            <?php 
            }
        ?>
        </table>
        <?php 
        }
    }
?>
</body>
</html>