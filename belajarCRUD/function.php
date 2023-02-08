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

// fungsi tambah data
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

// fungsi hapus data
function hapus($hapus)
{
    global $db;
    mysqli_query($db, "DELETE FROM mahasiswa WHERE id = $hapus");
    return mysqli_affected_rows($db);
}

// fungsi ubah data
function ubah($ubah)
{
    global $db;
    $id = $ubah["id"];
    $nama = htmlspecialchars($ubah["nama"]);
    $npm = htmlspecialchars($ubah["npm"]);
    $email = htmlspecialchars($ubah["email"]);
    $jurusan = htmlspecialchars($ubah["jurusan"]);
    // htmlspecialchars() berfungsi sebagai melihat script html jika ditambahkan pada form yg telah dibuat.

    // query update data
    $update = "UPDATE mahasiswa SET nama = '$nama', npm = '$npm', email = '$email', 
    jurusan = '$jurusan' WHERE id = $id";
    mysqli_query($db, $update);

    return mysqli_affected_rows($db);
}

// fungsi cari data
function cari($cari)
{
    $query = "SELECT * FROM mahasiswa WHERE nama LIKE '%$cari%' OR npm LIKE '%$cari%'";
    return query($query);
}
