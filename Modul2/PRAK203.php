<html>
    <head>
        <title>PRAK203</title>
    </head>
    <body>
        <form action="" method="post">
            Nilai: <input type="text" name="nilai"><br>

            Dari: <br>
            <input type="radio" name="drSuhu" value="celcius" ><label for="dari">Celcius</label><br>
            <input type="radio" name="drSuhu" value="fahrenheit"> <label for="dari">Fahrenheit</label><br>
            <input type="radio" name="drSuhu" value="reamur"> <label for="dari">Reamur</label><br>
            <input type="radio" name="drSuhu" value="kelvin"> <label for="dari">Kelvin</label><br>
            
            Ke : <br>
            <input type="radio" name="keSuhu" value="celcius"><label for="">Celcius</label><br>
            <input type="radio" name="keSuhu" value="fahrenheit"><label for="">Fahrenheit</label><br>
            <input type="radio" name="keSuhu" value="reamur"><label for="">Reamur</label><br>
            <input type="radio" name="keSuhu" value="kelvin"><label for="">Kelvin</label><br>
            
            <button type="submit" name="konversi">Konversi</button>
        </form>
    </body>
</html>

<?php 
        if (isset($_POST['konversi'])) {
            if (isset($_POST['nilai']) && isset ($_POST['drSuhu']) && isset ($_POST['keSuhu']))  {
                $nilai = $_POST['nilai'];
                $drSuhu = $_POST['drSuhu'];
                $keSuhu = $_POST['keSuhu'];
                
                if ($drSuhu == "celcius") {
                    if ($keSuhu == "fahrenheit") {
                        $hasil = ($nilai * 9/5) + 32;
                        echo "<h1>Hasil Konversi: $hasil &degF</h1>";
                    } elseif ($keSuhu == "reamur") {
                        $hasil = $nilai * 4/5;
                        echo "<h1>Hasil Konversi: $hasil &degR</h1>";
                    } elseif ($keSuhu == "kelvin") {
                        $hasil = $nilai + 273.15;
                        echo "<h1>Hasil Konversi: $hasil &degK</h1>";
                    } else {
                        $hasil = $nilai;
                    }
                } elseif ($drSuhu == "fahrenheit") {
                    if ($keSuhu == "celcius") {
                        $hasil = ($nilai - 32) * 5/9;
                        echo "<h1>Hasil Konversi: $hasil &degC</h1>";
                    } elseif ($keSuhu == "reamur") {
                        $hasil = ($nilai - 32) * 4/9;
                        echo "<h1>Hasil Konversi: $hasil &degR</h1>";
                    } elseif ($keSuhu == "kelvin") {
                        $hasil = ($nilai - 32) * 5/9 + 273.15;
                        echo "<h1>Hasil Konversi: $hasil &degK</h1>";
                    } else {
                        $hasil = $nilai;
                    }
                } elseif ($drSuhu == "reamur") {
                    if ($keSuhu == "celcius") {
                        $hasil = $nilai * 5/4;
                        echo "<h1>Hasil Konversi: $hasil &degC</h1>";
                    } elseif ($keSuhu == "fahrenheit") {
                        $hasil = ($nilai * 9/4) + 32;
                        echo "<h1>Hasil Konversi: $hasil &degF</h1>";
                    } elseif ($keSuhu == "kelvin") {
                        $hasil = ($nilai * 5/4) + 273.15;
                        echo "<h1>Hasil Konversi: $hasil &degK</h1>";
                    } else {
                        $hasil = $nilai;
                    }
                } elseif ($drSuhu == "kelvin") {
                    if ($keSuhu == "celcius") {
                        $hasil = $nilai - 273.15;
                        echo "<h1>Hasil Konversi: $hasil &degC</h1>";
                    } elseif ($keSuhu == "fahrenheit") {
                        $hasil = ($nilai - 273.15) * 9/5 + 32;
                        echo "<h1>Hasil Konversi: $hasil &degF</h1>";
                    } elseif ($keSuhu == "reamur") {
                        $hasil = ($nilai - 273.15) * 4/5;
                        echo "<h1>Hasil Konversi: $hasil &degR</h1>";
                    } else {
                        $hasil = $nilai;
                    }
                }
            }
        }
?>