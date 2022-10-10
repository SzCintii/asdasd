<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="loginformstyle.css"/>
    <title>Bejelentkezés</title>
</head>
<body>
    <form action="login.php" method="post">
        Felhasználónév:
        <input type="text" name="felhasznalonev">
        <br>
        Jelszó:
        <input type="password" name="jelszo">
        <br><br>
        <input type="submit" value="Bejelentkezés" name="login">
    </form>
    <button><a href ="regform.php">Regisztráció</a></button>
</body>
</html>