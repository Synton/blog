<?php 

if(!isset($_SESSION))
{
    session_start();
}
?>

<!DOCTYPE html>
<!-- Hier wird ein Template erstellt.
     Dieses Template wird später in einer PHP Datei eingebunden. -->
<html>
    <link rel="stylesheet" href="../static/styles.css" />
    <head>
        <title>Projektauftrag 2</title>
    </head>
    <body>

        <header>
            <h1>Der Blog </h1>
        </header>


        <?php
            //In dieser if Verzweigung wird falls die Variablie $tmp_globalmessage(es wird im Login ein Array erstellt mit den Fehlermeldungen) gesetzt ist,
            //die Fehlermeldung angezeigt 
            if (isset($tmp_globalmessage)) { 
                  foreach($tmp_globalmessage as $message){ ?>
            <section id="globalmessage">
                <p><?php echo $message; ?></p>
            </section> 

        <?php }} ?>
        <section id="content">
            <?php include($tmp_content); ?>
        </section>
        <footer>
            <span>
                Copyright Marc Eskandar
            </span>
       </footer>    
    </body>
</html>
