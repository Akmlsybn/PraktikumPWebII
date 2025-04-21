<html>
    <head>
        <title>PRAK305</title>
    </head>
    <body>
        <form action="" method="post">
            <input type="text" name="inputString">
            <button type="submit" name="submit">Submit</button>
        </form>

        <?php 
        if (isset($_POST['submit'])){
            $inputString = $_POST['inputString'];
            $jumlah = strlen($inputString);
            $output = "";

            for ($i = 0; $i < $jumlah; $i++){
                $char = $inputString[$i];
                $output .= strtoupper($char);
                for ($j = 1; $j < $jumlah; $j++){
                    $output .= strtolower($char);
                }
            }
            echo "<p><strong>Input:</strong><br>$inputString</p>";
            echo "<p><strong>Output:</strong><br>$output</p>";
        }
        ?>
    </body>
</html>