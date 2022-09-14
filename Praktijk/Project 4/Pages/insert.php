<?php
require_once "../Includes/dbFunctions.php";
require_once "../Includes/nav.php";
startConnection();
$formattedDate = date("Y-m-d h:i", strtotime($_GET["Start"]));
$formattedDateEnd = date("Y-m-d h:i" , strtotime($_GET["End"]));
print_r($_GET);

$sql = "INSERT INTO Activity VALUES('". $_GET["Name"] . "', '".
    $formattedDate . "', '". $formattedDateEnd . "', '". $_GET['Location'] . "')";

$rijen = executeInsertQuery($sql);
;
echo "<br>" . $sql;

if ($rijen > 0)
{
    echo " <main id='wrapper'> <br> de evenement is toegevoegt <a href='Overzicht.php'> Klik hier om terug te gaan </a> </main>";
}
else
{
    echo " <br> Er is iets fouts gegaan";
}
?>


