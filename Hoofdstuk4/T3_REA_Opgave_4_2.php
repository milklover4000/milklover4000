<?php
/**
 * User: A.Agar
 * Date: Date
 * File: T3_REA_OefeningX.X.php
 */
?>
<!DOCTYPE html>
<html lang="nl">
<?php
$oefening = "oefening 4.2";
include "../Includes/Header.php"
?>
<body>
<header>
    <h1>
        <?php
        echo 'Instructies';
        ?>
    </h1>
</header>

    <section>
        <h2>
            Uitwerkingen.
        </h2>
        <p>
            <?php
            include "../Includes/Function.php";
                CheckTrafficLight($color, $ambulance)
            ?>
            <br>
            <br>
            <?php
            ShowMenu($Day)
            ?>
            <br>
            <br>
            <?php
            ShowLadiesNight($Mysex, $Myage);
            ?>
        </p>
    </section>
<?php
include "../Includes/footer.php"
?>
</main>
</body>
</html>
