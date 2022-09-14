<!DOCTYPE html>
<!-- 
    Auteur:             Rob JM Wessels
    Aanmaakdatum:       dec 2020
    
    KW1C instructie:    Resultaat opdracht 3.2 thema 2
-->
<html lang="en-us">
    <head>
        <title>
            Responsive 2
        </title>
        <meta charset="UTF-8" >
        <meta name="viewport" content="width=device-width initial-scale=1" >
        <script src="../scripts/scriptpages.js" defer></script>
        <!-- nieuwe style -->
        <link rel="stylesheet" href="../styles/stylesheet.css">
    </head>          
    
    <body>
    <?php
    $title = "T3 Oef 4.1 carlitosway";
    include "../includes/top.php";       // includen top.php
    ?>

        
            <article>
                <h2>Carlito's Way</h2>
                <p>
                    <img id="carlitosway" src="../images/carlitosway.PNG" alt="Carlito">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. In et lectus a risus semper semper nec non lectus. Ut ac pulvinar lectus. Donec rhoncus rutrum tincidunt. Vivamus gravida sed arcu scelerisque dapibus. Sed porta laoreet nulla a consequat. Phasellus mattis, urna in interdum iaculis, sem eros fringilla odio, vel elementum libero nisi placerat urna. Nullam faucibus dui vitae eros lacinia, quis vulputate libero sagittis. 
                    
                </p>
            </article>
            <?php
            include "../includes/bottom.php";       // includen bottom.php
            ?>
    </body>
</html>
