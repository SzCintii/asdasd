<?php
    switch($_SESSION['jog']) {
        case 'mod':
            echo "<a href='index.php?page=100'>Új film hozzáadása</a><br>";
            //echo "<a href='index.php?page=35'>Profilom</a><br>";
            echo "<a href='index.php?page=10'>Profilom szerkesztése</a><br>";
            //echo "<a href='index.php?page=25'>Kölcsönzéseim</a><br>";
            echo "<a href='index.php?page=450'>Filmek</a><br>";

            break;
        case 'user':
            //echo "<a href='index.php?page=35'>Profilom</a><br>";
            echo "<a href='index.php?page=10'>Profilom szerkesztése</a><br>";
            //echo "<a href='index.php?page=25'>Kölcsönzéseim</a><br>";
            echo "<a href='index.php?page=450'>Filmek</a><br>";
            break;
    }
    
    echo "<a href='logout.php'>Kijelentkezés</a>";
?>