<?php
/**************************
 * Bestand  : Login.php
 * User     : Arda Agar
 * Datum    : 8-6-2022
 ****************************/
session_start();
require_once "../includes/dbFunctions.php";
require_once "../includes/nav.php";

startConnection();

if (isset($_SESSION['succesLogin']) == true)
{
    echo "<p class='loggedIn'> u bent al ingelogd </p>";
}
else
{ ?>
    <main id="wrapper">
   <form action="checkLogin.php" method="post">
       <label>Username: <input type="text" name="username"></label>

       <label>Password: <input type="password" name="password" </label>

       <input type="submit">
   </form>
</main>
<?php
}
?>
<?php
require_once "../includes/footer.php";
?>
</body>
</html>

