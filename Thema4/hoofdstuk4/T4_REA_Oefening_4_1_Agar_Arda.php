<?php
/**************************
 * Bestand  : T4_REA_Oefening_4_1_Agar_Arda.php
 * User     : Administrator
 * Datum    : 3-6-2022
 ****************************/
?>
<?php
$oefening = "T4_REA_Oefening_4_1_Agar_Arda.php";
require_once "../includes/header.php";
require_once "../includes/Function.php";
require_once "../includes/dbFunctions.php";
startConnection();
$query = "SELect * FROM tblRiddles";
$result = executeQuery($query);
$row = $result->fetch(pdo::FETCH_ASSOC);
?>
<main id="wrapper">
    <?php
    while ($row = $result->fetch(pdo::FETCH_ASSOC))
    {
        echo "<tr>";
        echo "<td><a href='updateform.php?id=". $row["Id"]  . "'> Wijzig</a>";
        echo "<td>". $row["Id"]. "</td>";
        echo "<td>". $row["RiddleText"]. "</td>";
        echo "<td>". $row["RiddleAnswer"]. "</td>";
        echo "<td>". $row["Creator"]. "</td> ";
        echo "<td>". $row["CreateDate"]. "</td> <br>";
        echo "</tr>";
    }
    ?>
</main>

<?php
require_once "../includes/footer.php";
?>
</body>
</html>

