<?php
/**************************
 * Bestand  : T4_REA_INSTRUCTIE.php
 * User     : Administrator
 * Datum    : 29-4-2022
 ****************************/
?>
<?php
$oefening = "T4_REA_INSTRUCTIE.php";
require_once "../includes/header.php";
require_once "../includes/Function.php";
?>
<main id="wrapper">
    <?php
// Open de database connectie en ODBC driver
    try
    {
        $pdo = new PDO("odbc:odbc2sqlserver");
    }
    catch (PDOException $e)
    {
        // Bij een error, toon dan deze melding
        echo "<h1>Database error:</h1>";
        echo $e->getMessage();
        // Stop het script
        die();
    }
    echo "database connectie gelukt<br>";
    // Uitvoeren van een SQl query
    try
    {
        // Query schrijven
        $sql = "SELECT * FROM tblRiddles";
        // Query uitvoeren
        $result = $pdo->query($sql);
    }
    catch (PDOException $e)
    {
        // Bij een error, toon dan deze melding
        echo "Er is een probleem met ophalen van tblRiddles: " . $e->getMessage();
        // Stop het script
        die();
    }
    // Door de results heen loopen via een while
    while ($row = $result->fetch(PDO::FETCH_ASSOC))
    {
        echo "ID: " . $row["Id"] . "<br>";
        echo "Raadsel: " . $row["RiddleText"] . "<br>";
        echo "Oplossing: " . $row["RiddleAnswer"] . "<br>";
        echo "Bedenker:" . $row["Creator"] . "<br>";
        echo "Datum: " . $row["CreateDate"] . "<br>";
        echo "<hr>";
    }

    ?>
</main>
</body>
</html>

