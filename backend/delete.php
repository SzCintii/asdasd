<?php
    require 'mydbms.php';
    $con = connect();
    $filmId = $_POST['film_id'];
    $userId = $_SESSION['id'];
    $query="DELETE FROM film WHERE film_id=".$_POST['film_id'];
    $result = mysqli_query($con, $query) or die ("Nem sikerült ".$query);
    header('Location: index.php');
?>