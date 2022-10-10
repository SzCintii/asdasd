<?php
    require 'mydbms.php';
    $con = connect('user','root','');
    $filmId = $_POST['film_id'];
    $userId = $_SESSION['id'];
    //$query="DELETE FROM motorok(motorId, userId) VALUES('$motorId','$userId') 
    //WHERE motorid=".$_POST['motorId'];
    $query="DELETE FROM film WHERE film_id=".$_POST['film_id'];
    $result = mysqli_query($con, $query) or die ("Nem sikerült ".$query);
    header('Location: index.php');
?>