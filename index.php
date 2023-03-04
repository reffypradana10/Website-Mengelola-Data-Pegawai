<?php

require 'function.php';

$query = query("SELECT * FROM mahasiswa");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Daftar Mahasiswa</h1>


<table cellpadding="10" cellspacing="0" border="1" >
    <tr>
        <td>No</td>
        <td>Gambar</td>
        <td>Aksi</td>
        <td>Nama</td>
        <td>Nrp</td>
        <td>Email</td>
        <td>Jurusan</td>
    </tr>

<?php $i = 1?>
<?php foreach($query as $data): ?>
    <tr>
        <td><?= $i ?></td>
        <td><img src="img/<?= $data['gambar'] ?>" width="50"></td>
        <td><a href="ubah.php">Ubah</a> | <a href="hapus.php">Hapus</a></td>
        <td><?= $data['nama'] ?></td>
        <td><?= $data['nrp'] ?></td>
        <td><?= $data['email'] ?></td>
        <td><?= $data['jurusan'] ?></td>
    </tr>
<?php $i++ ?>
<?php endforeach;?>

</table>

</body>
</html>