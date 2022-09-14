<?php
/**
 * User: Arda Agar
 * Date: 15-2-2022
 * File: T3_REA_Oefening2.2.php
 */
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <title>
        <?php
        echo 'Realiseren instructies thema 3 en 4.';
        ?>
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../styles/style.css" rel="stylesheet">
</head>
<body>
<header>
    <h1>
        <?php
        echo 'Instructies';
        ?>
    </h1>
</header>
<?php
//Hier gaan we in het volgende hoofdstuk het menu toevoegen.
?>
<main id="wrapper">
    <nav>
        <h2>Hoofdmenu</h2>
        <h3>Hoofdstuk 2:</h3>
        <ul>
            <li><a href="../../../../../index.php">Home</a></li>
            <li><a href="/REA_T3T4/Realiseren/Thema3/Hoofdstuk2/Oefening/T3_REA_Oefening2.1.php">Oefening 2.1</a></li>
            <li><a href="/REA_T3T4/Realiseren/Thema3/Hoofdstuk2/Oefening/T3_REA_Oefening2.2.php">Oefening 2.2</a></li>
        </ul>
    </nav>
    <section>
        <h2>
            Uitwerkingen.
        </h2>

        <!-- Plaats je code / uitwerking hieronder -->
            <?php
            echo "<img height='200px' width='300px' src='../../../../images/politiebureau-in-den-bosch-ontruimd-vanwege-verdacht-pakketje.jpg' alt='foto Van politie auto'>";
            ?>
        <?php
        echo "<h2>". "Politiebureau in Den Bosch ontruimd vanwege verdacht pakketje" . "</h2>";
        ?>
        <?php
        echo "<p>" . "De straat rondom het bureau is afgezet. De Explosieven Opruimingsdienst Defensie (EOD) is aanwezig en maakt röntgenfoto's om te kijken of het pakketje explosieven bevat.";
        ?>
        <?php
        echo "<p>" . "Vanwege het vroege tijdstip hebben niet al te veel politiemedewerkers het bureau hoeven verlaten. De politie roept andere collega's ertoe op thuis op te starten.";
        ?>
        <?php
        echo "<img height='200px' width='300px' src='../../../../images/politiebureau-in-den-bosch-ontruimd-vanwege-verdacht-pakketje.jpg' alt='foto Van politie auto'>" .
            "<h2>". "Politiebureau in Den Bosch ontruimd vanwege verdacht pakketje" . "</h2>" .
            "<p>" . "De straat rondom het bureau is afgezet. De Explosieven Opruimingsdienst Defensie (EOD) is aanwezig en maakt röntgenfoto's om te kijken of het pakketje explosieven bevat.".
            "<p>" . "Vanwege het vroege tijdstip hebben niet al te veel politiemedewerkers het bureau hoeven verlaten. De politie roept andere collega's ertoe op thuis op te starten";
        ?>
    </section>
</main>
</body>
</html>
