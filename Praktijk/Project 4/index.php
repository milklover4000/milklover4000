<?php
/**************************
 * Bestand  : index.php
 * User     : Administrator
 * Datum    : 8-6-2022
 ****************************/
session_start();
require_once "Includes/dbFunctions.php"
?>
<head>
    <title> KW1C Sportafdeling </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Styles/stylesheet.css">
    <link rel="icon" href="images/logo-welkom.svg">
</head>
<header>
    <nav>
        <a href="index.php"> <img src="images/logo-welkom.svg" alt="logo van KW1C" class="logo"> </a>
        <ul>
            <li>
                <a href="#">
                    Opleidingen
                </a>
            </li>
            <li>
                <a href="Pages/Login.php">
                    Login
                </a>
            </li>
            <li>
                <a href="Pages/Overzicht.php">
                    Evenementen
                </a>
            </li>
        </ul>
    </nav>
</header>
<main id="wrapper">
    <img src="images/sportacademie.jpg" alt="foto van sportAcademie" class="sportAcademie">
    <h2>
        Welkom op de pagina van de sport Academie kw1c
    </h2>
    <article>
        Sport is er niet alleen voor gezonde mensen en topsporters.
        Ook ouderen,&nbsp;gehandicapten en bijvoorbeeld mensen met overgewicht kunnen hulp gebruiken bij sporten
        en bewegen. Van een trainer bijvoorbeeld. Of van een coach of een instructeur.
        En natuurlijk zijn er ook mensen die sportzaken &nbsp;coördineren en organiseren.
        Allemaal beroepen waarvoor je een opleiding aan de Sportacademie volgt.
    </article>
    <?php
    startConnection();
    $query = "SELECT TOP 3 * FROM Activity ORDER BY ActivityID";
    $result = executeQuery($query);
    $row = $result->fetch(PDO::FETCH_ASSOC);
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        echo "<td>" . $row["ActivityID"] . "</td>";
        echo "<td>" . $row["Name"] . "</td>";
        echo "<td>" . $row["Start"] . "</td>";
        echo "<td>" . $row["End"] . "</td> ";
        echo "<td>" . $row["Location"] . "</td> <br>";
        echo "</tr>";
    }
    ?>
</main>

<?php
require_once "Includes/footer.php";
?>
</body>
</html>

