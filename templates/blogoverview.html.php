<h1>&Uuml;bersicht Blogs</h1>
    <table align="center" id="rcorners">
      
      <tbody>
             <?php
                    include_once('core/storage.php');
                    include_once('core/user.php');
                    include_once('core/blog.php');
                    $storage = new Storage();
                    $storage->loadStorage('data/storage.txt');
                    $index = 0;
                    foreach ($storage->getAllBlogs() as $blog){
                      echo "<tr><th><h1><a href='main.php?blog=".$index."'>".$blog->getTitle()."</a></h1></tr></th>";
                      $index = $index +1;
                    }
                ?>      
      </tbody>
    </table>