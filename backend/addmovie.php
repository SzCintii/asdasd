<form action="addNewMovie.php" method="POST">
    <label for="cim">Cím: </label>
    <input type="text" name="cim" id="cim"/><br>

    <label for="megjelenesEv">Megjelenés: </label>
    <input type="date" name="megjelenes_ev" id="megjelenes_ev" required/><br>

    <label for="kategoria">Kategória: </label>
    <input type="text" name="kategoria" id="kategoria"/><br>

    <label for="hossz">Hossz: </label>
    <input type="number" name="hossz" id="hossz"/><br>

    <label for="tulaj">Tulaj: </label>
    <input type="text" name="tulaj" id="tulaj"/><br>

    
    <button type="submit">Hozzáadás</button>
</form>