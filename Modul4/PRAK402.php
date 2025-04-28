<?php

$nilai = [
    ["nama" => "Andi", "NIM" => "2101001", "Nilai_UTS" => "87", "Nilai_UAS" => "65"],
    ["nama" => "Budi", "NIM" => "2101002", "Nilai_UTS" => "76", "Nilai_UAS" => "79"],
    ["nama" => "Tono", "NIM" => "2101003", "Nilai_UTS" => "50", "Nilai_UAS" => "41"],
    ["nama" => "Jessica", "NIM" => "2101004", "Nilai_UTS" => "60", "Nilai_UAS" => "75"]
];

    for ($i=0; $i < count($nilai); $i++) { 
    $nilai[$i]["akhir"] = $nilai[$i]["Nilai_UTS"] * 0.4 + $nilai[$i]["Nilai_UAS"] * 0.6;
    if ($nilai[$i]["akhir"] >= 80) {
        $nilai[$i]["grade"] = "A";
    } elseif ($nilai[$i]["akhir"] >= 70) {
        $nilai[$i]["grade"] = "B";
    } elseif ($nilai[$i]["akhir"] >= 60) {
        $nilai[$i]["grade"] = "C";
    } elseif ($nilai[$i]["akhir"] >= 50) {
        $nilai[$i]["grade"] = "D";
    } else {
        $nilai[$i]["grade"] = "E";
    }
}

?>

<html>
    <head>
        <title>PRAK402</title>
        <style>
            table, tr, td, th {
                border: solid 1px black;
                border-collapse: collapse;
                padding: 5px;
            }

            table {
                margin-right: auto;
            }

            th {
                background-color: lightgray;
                text-align: left;
            }
        </style>
    </head>
    <body>
        <table>
            <tr>
                <th>Nama</th>
                <th>NIM</th>
                <th>Nilai UTS</th>
                <th>Nilai UAS</th>
                <th>Nilai Akhir</th>
                <th>Huruf</th>
            </tr>
            <?php
        for ($i=0; $i < count($nilai); $i++) { 
            echo "<tr>";
            echo "<td>".$nilai[$i]["nama"]."</td>";
            echo "<td>".$nilai[$i]["NIM"]."</td>";
            echo "<td>".$nilai[$i]["Nilai_UTS"]."</td>";
            echo "<td>".$nilai[$i]["Nilai_UAS"]."</td>";
            echo "<td>".$nilai[$i]["akhir"]."</td>";
            echo "<td>".$nilai[$i]["grade"]."</td>";
            echo "</tr>";
        }       
        ?>
        </table>
    </body>
</html>