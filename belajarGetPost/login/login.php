<?php
if (isset($_POST["submit"])) {
    if ($_POST["username"] == "admin" && $_POST["password"] == "123") {
        header("Location: admin.php");
        exit;
    } else {
        $error = true;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
</head>

<body>
    <h1>Silahkan Login</h1>
    <?php if (isset($error)) : ?>
        <p style="color: red; font-style: italic;">Username/Passwor Salah!!!</p>
    <?php endif; ?>
    <ul>
        <form action="" method="post">
            <li>
                <label for="username">Username : </label>
                <input type="text" name="username" id="username">
            </li>
            <br>
            <li>
                <label for="password">Password : </label>
                <input type="password" name="password" id="password">
            </li>
            <br>
            <button type="submit" name="submit">Kirim!</button>

        </form>
    </ul>
</body>

</html>