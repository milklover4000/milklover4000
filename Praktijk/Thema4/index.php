<?php
/**************************
 * Bestand  : index.php
 * User     : Arda Agar
 * Datum    : 11-5-2022
 ****************************/
?>

<head>
    <title> Home - Dierentehuis ’s-Hertogenbosch</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles/stylesheet.css">
    <link rel="icon" href="images/logo.png">
</head>
<body>
<a href="index.php"> <img src="images/logo.png" alt="Logo van dierentehuis" class="Logo"> </a>
<nav>
    <ul>
        <li>
            <a href="#">
                over ons
                &#8595;
            </a>
        </li>
        <li>
            <a href="#">
                Dier Gevonden
            </a>
        </li>
        <li>
            <a href="#">
                Onze Dieren
                &#8595;
            </a>
        </li>
        <li>
            <a href="#">
                Afstand Doen
                &#8595;
            </a>
        </li>
        <li>
            <a href="#">
                Steun Ons
                &#8595;
            </a>
        </li>
        <li>
            <a href="#">
                Vrijwilligers werk
                &#8595;
            </a>
        </li>
        <li>
            <a href="#">
                Hondenpension & Dagopvang
            </a>
        </li>
        <li>
            <a href="pages/Login.php" class="Login">
                Inloggen
            </a>
        <li>
            <a href="pages/medewerker.php">
                Medewerkers
            </a>
        </li>
        </li>
    </ul>
</nav>

<img src="images/Homepage.JPG" alt="foto van Homepage" class="Homepage">

<footer>
    <?php
    if($_SESSION['succesLogin'] = true)
    {
        echo "u bent ingelogt";
    }
    else
    {
        echo "u bent niet ingelogt";
    }
    echo "<a href='pages/loguit.php'> uitloggen </a>";
    ?>
    </footer>
</body>
</html>

