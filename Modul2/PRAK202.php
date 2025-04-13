<html>
    <head>
        <style>.error {color: red;}</style>
        <title>PRAK202</title>
    </head>
    <body>
        <?php 
        $nameError = $nimError = $genderError = "";

        if (isset($_POST["submit"])){
            if(empty($_POST["nama"])) {$nameError = "Nama Jangan Kosong";}
            if(empty($_POST["nim"])) {$nimError = "NIM Jangan Kosong";}
            if(empty($_POST["gender"])) {$genderError = "Gender di Pilih";}
        }
        ?>

        <form action="" method="post">
        Nama: <input type="text" name="nama" value="<?=isset($_POST['nama']) ? $_POST['nama'] : ''?>"><span class="error">* <?php echo $nameError;?></span><br>
        Nim: <input type="text" name="nim" value="<?=isset($_POST['nim']) ? $_POST['nim'] : ''?>"><span class="error">* <?php echo $nimError;?></span><br>
        Jenis Kelamin : <span class="error">* <?php echo $genderError;?></span><br>
        <input type="radio" name="gender" value="Laki-laki" <?php if (isset($_POST["gender"]) and $_POST["gender"] == "Laki-laki") echo "checked";?>>Laki-laki<br>
        <input type="radio" name="gender" value="Perempuan" <?php if (isset($_POST["gender"]) and $_POST["gender"] == "Perempuan") echo "checked";?>>Perempuan<br>
        <button type="submit" name="submit">Submit</button>
        </form>

        <?php 
        if (isset($_POST["submit"])) {
            if (!empty($_POST["nama"]) and !empty($_POST["nim"]) and !empty($_POST["gender"])){
                echo "<h2>Output: </h2>";
                if(!empty($_POST["nama"]))
                { echo $_POST["nama"]."<br>"; }
                if(!empty($_POST["nim"]))
                { echo $_POST["nim"]."<br>"; }
                if(!empty($_POST["gender"])) 
                { echo $_POST["gender"]; }
            }
        }
?>
    </body>
</html>