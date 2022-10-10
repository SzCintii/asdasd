<?php
    if(!isset($_POST['cim']) &&
     !isset($_POST['megjelenes_ev']) && 
     !isset($_POST['kategoria']) &&
     !isset($_POST['hossz'])&&
     !isset($_POST['tulaj']))
    {
        echo "Adjon meg minden bementet!";
        echo "<a href='index.php?page=5'>Vissza</a>";
    }
    else{ 
        $cim = $_POST['cim'];
        $megjelenes_ev = $_POST['megjelenes_ev'];
        $kategoria = $_POST['kategoria'];
        $hossz = $_POST['hossz'];
        $tulaj = $_POST['tulaj'];

        require 'mydbms.php';
        $con = connect('user', 'root', '');
        $query = "INSERT INTO film(cim, megjelenes_ev, kategoria, hossz, tulaj)
         VALUES ('$cim', '$megjelenes_ev', '$kategoria','$hossz','$tulaj')";
        
        $result = mysqli_query($con, $query) or die ("Nem sikerült ".$query);
        header('Location: index.php');
    }
?>