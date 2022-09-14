<?php
/**
 * User: A.Agar
 * Date: Date
 * File: T3_REA_OefeningX.X.php
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
    <link href="../../../../Styles/styles/style.css" rel="stylesheet">
</head>
<body>
<header>
    <h1>
        <?php
        echo 'REA 3.1';
        ?>
    </h1>
</header>
<?php
?>
<main id="wrapper">
    <nav>
        <h2>Hoofdmenu</h2>
        <h3>opdrachten:</h3>
        <ul>
            <li><a href="/REA_T3T4/Realiseren/Thema3/Hoofdstuk1/Oefening/T3_REA_Oefening1.1.php">Oefening 1.1</a></li>
            <li><a href="/REA_T3T4/Realiseren/Thema3/Hoofdstuk2/Oefening/T3_REA_Oefening2.1.php">Oefening 2.1</a></li>
            <li><a href="/REA_T3T4/Realiseren/Thema3/Hoofdstuk2/Oefening/T3_REA_Oefening2.2.php">Oefening 2.2</a></li>
            <li><a href="/REA_T3T4/Realiseren/Thema3/Hoofdstuk3/oefening/T3_REA_oefening_3_1.php">Oefening 3.1</a></li>
        </ul>
    </nav>
    <section>
        <h2>
            Uitwerkingen.
        </h2>

        <p>
            <?php

            echo "Taak 1" ;

            $feest = "Carnaval ";
            $aantal = 3;
            $periode = "zondag, maandag en dinsdag";
            $vastentijd = 40;
            $Nederland  = "Nederland";
            $provincie = "Noord-Brabant";
            $voedsel = "Worstenbrood,koffie Schrobbeler";
            $story = $feest ."". "is van oorsprong een gekerstend heidens volksfeest. Het duurt
            officieel". "" . $aantal ."" . "dagen" . "". $periode . "" .  "direct voorafgaand aan de
            vastentijd van" . "". $vastentijd . "" . "dagen." . "" . $feest. "" . "is bij uitstek het feest van zotheid, spot
            en uitbundigheid. Inmiddels is het in verschillende plaatsen door heel" . "" .$Nederland. "". "een gebruik om" ."". $feest.""
            . "op carnavalsvrijdag te openen. Op
            Aswoensdag wordt" . "". $feest. "" ."afgesloten, maar de tradities verschillen per
            regio. In het overgrote deel van". "" .$provincie. "". "wordt er afgesloten met". "" .$voedsel. "". "soms met een Brabantse koffietafel.";
            echo "<p>" . $story . "</p>"
            ?>
            <?php
            echo "<p>" . "Taak2" . "</p>";
            $bon1 = 22.75;
            $bon2 = 24.50;
            $bon3 = 23.25;
            $totaal = "<p>". "de totale prijs is," . $bon1  + $bon2  + $bon3 . "</p>";
            echo "<p>" . $totaal . "</p>";
            ?>
            <?php
            echo "<p>" . "Challenge". "</p>";

            $eindPrijs = $bon1 + $bon2 + $bon3 - 50 + 2.05;
            echo "<p>" . "De eindprijs is," . $eindPrijs. "</p>";
            ?>
        </p>
    </section>
</main>
</body>
</html>
