<?php
/**************************
 * Bestand  : Overzicht.php
 * User     : Administrator
 * Datum    : 8-6-2022
 ****************************/
session_start();
if (isset($_POST['username']) && isset($_POST['password']))
{
    $_SESSION['succesLogin'] = true;
}
require_once "../includes/dbFunctions.php";
require_once "../includes/nav.php";

startConnection();
$query = "SELECT * FROM Activity ORDER BY ActivityID";
$result = executeQuery($query);
$row = $result->fetch(pdo::FETCH_ASSOC);
?>
<main id="wrapper">
    <?php
    if (isset($_SESSION['succesLogin'])  == true)
    {?>
    <h3>
        voeg een evenement toe
    </h3>
    <form action="insert.php" method="get">
        <label>
            Evenement
        </label>
        <input type="text" name="Name">
        <br>
        <label>
            Startmoment
        </label>
        <input type="datetime-local" name="Start">
        <br>
        <label>
            Eindmoment
        </label>
        <input type="datetime-local" name="End">
        <br>
        <label>
            Locatie
        </label>
        <input type="text" name="Location">
        <br>
        <input type="submit" name="submitButton">
    </form>
    <br>
        <?php
        // laat de eerste evenement niet zien
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>";
            echo "<td> <a href='Delete.php?id=" . $row["ActivityID"]."'> Verwijder</a>";
            echo "<td><a href='updateform.php?id=" . $row["ActivityID"] . "'> Wijzig</a>";
            echo "<td>" . $row["ActivityID"] . "</td>";
            echo "<td>" . $row["Name"] . "</td>";
            echo "<td>" . $row["Start"] . "</td>";
            echo "<td>" . $row["End"] . "</td> ";
            echo "<td>" . $row["Location"] . "</td> <br>";
            echo "</tr>";
        }
    }
    else
        // laat hier ook de eertse evenement niet zien
    {
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        echo "<td>" . $row["ActivityID"] . "</td>";
        echo "<td>" . $row["Name"] . "</td>";
        echo "<td>" . $row["Start"] . "</td>";
        echo "<td>" . $row["End"] . "</td> ";
        echo "<td>" . $row["Location"] . "</td> <br>";
        echo "</tr>";}
    }
    ?>
</main>

<?php
require_once "../includes/footer.php"
?>
</body>
</html>

