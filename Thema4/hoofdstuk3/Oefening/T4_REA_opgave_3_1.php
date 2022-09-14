<?php
/**************************
 * Bestand  : T4_REA_opgave_3_1.php
 * User     : Arda Agar
 * Datum    : 17-5-2022
 ****************************/
?>
<?php
$oefening = "T4_REA_opgave_3_1.php";
require_once "../../includes/Header.php";
require_once "../../includes/Function.php";
?>
<main id="wrapper">
    <form action="../Raadsel/insert.php" method="get">
        <label>
            Raadsel
        </label>
        <input type="text" name="RiddleText">
        <br>
        <label>
            Antwoord
        </label>
        <input type="text" name="RiddleAnswer">
        <br>
        <label>
            Maker
        </label>
        <input type="text" name="Creator">
        <br>
        <label>
            Datum
        </label>
        <input type="datetime-local" name="CreateDate">
        <br>
        <input type="submit" name="submitButton">
    </form>
</main>

</body>
</html>

