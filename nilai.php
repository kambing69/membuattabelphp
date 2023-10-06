<!DOCTYPE html>
<html>
<head>
    <title>Data Nilai Mahasiswa</title>
</head>
<body style="background-color: #f2f2f2;">
    <?php
    
    $matkul = ["Web Programming", "Struktur Data", "Sistem Basis Data"];
    $nilaiUTS = [90, 76, 89];
    $nilaiUAS = [80, 89, 98];
    $nilaiTugas = [89, 98, 76];
    $nilaiAbsen = [100, 100, 80];
    ?>
    <center>
    <table border="1" cellpadding="5">
        <tr>
            <th bgcolor = "green" colspan="5">Nilai Mahasiswa</th>
        </tr>
        <tr>
            <th>Mata kuliah</th>
            <th>Nilai UTS</th>
            <th>Nilai UAS</th>
            <th>Nilai Tugas</th>
            <th>Nilai Absen</th>
        </tr>
        <?php for ($i = 0; $i < count($matkul); $i++) { ?>
            <tr>
                <td><?php echo $matkul[$i]; ?></td>
                <td><?php echo $nilaiUTS[$i]; ?></td>
                <td><?php echo $nilaiUAS[$i]; ?></td>
                <td><?php echo $nilaiTugas[$i]; ?></td>
                <td><?php echo $nilaiAbsen[$i]; ?></td>
            </tr>
        <?php } ?>
    </table>
    
    <br>
    <a href="tugas2.php">Klik Halaman Utama untuk kembali</a>
</body>
</center>
</html>