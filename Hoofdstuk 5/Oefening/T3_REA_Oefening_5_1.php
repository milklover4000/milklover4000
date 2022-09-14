<?php
/**************************
 * Bestand  : T3_REA_Oefening_5_1.php
 * User     : Arda Agar
 * Datum    : 24-3-2022
 ****************************/
?>
<?php
$oefening = "T3_REA_Oefening_5_1.php";
require_once "../../includes/header.php";
require_once "../../includes/Function.php";
?>
<main id="wrapper">
    <h2>
        Uitschrijf formulier
    </h2>
    <HR>
    <form action="T3_REA_REA_Oefening_5_1-resultaat.php" method="get">
        <label> Voor en achternaam</label> <input type="text" name="naam">
        <br>
        <label> Studentennummer </label> <input type="text" name="studentnumb">
        <br>
        <label> Datum van uitschrijving</label> <input type="text" name="Datum">
        <br>
        <label> Reden van uitschrijving</label>
        <select name="Reden">
            <option value="AndereOpleiding"> een andere opleiding gevonden</option>
            <option value="AndereSchool"> een Andere school gevonden</option>
            <option value="verkeerdeKeuze"> een verkeerde keuze</option>
            <option value="persoonlijk"> een persoonlijk reden</option>
        </select>
        <br>
        <label> Leerjaar: </label> &emsp;  <input type="radio" name="Leerjaar" value="Leerjaar"> Leerjaar 1 <br>
        &emsp; &emsp; &emsp; &emsp; <input type="radio" name="Leerjaar" value="Leerjaar">  Leerjaar 2 <br>
        &emsp; &emsp; &emsp; &emsp; <input type="radio" name="Leerjaar" value="Leerjaar">  Leerjaar 3
        <br>
        <input type="checkbox" name="SuccesKlas" value="succesKlas"> Ik wil me aanmelden bij de succesklas <br>
        <input type="checkbox" name="Gegevens"> verwijder mijn gegevens uit het systeem <br>
        <label> Geef hier je reden van uitschrijven op </label> <br>
        <textarea name="Reden"></textarea>
        <input type="submit" name="submit" value="Verzend">
    </form>
</main>

<?php
require_once "../../includes/footer.php";
?>
</body>
</html>

