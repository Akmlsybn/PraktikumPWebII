<html>
    <head>
        <style>
            table, tr, td, th {
                border: 1px solid black;
            }
        </style>
        <title>
            PRAK104
        </title>
    </head>
    <body>
        <table>
            <tr>
                <th>Daftar Smartphone Samsung</th>
            </tr>
        <?php $daftarSmartphone = array ("Samsung Galaxy S22", "Samsung Galaxy S22+", "Samsung Galaxy A03", "Samsung Galaxy XCover 5");?>
        <?php foreach ($daftarSmartphone as $item) : ?> 
            <tr>
                <td> <?php echo $item ?></td>
            </tr>
            <?php endforeach 
        ?>
        </table>
    </body>
</html>