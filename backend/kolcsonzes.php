<?php
    session_start();
    $filmId = $_POST['film_id'];
    $userId = $_SESSION['id'];
    require 'mydbms.php';
    $con = connect();
    $query = "INSERT INTO kolcsonzes(film_id, kolcsonzo_id) VALUES('$filmId','$userId')";
    $result = mysqli_query($con,$query)  or die ("Nem sikerült ".$query);
    header('Location: index.php');
?>