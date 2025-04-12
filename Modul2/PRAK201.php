<html>
    <head>
        <Title>PRAK201</Title>
        <body>
            <form action="" method="post">
                Nama 1: <input type="text" name="nama1"><br>
                Nama 2: <input type="text" name="nama2"><br>
                Nama 3: <input type="text" name="nama3"><br>
                <button type="submit" name="urutkan">Urutkan</button>
            </form>
            <?php 
                if (isset($_POST["urutkan"])) {
                    $namaUrut = array($_POST["nama1"], $_POST["nama2"], $_POST["nama3"]);
                    sort($namaUrut);

                    foreach ($namaUrut as $urutNama){
                        echo "$urutNama <br>";
                    }
                }
            ?>
        </body>
    </head>
</html>