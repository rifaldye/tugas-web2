<?php
    $db_host = 'localhost'; //server
    $db_user = 'root'; //username
    $db_pass = ''; //password
    $db_name = 'test'; //nama database

    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name); //sintaks untuk connect ke database mysql

    if (!$conn) {
        die ('Gagal terhubung dengan database MySQL : ' . mysqli_connect_error());
    }

    $sql = 'SELECT nim,nama,tugas,uts,uas, (tugas + uts + uas) /3 AS nilai FROM pertemuan5';

    $query = mysqli_query($conn, $sql);

    if (!$query) {
        die('Error : ' . mysqli_error($conn));
    }

    echo '
    <html>
        <head>
            <title>Tampilan Data Tabel Sales MySQL dengan mysqli_fetch_array</title>
            <style>
                body {font-family: Tahoma, arial}
                table {border-collapse: collapse}
                th, td {font-size: 13px; border: 1px solid #DEDEDE; padding: 3px 5px; color: #303030;}
                th {background: #CCCCCC; font-size: 12px; border-color: #B0B0B0;}
                .subtotal td {background : #F8F8F8}
                .right {text-align: right;}
            </style>
        </head>
        <body>
            <table>
                <thead>
                    <tr>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Tugas</th>
                        <th>UTS</th>
                        <th>UAS</th>
                        <th>Nilai</th>
                    </tr>
                </thead>
                <tbody>';
                    while ($row = mysqli_fetch_array($query)) { //fetch_array
                        echo '<tr>
                            <td>'.$row['nim'].'</td>
                            <td>'.$row['nama'].'</td>
                            <td>'.$row['tugas'].'</td>
                            <td>'.$row['uts'].'</td>
                            <td>'.$row['uas'].'</td>
                            <td>'.number_format($row['nilai'], 0).'</td>
                        </tr>';
                    }
                echo '
                </tbody>
            </table>
        </body>
    </html>';

    // free result
    mysqli_free_result($query);

    mysqli_close($conn);
?>
