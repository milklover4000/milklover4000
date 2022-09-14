<?php
/*
    Author: Arda Agar
    date: 16-06-2022

    Delete.php
*/
require_once "../Includes/dbFunctions.php";
require_once "../Includes/nav.php";
session_start();
startConnection();

$query = "DELETE FROM Activity WHERE ActivityID =". $_GET['id'];

if(empty($_GET["id"]) == true)
{
    echo "<main id='wrapper'>";
    echo "<p>Er is geen ID ingevoerd. Ga terug en probeer opnieuw</p>";
    echo "<br>";
    echo "<a href='Overzicht.php'>Ga terug</a>";
    echo "</main>";
    // Stop het script
    die();
}

$rowsAffected = executeInsertQuery($query);

if($rowsAffected > 0)
{
    echo "<main> <p>Succes! Verwijderen geslaagd.</p></main>";
}
else {
    echo "<main><p>Mislukt! Verwijderen mislukt.</p></main>";
}

require_once "../Includes/footer.php";
?>