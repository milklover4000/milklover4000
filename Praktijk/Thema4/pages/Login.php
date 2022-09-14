<?php
/**************************
 * Bestand  : Login.php
 * User     : Arda Agar
 * Datum    : 11-5-2022
 ****************************/
?>
<?php
require_once "../includes/nav.php";
?>
</nav>
<form action="overzicht.php" method="post">
    <label class="username">
        Inlogsnaam
    </label>
    <input type="text" placeholder="Schrijf hier uw gebruikersnaam" class="username" name="Username">
    <br>
    <label class="password">
        Wachtwoord
    </label>
    <input type="password" placeholder=" schrijf hier uw wachtwoord" class="password" name="Password">
    <br>
    <input type="submit" class='submit'>
        Log In
    </input>
</form>
<?php
require_once "../includes/footer.php"
?>
</body>
</html>

