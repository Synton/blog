<div align="center" id="rcorners">
    <section id="content">
        <h2>Blog</h2>
        <?php foreach($blogs as $blog) { ?>
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
    </section>
</div>
<footer>
    <span>   
        Copyright Marc Eskandar
    </span>
</footer>