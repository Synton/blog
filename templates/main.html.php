<div align="center" id="rcorners">
    <section id="content">
        <h2>Blog</h2>
        <?php foreach($tmp_blogs as $blog) { ?>
            <article>
                <?php
                    foreach ($blog->getAllBlogentries() as $blogentry){
                        /*echo $blogentry->getText()."<br>";
                        echo $blogentry->getCreated()."<br>";
                        echo $blogentry->getUserid()."<br>";
                        echo $blogentry->getTitle()."<br>";
                        



                        */
                        include('blogentry.tmp.php');
                    }






                     ?>
            </article>


        <?php } ?>
    <br>
    <br>
    <br> 

<form method="post" action="main.php" name="add_blogentry_form"> 
    <input type="text" name="title" id="title" placeholder="Titel"/>
    <br>
    <br>    

    <textarea name="textarea_blogentry"> </textarea> 
    <input id="submit"  type="submit" value="Senden" />
</form>
<?php 

?>


    </section>
</div>
<footer>
    <span>   
        Copyright Marc Eskandar
    </span>
</footer>