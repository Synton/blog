<?php
//Es wird überprüft ob die Session aktiv ist oder nicht, falls diese nicht Aktiv ist,
//wird eine Session gestartet.
if(!isset($_SESSION))
{
  session_start();
}
if (isset($_SESSION['username'])){
  include('core/storage.php');
  include('core/user.php');
  include('core/blog.php');
  include('core/blogEntry.php');





  }

else {
    header('Location: login.php');  
}
  $tmp_content = ('templates/blogoverview.html.php')  ;
  include('templates/layout.nav.html.php');
?>