<?php
/**************************
 * Bestand  : updateform.php
 * User     : Administrator
 * Datum    : 15-6-2022
 ****************************/
session_start();
require_once "../includes/dbFunctions.php";
require_once "../includes/nav.php";

?>
<main id="wrapper">
    <?php
    startConnection();
$query = "SELECT * FROM Activity WHERE ActivityID = ".$_GET["id"];
$result = executeQuery($query);
$row =$result->fetch(pdo::FETCH_ASSOC);
?>
    <form action='doUpdate.php' method="post">
        <input type="text" name="Name" value="<?php echo $row['Name']?>"> <br>
        <input type="datetime-local" name="Start" value="<?php echo $row['Start']?>"> <br>
        <input type="datetime-local" name="End" value="<?php echo $row['End']?>"> <br>
        <input type="text" name="Location" value="<?php echo $row['Location']?>"> <br>
        <input type="submit" name="submit" value="opslaan">
    </form>
</main>
<?php
require_once "../includes/footer.php";
?>
</body>
</html>

