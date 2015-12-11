<div align="center" id="rcorners">
    <section id="content">
        <?php foreach($tmp_blogs as $blog) { ?>
         <h2><?php echo($blog->getTitle()); ?></h2>
            <article>
                <?php
                    $count = 0;
                    foreach ($blog->getAllBlogentries() as $blogentry){
                        include('blogentry.tmp.php');
                        $count += 1;
                    }
                ?>
            </article>
            <?php if ($actual_user_blog != NULL && $actual_user_blog == $blog) { ?>
                <br>
                <br>
                <br> 
                <form method="post" action="main.php" name="add_blogentry_form"> 
                    <input type="text" name="title" id="title" placeholder="Titel" required pattern="\S"/>
                    <br>
                    <br>  


                    <textarea name="textarea_blogentry" required pattern="\S"> </textarea> 
                    <input id="submit"  type="submit" value="Senden" />
                </form>                    
            <?php } ?>
        <?php } ?>


    </section>
</div>
<footer>
    <span>   
        Copyright Marc Eskandar
    </span>
</footer>