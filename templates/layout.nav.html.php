<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="../static/styles.css">
    <head>
        <title>Projektauftrag 2</title>
    </head>
    <body>

        <header>
            <h1>Der Blog</h1>
        </header>

        <nav>
            Eigene Blogs<br />
            Blog erstellten<br />
            <a href="login.php">Abmelden</a>
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