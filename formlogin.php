<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <center>
    <h1>Login Page</h1>
    <form action="login.php" method="post">
        <table>
            <tr>
            <td>Username</td><td><input type="username" name="username"></td>
            </tr>
            <tr>
            <td>Password</td><td><input type="password" name="password"></td>
            </tr>
            <tr>
            <td></td><td><input type="reset" value="Cancel"><input type="submit" value="Login"></td>
            </tr>
        </table>
    </form>
    </center>
</body>
</html>