<?php
/**************************
 * Bestand  : overzicht.php
 * User     : Administrator
 * Datum    : 13-5-2022
 ****************************/
session_start();
$username = array("Eliene", "Phillip","Dio","linda","jurian");
$password = "Wachtwoord";
// check for succesfull login
 if($_POST['Username'] == $username)
 {
     $_SESSION['succesLogin'] = true;
     header('Location: http://www.DierentehuisDenbosch.nl/pages/medewerker.php');
 }
else
{
    $_SESSION['succesLogin'] = false;
    echo "Sorry u bent niet ingelogt";
    header('Location: http://www.DierentehuisDenbosch.nl/pages/login.php');
    echo "foute gebruikersnaam of wachtwoord";
}

if($_POST['Password'] == $password)
{
    $_SESSION['succesLogin'] = true;
    header('Location: http://www.DierentehuisDenbosch.nl/pages/medewerker.php');
}
else
{
    $_SESSION['succesLogin'] = false;
    echo "Sorry u bent niet ingelogt";
    header('Location: http://www.DierentehuisDenbosch.nl/pages/login.php');
    echo "foute gebruikersnaam of wachtwoord";
}
?>
<?php
    require_once "../includes/nav.php";
?>
<?php
require_once "../includes/footer.php"
?>
</body>
</html>

