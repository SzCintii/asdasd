<?php
    if(!isset($_GET['page']) || empty($_GET['page']))
    {
        $d = 0;
    }
    else {
        $d = $_GET['page'];
    }

    switch($d) {
        
        //case 0:
        //    include 'listMotors.php';
        //    break;
        case 100:
            include 'addmovie.php';
            break;
        case 10:
            include 'myProfile.php';
            break;
        case 15:
            include 'delete.php';
            break;
        case 25:
            include 'kolcsonzes.php';
            break;
        case 450:
            include 'listMovies.php';
            break;
        //case 35:
        //    include 'profilom.php';
        //    break;
    }
?>