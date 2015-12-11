<?php 
//Es wird überprüft ob die Session aktiv ist oder nicht, falls diese nicht Aktiv ist,
//wird eine Session gestartet.
if(!isset($_SESSION))
{
    session_start();
}
?>
<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="../static/styles.css" />
    <head>
        <title>Projektauftrag 2</title>
    </head>
    <body>

        <header>
            <h1>Der Blog</h1>
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

        <nav>
            <h4>Angemeldet: <?php echo($_SESSION['username']); ?></h4>
            <ul>
                <li><a href="main.php?overview=true">Alle Blogs</a></li>
                <li><a href="main.php?userblog=true">Eigener Blog</a></li>
                <li><a href="createblog.php">Blog erstellen</a></li>
                <li><a href="login.php?logout=true">Abmelden</a></li>
            </ul>
        </nav>
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