<?php
/**************************
 * Bestand  : T3_REA_REA_Oefening_5_1-resultaat.php
 * User     : Arda
 * Datum    : 25-3-2022
 ****************************/
?>
<?php
$oefening = "T3_REA_REA_Oefening_5_1-resultaat.php";
require_once "../../includes/header.php";
require_once "../../includes/Function.php";
?>
<main id="wrapper">
    <?php

    $input = $_GET['SuccesKlas'];
    if (isset($_GET['leerjaar'])){
        $leerjaar = $_GET['leerjaar'];
    }
    else
    {
        $leerjaar = "dat weten we niet";
    }

    if (isset($_GET['Reden'])){
        $TextBox = $_GET['Reden'];
    }
    else
    {
        $TextBox = "geen info getypt";
    }

    echo "Voor en achternaam". "&emsp;".$_GET['naam'] .  "<br>" . "Studentnummer" . "&emsp;".$_GET['studentnumb'] .  "<br>". "Datum van uitschrijving"
    ."&emsp;". $_GET['Datum'] .  "<br>" . "Reden van uitschrijving" . "&emsp;" . $_GET['Reden'] .  "<br>" . "Leerjaar" ."&emsp;". $leerjaar.  "<br>".
        "Aanmelden bij de succesklas" . "&emsp;". $input .  "<br>". "Verwijderen gegevens" . "&emsp;". $_GET['Gegevens'] .  "<br>"
    . $TextBox;
    ?>


</main>

<?php
require_once "../../includes/footer.php";
?>
</body>
</html>

