<?php
/**************************
 * Bestand  : footer.php
 * User     : Administrator
 * Datum    : 18-5-2022
 ****************************/
?>
<footer>
    <?php
    if($_SESSION['succesLogin'] = true)
    {
        echo "u bent ingelogt";
    }
    else
    {
        echo "Dit is de foute gebruikersnaam";
    }
    echo "<a href='loguit.php'> uitloggen </a>";
    ?>
</footer>
</body>
</html>

