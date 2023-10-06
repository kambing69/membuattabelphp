<!DOCTYPE html>
<html>
<head>
    <title>Biodata Mahasiswa</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
        }

        table {
            width: 50%;
            margin: 0 auto;
            font-size: 130%;
        }

        th, td {
            padding: 3px;
            text-align: left;
        }

        th[colspan="2"] {
            text-align: center;
            font-weight: 500;
        }

        p{
            margin: 0 auto;
            width: 50%;
            font-size: 130%;
        }

        td{
            background: white;
        }
    </style>
</head>
<body>
    <table border="1" cellspacing="0" cellpadding="0">
        <thead>
            <tr>
                <th bgcolor= "green" colspan="2"><b>Biodata Mahasiswa</b></th>
            </tr>
        </thead>
        <tbody>
            <?php
            $data = array(
                array("NIM", 17220642),
                array("Nama", "Andriansyah Siregar"),
                array("Program Studi", "Teknologi Informasi"),
                array("Kelas", "17.3A.25"),
                array("Kampus", "UBSI Cengkareng"),
            );

            foreach ($data as $row) {
                echo "<tr>";
                echo "<td>" . $row[0] . "</td>";
                echo "<td>" . $row[1] . "</td>";
                echo "</tr>";
            }
            ?>  
        </tbody>
    </table>
    <p>Halaman Berikut <a href="nilai.php">Nilai Mahasiswa</a></p>
</body>
</html>