<html>
<head>
    <title>PRAK403</title>
    <style>
        table, th, td, tr {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
        }
        table {
            width: 700px;
        }
        table tr th {
            background-color: lightgray;
            text-align: left;
        }
    </style>
</head>
<body>

<?php  
$nilai = [
    [
        'nomor' => 1,
        'nama' => 'Annisa',
        'matakuliah' => [
            ['matakuliah' => 'Pemrograman I', 'sks' => 2],
            ['matakuliah' => 'Praktikum Pemrograman', 'sks' => 1],
            ['matakuliah' => 'Pengantar Lahan Basah', 'sks' => 2],
            ['matakuliah' => 'Arsitektur Komputer', 'sks' => 3]
        ]
    ],
    [
        'nomor' => 2,
        'nama' => 'Ratna',
        'matakuliah' => [
            ['matakuliah' => 'Basis Data I', 'sks' => 2],
            ['matakuliah' => 'Praktikum Basis Data', 'sks' => 1],
            ['matakuliah' => 'Kalkulus', 'sks' => 3]
        ]
    ],
    [
        'nomor' => 3,
        'nama' => 'Budi',
        'matakuliah' => [
            ['matakuliah' => 'Rekayasa Perangkat Lunak', 'sks' => 3],
            ['matakuliah' => 'Analisis dan Perancangan Sistem', 'sks' => 3],
            ['matakuliah' => 'Komputasi Awan', 'sks' => 3],
            ['matakuliah' => 'Kecerdasan Bisnis', 'sks' => 3]
        ]
    ]
];

for ($i=0; $i < count($nilai); $i++) { 
    $TotalSKS = 0;
    for ($j = 0; $j < count($nilai[$i]['matakuliah']); $j++) { 
        $TotalSKS += $nilai[$i]['matakuliah'][$j]['sks'];
    }
    $nilai[$i]['TotalSKS'] = $TotalSKS;
    if ($nilai[$i]['TotalSKS'] < 7) {
        $nilai[$i]['status'] = 'Revisi KRS';
    } else {
        $nilai[$i]['status'] = 'Tidak Revisi';
    }
}
?>
    <table>
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Mata Kuliah diambil</th>
        <th>SKS</th>
        <th>Total SKS</th>
        <th>Keterangan</th>
    </tr>
    <?php 
    for ($i=0; $i < count($nilai); $i++) { 
        for ($j = 0; $j < count($nilai[$i]['matakuliah']); $j++) {
            echo "<tr>";
            if ($j == 0){
                echo "<td>".$nilai[$i]['nomor']."</td>";
                echo "<td>".$nilai[$i]['nama']."</td>";
                echo "<td>".$nilai[$i]['matakuliah'][$j]['matakuliah']."</td>";
                echo "<td>".$nilai[$i]['matakuliah'][$j]['sks']."</td>";
                echo "<td>".$nilai[$i]['TotalSKS']."</td>";
                if ($nilai[$i]['status'] == 'Revisi KRS'){
                    echo "<td style='background-color: red;'>".$nilai[$i]['status']."</td>";
                } else {
                    echo "<td style='background-color: green;'>".$nilai[$i]['status']."</td>";
                }
            } else {
                echo "<td></td>";
                echo "<td></td>";
                echo "<td>".$nilai[$i]['matakuliah'][$j]['matakuliah']."</td>";
                echo "<td>".$nilai[$i]['matakuliah'][$j]['sks']."</td>";
                echo "<td></td>";
                echo "<td></td>";
            }
            echo "</tr>";
        }
    }
    ?>
    </table>
</body>
</html>
