<?php

echo $_GET["grad"];

// kreirajte select listu s 5 imena gradova.
// klikom na pokaži poštanski broj ispišite poštanski broj grada

?>

<form>
    <select name="grad">
        <option value="31000">Osijek</option>
        <option value="32000">Vukovar</option>
        <option value="33000">Slavonski brod</option>
        <option value="21000">Split</option>
        <option value="23000">Zadar</option>
    </select>
    <input type="submit" value="Daj broj" />
</form>