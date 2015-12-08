<div align="center" id="rcorners">
    <section id="content">
        <h2>Blog</h2>
        <?php foreach($tmp_blogs as $blog) { ?>
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
                    <input type="text" name="title" id="title" placeholder="Titel"/>
                    <br>
                    <br>  


                    <textarea name="textarea_blogentry"> </textarea> 
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