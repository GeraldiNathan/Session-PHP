<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pendataan Mahasiswa</title>
    <link rel="stylesheet" href="style.css" type="text/css" />

</head>

<body>
    <h1>Pendataan</h1>
    <form action="main.php" method="post">
        <input type="text" placeholder="nama" name="username" />
        <br />
        <input type="email" placeholder="email" name="email" />
        <br />
        <input type="text" placeholder="whatsapp" name="whatsapp" />
        <br />
        <input type="text" placeholder="alamat" name="alamat" />
        <br />
        <button type="submit">Submit</button>
    </form>
</body>

</html>

<?php
session_start();

if (count($_POST) > 0) {
    $_SESSION["nama_user"] = $_POST["username"];
    $_SESSION["email"] = $_POST["email"];
    $_SESSION["alamat"] = $_POST["alamat"];
    $_SESSION["whatsapp"] = $_POST["whatsapp"];
}

if (
    !empty($_SESSION["nama_user"]) && !empty($_SESSION["email"])
    && !empty($_SESSION["alamat"]) && !empty($_SESSION["whatsapp"])
) {
    echo "<br> Informasi data ";
    echo "<table border='1'>";
    echo "<tr >
    <td>nama</td>
    <td>email</td>
    <td>alamat</td>
    <td>No HP</td>
    </tr>
    ";
    echo "<tr>
    <td>" . $_SESSION["nama_user"] . "</td>
    <td>" . $_SESSION["email"] . "</td>
    <td>" . $_SESSION["alamat"] . "</td>
    <td>"  . $_SESSION["whatsapp"] . "</td>
    </tr>
    ";
    echo "<table />";
} else {
    echo "Semua data harus diisi!";
}
