<?php
$db = mysqli_connect("localhost", "root", "090807", "phpdasar");

function query($query)
{
    global $db;
    $result = mysqli_query($db, $query);
    $box = [];
    while ($data = mysqli_fetch_assoc($result)) {
        $box[] = $data;
    }
    return $box;
}

function tambah($tambah)
{
    global $db;
    // ambil data dari tiap variabel dalam form
    $nama = htmlspecialchars($tambah["nama"]);
    $npm = htmlspecialchars($tambah["npm"]);
    $email = htmlspecialchars($tambah["email"]);
    $jurusan = htmlspecialchars($tambah["jurusan"]);
    // htmlspecialchars() berfungsi sebagai melihat script html jika ditambahkan pada form yg telah dibuat.

    // query insert data
    $insert = "INSERT INTO mahasiswa (nama, npm, email, jurusan) 
                VALUES ('$nama', '$npm', '$email', '$jurusan')";
    mysqli_query($db, $insert);

    return mysqli_affected_rows($db);
}

function hapus($hapus)
{
    global $db;
    mysqli_query($db, "DELETE FROM mahasiswa WHERE id = $hapus");
    return mysqli_affected_rows($db);
}
