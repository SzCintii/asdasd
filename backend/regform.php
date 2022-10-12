<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="regformstyle.css"/>
    <title>Regisztráció</title>
   
</head>
<body>
    <div class="d-flex flex-column justify-content-center w-100 h-100"></div>
    <form action="register.php" method="POST">
        Felhasználónév: <input type="text" name="felhasznalonev" placeholder="Minta Márton"/><br>
        Jelszó: <input type="password" name="jelszo" placeholder="1234"/><br>
        E-mail: <input type="email" name="email" placeholder="mintamarton@email.com" required/><br>
        <input type="submit" name="submit" value="Regisztrálok">
        <input type="reset" value="Adatok törlése">
    </form>
</body>
</html>