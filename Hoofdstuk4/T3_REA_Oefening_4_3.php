<?php
/**************************
 * Bestand  : T3_REA_Oefening_4_3.php
 * User     : Administrator
 * Datum    : 20-3-2022
 ****************************/
?>
<?php
$oefening = "T3_REA_Oefening_4_3.php";
require_once "../includes/header.php";
require_once "../includes/Function.php";
?>
<main id="wrapper">
    <?php
        echo time();
        "<br>";
        CalculateInterest($Carcost, $savedCost);
        "<br>";
        CreatePiramid($hoogte);
       "<br>"
    ?>
</main>

<?php
require_once "../includes/footer.php";
?>
</body>
</html>

