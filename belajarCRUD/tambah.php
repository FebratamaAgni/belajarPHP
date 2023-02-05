<?php
// koneksi ke database
$db = mysqli_connect("localhost", "root", "090807", "phpdasar");

if (isset($_POST["submit"])) {
    // ambil data dari tiap variabel dalam form
    $nama = $_POST["nama"];
    $npm = $_POST["npm"];
    $email = $_POST["email"];
    $jurusan = $_POST["jurusan"];

    // query insert data
    $insert = "INSERT INTO mahasiswa (nama, npm, email, jurusan) VALUES ('$nama', '$npm', '$email', '$jurusan')";
    mysqli_query($db, $insert);
};
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah data Mahasiswa</title>
</head>

<body>
    <h1>Tambah Data Mahasiswa</h1>
    <form action="" method="post">
        <ul>
            <li>
                <label for="nama">Masukkan Nama Mahasiswa: </label>
                <input type="text" name="nama" id="nama">
            </li>
            <li>
                <label for="npm">Masukkan NPM Mahasiswa: </label>
                <input type="text" name="npm" id="npm">
            </li>
            <li>
                <label for="email">Masukkan Email Mahasiswa: </label>
                <input type="text" name="email" id="email">
            </li>
            <li>
                <label for="jurusan">Masukkan Jurusan Mahasiswa: </label>
                <input type="text" name="jurusan" id="jurusan">
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data!</button>
            </li>
        </ul>
    </form>
</body>

</html>