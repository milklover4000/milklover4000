<?php
require_once "../includes/dbFunctions.php";
require_once "../Includes/nav.php";
startConnection();

$username = $_POST["username"];
$password = $_POST["password"];

//Inlog Query
$query = "SET NOCOUNT ON; USE SportAcademie SELECT * FROM [User] WHERE UserName = '$username' AND  Password = '$password'";

// Uitvoeren Query
$resultaat = executeQuery($query);
$row = $resultaat->fetch(PDO::FETCH_ASSOC);

if ($row == false)
{
// Foutieve inlog
echo "<div id='probeer_opnieuw'>Foutive inlog <a href='../Pages/Login.php'>Probeer opnieuw</a></div>";
}

else
{
// Goede inlog
session_start();
$_SESSION['succesLogin'] = true;
$_SESSION['username'] = $_POST["username"];
    echo "<main id='wrapper'> U bent succesvol ingelogd </main>";
    require_once "../Includes/footer.php";
}
?>