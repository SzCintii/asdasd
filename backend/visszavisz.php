<?php
    session_start();
    $filmId = $_POST['film_id'];
    $userId = $_SESSION['id'];
    require 'mydbms.php';
    $con = connect();
    $query = "DELETE FROM kolcsonzesek            
     WHERE film_id=$filmId AND kolcsonzo_id=$userId";
    $result = mysqli_query($con, $query) or die ("Nem sikerült ".$query);
    header('Location: index.php');
?>