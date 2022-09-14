<?php
/**************************
 * Bestand  : cookies.php
 * User     : Administrator
 * Datum    : 29-3-2022
 ****************************/
// Wanneer moet de cookie verlopen? Over 1 dag!
$expires = time() + 3600 * 24;

// Check of de cookie bestaat
if(isset($_C00KIE["userCountCookie"]) == true)
{
    // De teller verhogen met één
    $newAmount = $_COOKIE["userCountCookie"] + 1;
    setcookie("userCountCookie", $newAmount, time() + 3600 * 24 * 14, "/");
}
else {
    // De cookie bestaat schijnbaar nog niet. Maak hem (opnieuw) aan.
    setcookie("userCountCookie", 0, time() + 3600 * 24 * 14, "/");
}
?>
<?php
$oefening = "cookies.php";
require_once "../../includes/header.php";
require_once "../../includes/Function.php";
?>
<main id="wrapper">
    <?php

    ?>
</main>

<?php
require_once "../../Includes/footer.php";
?>
</body>
</html>

