<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Data Dosen</title>
        <style>
            table {
                border-collapse: collapse;
                width: 50%;
                margin: 20px auto;
                font-family: Arial, sans-serif;
            }
            th, td {
                border: 1px solid #333;
                padding: 8px 12px;
                text-align: left;
            }
            th {
                background-color: #4CAF50;
                color: white;
            }
            tr:nth-child(even) {
                background-color: #f2f2f2;
            }
        </style>
    </head>
    <body>
        <?php
            $Dosen = [
                'Nama' => 'Elok Nur Hamdana',
                'Domisili' => 'Malang',
                'Jenis Kelamin' => 'Perempuan'
            ];
        ?>

        <h2 style="text-align:center;">Data Dosen</h2>
        <table>
            <tr>
                <th>Attribute</th>
                <th>Value</th>
            </tr>
            <?php
                foreach ($Dosen as $key => $value) {
                    echo "<tr>
                            <td>{$key}</td>
                            <td>{$value}</td>
                          </tr>";
                }
            ?>
        </table>
    </body>
</html>