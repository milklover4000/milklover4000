<?php
/**************************
 * Bestand  : opdracht62.php
 * User     : Administrator
 * Datum    : 5-4-2022
 ****************************/
?>
<?php
$oefening = "opdracht62.php";
require_once "../../includes/header.php";
require_once "../../includes/Function.php";
session_start();
$_SESSION['user1'] = 0;
$_SESSION['user2'] = 0;
?>
<main id="wrapper">
        <form id="gameFrm" method="get" action="opdracht62.php">
            <div class="float"><input type="radio"
                                      onchange="document.getElementById('gameFrm').submit();" name="keuze"
                                      value="steen"><img src="Images/steen.jpg"></div>
            <div class="float"><input type="radio"
                                      onchange="document.getElementById('gameFrm').submit();" name="keuze"
                                      value="papier"><img src="Images/papier.jpg"></div>
            <div class="float"><input type="radio"
                                      onchange="document.getElementById('gameFrm').submit();" name="keuze"
                                      value="schaar"><img src="Images/schaar.jpg"></div>
        </form>
        <?php
        if (isset($_GET['keuze']))
        {
            echo "Jij koos: <img src='images/{$_GET['keuze']}.jpg'>";
        }

        //keuze computer?

        //Wat kiest de computer

        //Random wordt er een getal tussen 0 en 2 gekozen
        $opties = array("steen","papier","schaar");
        $computerkeuzegetal = rand(0,2);
        $computerkeuze = $opties[$computerkeuzegetal];
        echo "&nbsp;&nbsp; De computer koos: <img src='images/{$computerkeuze}.jpg'>";

        //verschillende keuzes
        if (isset($_GET['keuze']) == $computerkeuze) {
            echo "geen punt";

            if (isset($_GET['keuze']) != $computerkeuze) {
                echo "De AI heeft gewonnen";
                $_SESSION['user2']++;
            }
        }
        else
        {
            echo "Je hebt gewonnen";
            $_SESSION['user1'] ++;
        }

        if ($_SESSION['user1'] == 5)
        {
            session_reset();
        }

        if ($_SESSION['user2'] == 5)
        {
            session_reset();
        }
        ?>
</main>
</body>
</html>

