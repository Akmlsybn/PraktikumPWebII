<html>
    <head>
        <style>
            table, td, tr, th {
                border: 1px solid black;
            }
        </style>
        <title>
            PRAK105
        </title>
    </head>
    <body>
        <table>
            <tr style="background-color: red; height: 70px; font-size: 24px;">
                <th>Daftar Smartphone Samsung</th>
            </tr>
        <?php $daftarSmartphone = array ("sung1" => "Samsung Galaxy S22", "sung2" => "Samsung Galaxy S22+", "sung3" => "Samsung Galaxy A03", "sung4" => "Samsung Galaxy XCover 5");?>
        <tr>
        <td> <?php echo $daftarSmartphone["sung1"] ?></td>
        </tr>
        <tr>
        <td> <?php echo $daftarSmartphone["sung2"] ?></td>
        </tr>
        <tr>
        <td> <?php echo $daftarSmartphone["sung3"] ?></td>
        </tr>
        <tr>
        <td> <?php echo $daftarSmartphone["sung4"] ?></td>
        </tr>
        </table>
    </body>
</html>