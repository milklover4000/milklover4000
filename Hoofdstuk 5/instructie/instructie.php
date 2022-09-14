<?php
/**************************
 * Bestand  : instructie.php
 * User     : Administrator
 * Datum    : 22-3-2022
 ****************************/
?>
<?php
$oefening = "instructie.php";
require_once "../../includes/Header.php";
require_once "../../includes/Function.php";
?>
<main id="wrapper">
    <h2>
        formulier test
    </h2>
    <form action="verwerk.php" method="get">
        <label>Naam </label><input placeholder="Wat is uw naam" type="text" name="naam">
        <br><label>Geslacht</label><br>
        <input type="radio" name="geslacht" value="M"> man
        <input type="radio" name="geslacht" value="V"> Vrouw<br>
        <input type="submit" name="verzend" value="verzend">
    </form>

</main>

<?php
// require_once "../../includes/footer.php";
?>
</body>
</html>

