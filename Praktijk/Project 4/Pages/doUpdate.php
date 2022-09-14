<?php
/**************************
 * Bestand  : doUpdate.php
 * User     : Administrator
 * Datum    : 15-6-2022
 ****************************/
session_start();
require_once "../Includes/dbFunctions.php";
require_once "../Includes/nav.php";
?>
<main id="wrapper">
    <?php
    startConnection();

    $updateQuery= "UPDATE Activity 
    SET
        Name = '". $_POST["Name"] . "' ,
        Start = '". $_POST["Start"] . "' ,
        End = '". $_POST["End"] . "' ,
        Location = '". $_POST["Location"] . "' ,
    WHERE ActivityID = ". $_POST["id"] ." ";

    echo $updateQuery;

    $affectedRows = executeInsertQuery($updateQuery);

    echo "<p>$affectedRows evenement is aangepast </p>";
    echo "<a href='Overzicht.php'> Bekijk alle evenementen </a>"

    ?>
</main>

<?php
require_once "../includes/footer.php";
?>
</body>
</html>

