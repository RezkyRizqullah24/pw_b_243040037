<?php
// Array Associative
// Array yang indexnya berupa string yang ber-asosiasi dengan tiap elemen
$mahasiswa = [
  [
    'nama' => 'Rezky',
    'nim' => '243040037',
    'email' => 'rr2422@gmail.com',
    'jurusan' => 'Teknik Informatika'
  ],
  [
    'nama' => 'Anang',
    'nim' => '243040038',
    'jurusan' => 'Teknik Informatika',
    'email' => 'anang@gmail.com',
  ]
];
var_dump($mahasiswa);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Array Associative</title>
</head>
<body>
  <h2>Daftar Mahasiswa</h2>
    <ul>
    <?php foreach ($mahasiswa as $m) : ?>
      <li>
        <a href="latihan4.php?nama=<?= $m['nama']; ?>&nim=<?= $m['nim']; ?>&email=<?= $m['email']; ?>&jurusan=<?= $m['jurusan']; ?>">
          <?= $m['nama']; ?>
        </a>
      </li>
    <?php endforeach; ?>
  </ul>
</body>
</html>