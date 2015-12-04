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
                <li>Eigene Blogs</li>
                <?php
                    include_once('core/storage.php');
                    include_once('core/user.php');
                    include_once('core/blog.php');
                    $storage = new Storage();
                    $storage->loadStorage('data/storage.txt');
                    $index = 0;
                   // print_r($storage->getAllBlogs());
                    foreach ($storage->getAllBlogs() as $blog){
                        //echo(gettype($blog));
                       echo "<li><a href='main.php?blog=".$index."'>".$blog->getTitle()."</a></li>";
                      $index = $index +1;
                    }
                ?>
                <li><a href="createblog.php">Blog erstellen</a></li>
                <li><a href="login.php">Abmelden</a></li>
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