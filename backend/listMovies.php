<?php
    require 'mydbms.php';
    $con = mysqli_connect('localhost', 'root', '', 'user', 3306);
    //$con = connect('motorok','root','');
    $query = "SELECT * FROM film";
    $results = mysqli_query($con, $query);
    $filmek = mysqli_fetch_all($results); 
?>


<?php foreach($filmek as $film): ?>
    <table>
        <tr>
            <td>Cím</td>
            <td> <?= $film[1] ?></td>
        </tr>
        <tr>
            <td>Megjelenési év</td>
            <td> <?= $film[2] ?></td>
        </tr>
        <tr>
            <td>Kategória</td>
            <td> <?= $film[3] ?></td>
        </tr>
        <tr>
            <td>Hossz</td>
            <td> <?= $film[4] ?></td>
        </tr>
        <tr>
            <td>Tulaj</td>
            <td> <?= $film[5] ?></td>
        </tr>
        <tr>
            <td>
                <?php
                    $query = "SELECT * FROM kolcsonzesek
                     WHERE kolcsonzo_id=".$_SESSION['id']." AND film_id=".$film[0];
                    $results = mysqli_query($con, $query);
                    $result = mysqli_fetch_row($results);
                    
                    
                    if($result != NULL) {
                        echo ' <form action="visszavisz.php" method="POST">
                        <input type="hidden" value="'.$film[0].'" name="film_id">
                        <button type="submit">Visszavisz</button>
                    </form>';
                    }
                    else {
                        $query = "SELECT * FROM kolcsonzesek
                        WHERE film_id=".$film[0];
                        $results = mysqli_query($con, $query);
                        $result = mysqli_fetch_all($results);

                        if(count($result) == 0 )
                            echo '<form action="kolcsonzes.php" method="POST">
                            <input type="hidden" value="'.$film[0].'" name="film_id">
                            <button type="submit">Kölcsönzés</button>
                        </form>';
                    }
                ?>
            <td>
            <td>
                <?php if($_SESSION['jog'] == 'mod') : ?>
                <form action="delete.php" method="POST">
                    <input type="hidden" name="film_id" value="<?= $film[0] ?>">
                    <button type="submit">Töröl</button>
                </form>
                <?php endif; ?>
            </td>
        </tr>
    </table>
    <br><br>
<?php endforeach; ?>