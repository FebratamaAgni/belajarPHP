<?php
// Koneksi ke database mysql
require "function.php";

$mahasiswa = query("SELECT * FROM mahasiswa");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Databases</title>
</head>

<body>
    <h1>Belajar database</h1>
    <a href="tambah.php">Tambah data Mahasiswa</a>
    <br> <br>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>NPM</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <tr>
                <td><?php echo $mhs["id"]; ?></td>
                <td>
                    <a href="">Ubah</a> |
                    <a href="">Hapus</a>
                </td>
                <td><?php echo $mhs["npm"]; ?></td>
                <td><?php echo $mhs["nama"]; ?></td>
                <td><?php echo $mhs["email"]; ?></td>
                <td><?php echo $mhs["jurusan"]; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>