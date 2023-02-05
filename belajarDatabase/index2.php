<?php
// Koneksi ke database mysql
$db = mysqli_connect("localhost", "root", "090807", "phpdasar");
// Ambil data dari tabel database
$result = mysqli_query($db, "SELECT * FROM mahasiswa");
// Ambil data (fetch) mahasiswa dari objek $result disarankan menggunakan mysqli_fetch_row/assoc
// while ($mhs = mysqli_fetch_assoc($result)) {
//     var_dump($mhs);
// };
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
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>NPM</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>
        <?php while ($mhs = mysqli_fetch_assoc($result)) : ?>
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
        <?php endwhile; ?>
    </table>
</body>

</html>