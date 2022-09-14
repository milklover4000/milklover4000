<?php
/**************************
 * Bestand  : medewerker.php
 * User     : Administrator
 * Datum    : 20-5-2022
 ****************************/
?>
<?php
require_once "../includes/nav.php";
?>
<main>
<table>
<?php
$employee = array("Eliene Holla","Phillip Boekholt","Dio Bramer","linda butter","jurian de bot");

    echo "<tr>";
    echo "<td>";
    echo $employee[0] . "<img src='#' alt='Eliene'>";
    echo "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>";
    echo $employee[1]. "<img src='#' alt='Phillip'>";
    echo "</tr>";
    echo "</td>";
    echo "<tr>";
    echo "<td>";
    echo $employee[2]. "<img src='#' alt='Dio'>";
    echo "</tr>";
    echo "</td>";
    echo "<tr>";
    echo "<td>";
    echo $employee[3]. "<img src='#' alt='Linda'>";
    echo "</tr>";
    echo "</td>";
    echo "<tr>";
    echo "<td>";
    echo $employee[4]. "<img src='#' alt='Jurian'>";
    echo "</tr>";
    echo "</td>";
?>
</table>
</main>
<?php
require_once "../includes/footer.php";
?>
</body>
</html>

