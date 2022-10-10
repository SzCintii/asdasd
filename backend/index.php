<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="regformstyle.css"/>
    <title>Főoldal</title>
</head>
<body>
    <?php
        session_start();
        if(!isset($_SESSION['id']))
        {
            header('Location: loginform.php');
        }
    ?>
    <div class="menu">
       <?php require "menu.php"; ?>
    </div>
    <div class="content">
       <?php require "content.php"; ?>
    </div>
</body>
</html>