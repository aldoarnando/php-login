<?php
    if (isset($_POST['submit'])) {
    
        session_start();

        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $komentar = $_POST['komentar'];

        $error = false;

        if ($nama == "") {
            $_SESSION['namaPesan'] = "Kolom Nama harus diisi";

            $error = true;
        }

        if ($email == "") {
            $_SESSION['emailPesan'] = "Kolom Email harus diisi";

            $error = true;
        }

        if ($komentar == "") {
            $_SESSION['komentarPesan'] = "Kolom Komentar harus diisi";

            $error = true;
        }

        if ($error == true) {
            header('Location: formbukutamu.php');
        } 
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <center>
        <h1>Data Berhasil Diinputkan</h1>
        <a href="logout.php">Logout</a>
    </center>
</body>
</html>