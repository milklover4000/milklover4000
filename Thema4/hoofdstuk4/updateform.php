<?php
/**************************
 * Bestand  : updateform.php
 * User     : Administrator
 * Datum    : 8-6-2022
 ****************************/
?>
<?php
$oefening = "updateform.php";
require_once "../includes/header.php";
require_once "../includes/Function.php";
require_once "../includes/dbFunctions.php";

?>
<main id="wrapper">
    <?php
    echo $_GET['id'];
    startConnection();
$query = "SELECT * FROM tblRiddles WHERE Id =".$_GET['id'];
$result = executeQuery($query);
$row = $result->fetch(pdo::FETCH_ASSOC);
    ?>
    <form action="doUpdate.php" method="post">
        <input type="text" name="RiddleText" value="<?php echo $row['RiddleText']?>"> <br>
        <input type="text" name="RiddleText" value="<?php echo $row['RiddleAnswer']?>"> <br>
        <input type="text" name="RiddleText" value="<?php echo $row['Creator']?>"> <br>
        <input type="submit" name="submit" value="opslaan">
    </form>

</main>

<?php
require_once "../includes/footer.php";
?>
</body>
</html>

