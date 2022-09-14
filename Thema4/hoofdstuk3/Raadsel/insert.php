<?php
/**************************
 * Bestand  : insert.php
 * User     : Arda Agar
 * Datum    : 17-5-2022
 ****************************/
?>
<?php
$oefening = "insert.php";
require_once "../../Includes/header.php";
require_once "../../Includes/Function.php";
require_once "../../Includes/dbFunctions.php"
?>
<main id="wrapper">
    <?php
    startConnection();

    $formattedDate = date("Y-m-d h:i", strtotime($_GET["CreateDate"]));

    print_r($_GET);

    $sql = "INSERT INTO tblRiddles VALUES('". $_GET["RiddleText"] . "', '".
        $_GET["RiddleAnswer"] . "', '". $_GET["Creator"] . "', '". $formattedDate . "')";

    $rijen = executeInsertQuery($sql);
    ;
    echo "<br>" . $sql;

    if ($rijen > 0)
    {
        echo " <br> Uw mop is toegevoegt";
    }
    else
    {
        echo " <br> Er is iets fouts gegaan";
    }
    ?>
</main>

</body>
</html>

