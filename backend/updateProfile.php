<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="updateProfilestyle.css"/>
    <title>Frissítés</title>
</head>
<body>
<?php
    session_start();
    require 'mydbms.php';
    $con = connect('user', 'root','');

    $ujFelhasznalonev = $_POST['felhasznalonev'];
    $ujJelszo = md5($_POST['jelszo']);
    $userId = $_SESSION['id'];
    $ujEmail = $_POST['email'];

    $query = "UPDATE user
     SET felhasznalonev='$ujFelhasznalonev', jelszo='$ujJelszo', email='$ujEmail'
     WHERE id='$userId'";
    $result=mysqli_query($con, $query) or die ("Nem sikerült ".$query);
    if(!$result){
        echo ("Hiba: ". mysqli_errno($con));
    }
    else
    {
        $_SESSION['felhasznalonev'] = $ujFelhasznalonev;
        echo "Sikeres frissítés!<br>";
        echo "<a href='index.php?page=10'>Vissza a profilomhoz</a>";
    }

    
?>
    
</body>
</html>