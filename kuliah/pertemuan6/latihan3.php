<?php
$mahasiswa = ["Rezky", "243040037", "rr2422@gmail.com", "Teknik Informatika"];
$mahasiswa = [["Rezky", "243040037", "rr2422@gmail.com", "Teknik Informatika"], ["Anang", "243040048", "anang@gmail.com", "Teknik Informatika"]];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Bersyarat</title>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>Nama: <?= $mhs[0]; ?></li>
            <li>NIM: <?= $mhs[1]; ?></li>
            <li>Email: <?= $mhs[2]; ?></li>
            <li>Jurusan: <?= $mhs[3]; ?></li>
        </ul>
        <?php endforeach; ?>
</body>
</html>