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
            Eigene Blogs<br />
            <?php
                include_once('core/storage.php');
                $storage = new Storage();
                $storage->loadStorage('data/storage.txt');
                $index = 0;
                foreach ( $storage->getAllBlogs() as $blog){
                   echo " <a href='main.php?blog=".$index."'>".$blog->getTitle()."</a>";
                  $index = $index +1;
                   }
            ?>


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