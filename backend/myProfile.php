<?php
    $id = $_SESSION['id'];
    require 'mydbms.php';
    $con = connect();
    $query = "SELECT * FROM user WHERE id=$id";
    $results = mysqli_query($con, $query);
    $result = mysqli_fetch_row($results);
?>
<h1>Profilom szerkesztése</h1>

<form action="updateProfile.php" method="POST">

    
    <label for="felhasznalonev">Felhasználónév: </label>
    <input type="text" name="felhasznalonev" id="username" value="<?= $result[1] ?>" ><br>


    <label for="jelszo">Jelszó: </label>
    <input type="password" name="jelszo" id="password"value="<?= $result[2] ?>"><br>
   
    <label for="email">Email: </label>
    <input type="email" name="email" id="email"value="<?= $result[4] ?>"><br>

    <button type="submit">Módosítás</button>
</form>