<?php
/**************************
 * Bestand  : cookie2.php
 * User     : Administrator
 * Datum    : 29-3-2022
 ****************************/
?>
<?php
$oefening = "cookie2.php";
require_once "../../includes/header.php";
require_once "../../includes/Function.php";
?>
<main id="wrapper">
    <?php
    echo $_COOKIE['userCountCookie'];
    ?>
</main>

<?php
require_once "../../includes/footer.php";
?>
</body>
</html>

