<?php
/**************************
 * Bestand  : T3_REA_Oefening_5_2.php
 * User     : Arda
 * Datum    : 24-3-2022
 ****************************/
?>
<?php
$oefening = "T3_REA_Oefening_5_2.php";
require_once "../../includes/header.php";
require_once "../../includes/Function.php";
?>
<main id="wrapper">
    <style>

        #TOP
        {
            background-color: #cce6ff;
            text-align: center;
        }

    </style>
    <form action="T3_REA_Oefening_5_2-resultaat.php" method="post">
        <table>
            <tr>
                <td colspan="2">
                    <h1 id="TOP">Inloggen</h1>
                    <p>
                        Welkom op onze website. <br>
                        Na correct in te loggen, krijgt u toegang tot onze schatkist. Deze is dan voor u, om te gebruiken!
                    </p>
                </td>
            </tr>
            <tr>
                <td>
                    Username
                </td>
                <td>
                    <input type="text" name="Username">
                </td>
            </tr>

            <tr>
                <td>
                    Password
                </td>
                <td>
                    <input type="password" name="Password">
                </td>
            </tr>

            <tr>
                <td colspan="2">
                    <input type="submit" value="Verzenden">
                </td>
            </tr>
        </table>
    </form>
</main>

<?php
require_once "../../includes/footer.php";
?>
</body>
</html>

