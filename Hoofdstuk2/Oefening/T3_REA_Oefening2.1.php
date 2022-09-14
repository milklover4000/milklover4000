<?php
/**
 * User: Arda Agar
 * Date: 15-2-2022
 * File: T3_REA_Oefening1.1.php
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
        <p>
            <?php
            // echo kan je gebruiken om een tekst terug geven aan de browser door php. de enige probleem dat echo heeft is dat het de waarde niet terug geeft.
            echo "<h2>" . "PHP" . "</h2>";
            echo "<p>" . "php is een scripttaal dat je kan gebruiken om tekst van een database in een website kan gebruiken
            . php werk door een request door de client naar de webserver vanaf de webserver stuurt php een request naar de database
             en de database stuurt de code weer terug zodat de web server de html code terug kan sturen naar de apache server, en de apache server stuurt de html terug naar de client. Dit process heet server-side" . "</p>";
            echo "<h2>" . "Git en Github" . "</h2>";
            echo "<p>" . "GIT kan je gebruiken om de source-code te zien, GIThub is een cloud versie van Git. een commit gebruik je om je source-code in een repositorie zet. als je het pushed zet je de code online zodat mensen die code kan zien. als je een clone van een bestand maakt kopieer je de bestand vanaf GIThub naar je computer en kan je hetzelf bekijken in een IDE." . "</p>";
            ?>
        </p>
    </section>
</main>
</body>
</html>
