<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Get Post</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <?php
    $mahasiswa = [
        ["nama" => "Febratama", "npm" => "06947", "jurusan" => "Teknik Informatika"],
        ["nama" => "Ghandy", "npm" => "06950", "jurusan" => "Teknik Elektro"],
    ]
    ?>
    <ul>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <li>
                <a href="belajarget2.php?nama=<?php echo $mhs["nama"]; ?>&npm=<?php echo $mhs["npm"]; ?>&jurusan=<?php echo $mhs["jurusan"]; ?>">
                    <?php echo $mhs["nama"]; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>