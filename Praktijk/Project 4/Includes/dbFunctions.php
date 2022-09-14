<?php
/**************************
 * Bestand  : dbFunctions.php
 * User     : Administrator
 * Datum    : 11-5-2022
 ****************************/

$pdo = null;

function startConnection() {
    global $pdo;
    try{
        $pdo = new PDO("odbc:odbc2sqlserver");
        $pdo->query( "USE SportAcademie");
    }
    catch(PDOException $e){

     echo "<h1> Database error </h1>";
     echo $e->getMessage();
     die();
    }
}

function executeQuery($sql)
{
    global $pdo;
    try {
        $result= $pdo->query($sql);
        return $result;
    }
    catch(PDOException $e)
    {
     echo $e->getMessage();
    }
}
function executeInsertQuery($query)
{
    global $pdo;

    try
    {
        $rowsAffected = $pdo->exec($query);
    }
    catch(PDOException $error)
    {
        $rowsAffected = 0;
        echo "<p>Er is een error opgetreden: ". $error->getMessage() . "</p>";
    }

    return $rowsAffected;
}