<!-- Hier wird ein Template erstellt.
     Dieses Template wird später in einer PHP Datei eingebunden. -->
<h1>&Uuml;bersicht Blogs</h1>
    <table align="center" id="rcorners">
      
      <tbody>
             <?php
                    //Hier wird der Storage eingebunden damit ich die getters und setters benutzen kann.
                    include_once('core/storage.php');
                    //Hier wird der User eingebunden damit ich die getters und setters benutzen kann.
                    include_once('core/user.php');
                    //Hier wird der Blog eingebunden damit ich die getters und setters benutzen kann.
                    include_once('core/blog.php');
                    //Hier wird das neue Objekt erstellt.
                    $storage = new Storage();
                    //Hier wird die Funktion von der Datei Storage.php aufgerufen, und ladet den Storage.
                    $storage->loadStorage('data/storage.txt');
                    //In die Variable $index wird der Wert 0 hinzugefügt.
                    $index = 0;
                    //Es wird durch alle Blogs itteriert und jeder Blog wird als $blog definiert damit ich diese
                    //dann anzeigen kann.
                    foreach ($storage->getAllBlogs() as $blog){
                      //Der Blog wird dann in einem HTML Link auf der Seite verweisst, und mit Index ist jeder Blog
                      //einmalig definiert.
                      echo "<tr><th><h1><a href='main.php?blog=".$index."'>".$blog->getTitle()."</a></h1></tr></th>";
                      //Hier wird die Variable $index raufgezählt.
                      $index = $index +1;
                    }
                ?>      
      </tbody>
    </table>