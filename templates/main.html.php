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
                    <input type="text" name="title" id="title" placeholder="Titel" required ="required"/>
 
                <select name="dropdown">
                <option value="keine" id="0"></option>
                <option value="Arbeit" id="1">Arbeit</option>
                <option value="Schule" id="2">Schule</option>
                <option value="Privat" id="3">Privat</option>
                <option value="Andere" id="4">Andere</option>
           
                    <textarea name="textarea_blogentry" required ="required"> </textarea> 
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