<?php
/**************************
 * Bestand  : T3_REA_Oefening_5_2-resultaat.php
 * User     : Arda Agar
 * Datum    : 27-3-2022
 ****************************/
?>
<?php
$oefening = "T3_REA_Oefening_5_2-resultaat.php";
require_once "../../includes/header.php";
require_once "../../includes/Function.php";
?>
<main id="wrapper">
    <?php
        $username = "MilkLover4000";
        $password = "MilkyWay";

        if (isset($_POST['Username']) != $username) {
            echo "Username incorrect";
        }
        else
        {
            if ($_POST['Username'] == $username){
                if ($_POST['Username'] != $username){
                echo "password en / of username incorrect";}
                if ($_POST['Password'] != $password){
                    echo "password en / of username incorrect";}

                if ($_POST['Password'] == $password){

                    echo "<img src='../Images/posters-treasure-chest.jpg.jpg' alt='treasure chest'>";
                }
            }
            else{
                echo "password en / of username incorrect";
            }
        }

    ?>
</main>

<?php
require_once "../../includes/footer.php";
?>
</body>
</html>

