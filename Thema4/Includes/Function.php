<?php
/**
 * User: A.Agar
 * Date: Date
 * File: T3_REA_OefeningX.X.php
 */
?>

<?php
function CheckTrafficLight($color, $ambulance)
{
    if ($ambulance == false)
    {
        if ($color == "red")
        {
            echo "u kunt niet doorrijden";
        }
        else
        {
            echo "u kunt doorrijden";
        }
    }
    else
    {
        echo "u kunt niet doorrijden";
    }
}
$color = "red";
$ambulance = false
?>

<?php
function ShowMenu($Day)
{
    switch ($Day)
    {
        case "Maandag":
            echo "We hebben spaghetti bolognese op onze menu";
            break;
        case "Dinsdag":
            echo "We hebben Pizza margarita op onze menu";
            break;
        case "Woensdag":
            echo "We hebben Biefstuk met champignonsaus op onze menu";
            break;
        case "Donderdag":
            echo "We hebben Turkse pizza met doner op onze menu";
            break;
        case "Vrijdag":
            echo "We hebben (vegentarische) lasagna op onze menu";
            break;
        case "Zaterdag":
            echo "We hebben Pizza met ansjovis of tonijn op onze menu";
            break;
        default:
            echo "We hebben zalm met rijst of diverse sushi";
    }
}

$Day = "Vrijdag";

?>

<?php
function ShowLadiesNight($sex, $age)
{
    if($sex == "m")
    {
        if($age >= 18)
        {
            echo "u kunt naar binnen.";
        }
        else
        {
            echo "u kunt niet naar binnen";
        }
    }
    else
    {
        echo "u kunt gratis naar binnen";
    }
}
$Mysex = "v";
$Myage = 22
?>

<?php

function CalculateInterest($Carcost, $savedCost) {
$counter = 0;
while($savedCost <= $Carcost)
{
    echo "In maand nummer $counter heb ik $savedCost" . "<br>";
    $savedCost = $savedCost * 1.06;
    $counter++;
}
}
$Carcost = 2500;
$savedCost = 950;



function CreatePiramid($hoogte)
{
    for($i = 0; $i <= 9; $i++) {

        for ($hoogte = 1; $hoogte <= $i; $hoogte++) {
            echo "$hoogte";

        }

        echo "<br>";
    }
    for($i = 9; $i >= 0; $i--) {

        for ($hoogte = 1; $hoogte<=$i; $hoogte++) {
            echo "$hoogte";

        }

        echo "<br>";
    }
}
$hoogte = 1;
?>