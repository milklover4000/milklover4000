<?php
/**************************
 * Bestand  : doUpdate.php
 * User     : Administrator
 * Datum    : 12-6-2022
 ****************************/
?>
<?php
$oefening = "doUpdate.php";
require_once "../includes/header.php";
require_once "../includes/Function.php";
require_once "../includes/dbFunctions.php";
?>

<main id="wrapper">
    <?php
    print_r($_POST);
    startConnection();
    $query = "UPDATE tblRiddles
    SET
        RiddleText = '".$_POST['RiddleText']."',
        RiddleAnswer = '".$_POST['RiddleAnswer']."',
        Creator = '".$_POST['Creator']."'
    WHERE Id =". $_POST['Id'];

    echo $query;

    $affectedRows = executeInsertQuery($query);

    echo "<p>$affected grap is aangepast";
    echo "<a href='T4_REA_Oefening_4_1_Agar_Arda.php'> Bekijk alle grappen"
    ?>
</main>

<?php
require_once "../includes/footer.php";
?>
</body>
</html>

