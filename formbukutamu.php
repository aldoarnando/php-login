<?php
    if (isset($_SESSION['namaPesan'])){
        $namaPesan = $_SESSION['namaPesan'];
    }
    if (isset($_SESSION['emailPesan'])){
        $emailPesan = $_SESSION['emailPesan'];
    }
    if (isset($_SESSION['komentarPesan'])){
        $komentarPesan = $_SESSION['komentarPesan'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <center>
    <h1>Buku Tamu</h1>
    <form action="bukutamu.php" method="post">
        <table>
            <tr>
                <td>Nama  : </td>
                <td>
                    <input type="text" name="nama" id="id">
                    <span style="color:red;">* <?= $namaPesan ?></span>
                </td>
            </tr>
            <tr>
                <td>Email : </td>
                <td>
                    <input type="text" name="email" id="email">
                    <span style="color:red;">* <?= $emailPesan ?></span>
                </td>
            </tr>
            <tr>
                <td>Komentar : </td>
                <td>
                    <input type="text" name="komentar" id="komentar">
                    <span style="color:red;">* <?= $komentarPesan ?></span>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" id="submit" value="Kirim"></td>
            </tr>
        </table>
    </form>
    </center>
</body>
</html>