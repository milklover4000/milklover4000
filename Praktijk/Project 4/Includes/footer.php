<footer>
    <?php

        date_default_timezone_set('Europe/amsterdam');
        if (isset($_SESSION['succesLogin']) == true)
        {
            $user = $_SESSION['succesLogin'];
        echo "<p>" ."Welkom" . " " .  $user . " ". "vandaag is het" . " " . Date('Y-M-D') . "</p>";
        }
        else
        {
            echo "<p> "."Welkom" . " " . "Gast" . " ". "vandaag is het" . " " . Date('Y-M-D'). "</p>";
        }
    ?>
</footer>

