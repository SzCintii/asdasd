<?php
    session_start();
    $filmId = $_POST['film_id'];
    $userId = $_SESSION['id'];
    require 'mydbms.php';
    $con = connect('user','root','');
    $query = "INSERT INTO kolcsonzesek(film_id, kolcsonzo_id) VALUES('$filmId','$userId')";
    $result = mysqli_query($con,$query)  or die ("Nem sikerült ".$query);
    header('Location: index.php');
?>