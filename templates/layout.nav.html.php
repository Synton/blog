<?php 
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

        <nav>
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