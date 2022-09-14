<?php
/**************************
 * Bestand  : verwerk.php
 * User     : Administrator
 * Datum    : 22-3-2022
 ****************************/
?>
<?php
$oefening = "verwerk.php";
require_once "../../includes/header.php";
require_once "../../includes/Function.php";
?>
<main id="wrapper">
    <?php

    if (isset($_GET['geslacht'])){
        $geslacht = $_GET['geslacht'];
    }
    else
    {
        $geslacht = "dat weten we niet";
    }

    echo "Ik wil de naam weten ...Is dat ..? " . $_GET['naam'] . " en ik ben een " .$geslacht;

    ?>
</main>

<?php
// require_once "../../includes/footer.php";
?>
</body>
</html>

