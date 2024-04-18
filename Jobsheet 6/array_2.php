<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: pink;
        }
    </style>
</head>

<body>
    <?php
    $Dosen = [
        'Nama' => 'Elok Nur Hamdana',
        'Domisili' => 'Malang',
        'Jenis_kelamin' => 'Perempuan'
    ];
    ?>

    <table>
        <tr>
            <th>Detail</th>
            <th>Informasi</th>
        </tr>
        <?php foreach ($Dosen as $detail => $info) { ?>
            <tr>
                <td><?php echo $detail; ?></td>
                <td><?php echo $info; ?></td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>
