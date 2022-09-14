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
    <link href="../styles/style.css" rel="stylesheet">
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
        <h3>Hoofdstuk 1:</h3>
        <ul>
            <li><a href="/REA_T3T4/Realiseren/Thema3/Hoofdstuk1/Oefening/T3_REA_Oefening1.1.php">Oefening 1.1</a></li>
            <li><a href="/REA_T3T4/Realiseren/Thema3/Hoofdstuk1/Oefening/T3_REA_Oefening1.2.php">Oefening 1.2</a></li>
        </ul>
    </nav>
    <section>
        <h2>
            Uitwerkingen.
        </h2>
        <p>
            <?php
            date_default_timezone_set("Europe/Amsterdam");
            echo date("d-m-y")
            ?>
        </p>
    </section>
</main>
</body>
</html>
