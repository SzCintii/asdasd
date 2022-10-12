<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="registerstyle.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regisztráció</title>
</head>
<body>
<?php
    require 'mydbms.php';
    if(isset($_POST["felhasznalonev"]) 
        && isset($_POST["jelszo"]) && isset($_POST["email"]) )
    {
        $utvonal = __DIR__."\\felhasznalok.txt";
        if(!file_exists($utvonal))
        {
            $f = fopen($utvonal, "w");
            fclose($f);
        }
        $f = fopen($utvonal, "r");
        $foglalt = FALSE;
        while($i = fgets($f))
        {
            $adatok = explode(";", $i);
            if($_POST["felhasznalonev"] == $adatok[0] )
            {
                $foglalt = TRUE;
                break;
            }
        }
        fclose($f);
        if($foglalt)
        {
            echo "Sajnos ez a felhasználónév már foglalt... Kérlek, válassz egy másikat";
            echo "<a href='regform.php'>Vissza a regisztrációhoz</a>";
        }
        else{

           

            
            $felhasznalonev = $_POST["Felhasználónév"];
            $jelszo = md5($_POST["Jelszó"]);
            $email = $_POST["Email"];
            
        
            

            
            $f = fopen($utvonal, "a");
            $sor = $felhasznalonev.";".
                   $jelszo.";".$email.";".$_POST["Felhasználónév"];

            $con = connect();
            $query = 'insert into user(Felhasználónév, Jelszó, Email, Admin)
             VALUES("'.$_POST['Felhasználónév'].'","'.md5($_POST['Jelszó']).'","'.$_POST['Email'].'", 0)';
            $results = mysqli_query($con, $query);
            
            if(!$results)
            {
                echo "A hiba: ".mysqli_errno($con);
            }

            fwrite($f, $sor);
            fclose($f);
            echo "Sikeres regisztráció! Kattintson".
                " <a href='loginform.php'>ide</a> a bejelentkezéshez";
        }
    }
    else{ 
        echo "Kérem, adja meg az összes előzőleg felsorolt adatokat!<br>";
        echo "<a href='regform.php'>Vissza a regisztrációhoz</a>";
    }
?>
</body>
</html>