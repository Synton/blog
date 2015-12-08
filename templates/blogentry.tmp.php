
<br>
<form method="post" action="main.php?userblog=true">
	<input type="hidden" value="<?php echo $count;  ?>" name="blogid"/> 
	<?php if (array_key_exists('blogedit', $_POST) && array_key_exists('blogid', $_POST) && $count == $_POST['blogid']) {?>
		<input type="text" value="<?php echo $blogentry->getTitle(); ?>" name="blogtitle" />
		<textarea name="blogtext"><?php echo $blogentry->getText(); ?></textarea>
		<input type="submit" name="editsend" value="Bearbeitung absenden"/>
		<br/>
	<?php } else { ?>
		<h3> <?php echo $blogentry->getTitle(); ?></h3>
		<p> <?php echo $blogentry->getText(); ?> </p>
	<?php }?>
	<?php if ($actual_user_blog != NULL && $actual_user_blog == $blog) { ?>
		<span class="font_9"> gesendet am: <?php echo $blogentry->getCreated(); ?></span>
		<input type="submit" name="blogedit" class="font_9" value="bearbeiten"/>
		<?php echo "<a class='font_9' href='main.php?deleteblogentry=" . $count . "'>entfernen </a>" ?>
	<?php } ?>
</form>