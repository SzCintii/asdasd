<?php
    function connect($dbname, $username, $password) 
    {
        $connection = mysqli_connect('localhost', 'root', '', 'asdasd', 3306);
        if(!isset($connection))
        {
            die("Hiba:".mysqli_errno($connection));
        }
        else return $connection;
    }
?>