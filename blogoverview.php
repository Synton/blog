<?php
if(!isset($_SESSION))
{
  session_start();
  print_r($_SESSION['username']);
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