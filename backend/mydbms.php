<?php
    function connect() 
    {
        $connection = mysqli_connect('localhost', 'root', '', 'asdasd', 3306);
        if(!isset($connection))
        {
            die("Hiba:".mysqli_errno($connection));
        }
        else return $connection;
    }
?>