<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="loginstyle.css"/>
    <title>Bejelentkezés</title>
</head>
<body>
    
    <?php
        require "mydbms.php";

        $con = connect('user', 'root', '');
        $felhasznalonev = $_POST['felhasznalonev'];
        $jelszo = md5($_POST['jelszo']);

        $query = "SELECT * FROM users
        WHERE felhasznalonev='$felhasznalonev' AND jelszo='$jelszo'";
        $results=mysqli_query($con, $query) or die ("Nem sikerült ".$query);
        $loggedInUser=mysqli_fetch_row($results);
        if($loggedInUser == NULL)
        {
            echo "Helytelen felhasználónév és jelszó páros, kérem próbálja újra!<br>";
            echo "Vissza a bejelentkezéshez <a href='loginform.php'>Itt</a>";
        }
        else {
            
            session_start();
            
            $_SESSION['id']=$loggedInUser[0];
            $_SESSION['felhasznalonev']=$loggedInUser[1];
            $_SESSION['jog']=$loggedInUser[3];
            header("Location: index.php");
        }
            
    ?>
    
</body>
</html>