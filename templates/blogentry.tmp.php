
<br>
<form method="post" action="main.php?userblog=true">
	<input type="hidden" value="<?php echo $count;  ?>" name="blogid"/> 
	<?php 
		//Prüft, ob blogedit in dem $_POST Array existiert, Prüft, ob blogid in dem $_POST Array existiert
		//es überprüft ob die Variable $count gleich ist wie blogid in der Variable $_POST 
		if (array_key_exists('blogedit', $_POST) && array_key_exists('blogid', $_POST) && $count == $_POST['blogid']) 
	{?>
		<input type="text" value="<?php echo $blogentry->getTitle(); ?>" name="blogtitle" />
            <?php 
            	/*
            	* Zusatzaufgabe: 
				* Dies ist nicht wirklich schön, jedoch ist es die einfachste Lösung um dies zulösen, 
				* diese Aufgabe hätte man ganz simpel mit Javascript lösen können.
				*/
				//Hier wird in PHP das Dropdown Menue dargestellt.
            	echo("<select name='dropdown'>");
            		//falls der Blogeintrag die Kategorie "keine" besitzt 
            		//wird dieser gesetzt und angezeigt.
		            if ($blogentry->getCategory()== "keine") {
            			echo("<option value='keine' selected id='0'></option>");

            		//falls der Blogeintrag eine andere Kategorie hat als "keine"
            		//wird kein Wert gesetzt.
          			} else {
            			echo("<option value='keine' id='0'></option>");
          			} 

            		//falls der Blogeintrag die Kategorie "Arbeit" besitzt 
            		//wird dieser wieder gesetzt und angezeigt.
  					if ($blogentry->getCategory()== "Arbeit") {
            			echo("<option value='Arbeit' selected id='1'>Arbeit</option>");

            		//falls der Blogeintrag eine andere Kategorie hat als "keine"
            		//wird kein Wert gesetzt.
          			} else {
            			echo("<option value='Arbeit' id='1'>Arbeit</option>");
          			} 

            		//falls der Blogeintrag die Kategorie "Schule" besitzt 
            		//wird dieser wieder gesetzt und angezeigt.
          			if ($blogentry->getCategory()== "Schule") {

            			echo("<option value='Schule' selected id='2'>Schule</option>");
            		//falls der Blogeintrag eine andere Kategorie hat als "Schule"
            		//wird kein Wert gesetzt.

          			} else {
            			echo("<option value='Schule' id='2'>Schule</option>");
          			} 
            		//falls der Blogeintrag die Kategorie "Privat" besitzt 
            		//wird dieser wieder gesetzt und angezeigt.

          			if ($blogentry->getCategory()== "Privat") {

            			echo("<option value ='Privat' selected id='3'>Privat</option>");
            		//falls der Blogeintrag eine andere Kategorie hat als "Privat"
            		//wird kein Wert gesetzt.

          			} else {
            			echo("<option value='Privat' id='3'>Privat</option>");
          			} 

            		//falls der Blogeintrag die Kategorie "Andere" besitzt 
            		//wird dieser wieder gesetzt und angezeigt.
          			if ($blogentry->getCategory()== "Andere") {
            			echo("<option value='Andere' selected id='4'>Andere</option>");

            		//falls der Blogeintrag eine andere Kategorie hat als "Andere"
            		//wird kein Wert gesetzt.
          			} else {
            			echo("<option value='Andere' id='4'>Andere</option>");
          			} 
				echo("</select>");
           ?>




		<textarea name="blogtext">
			<?php
			//Hier wird der Text des Blogeintrages geholt und wieder ausgegeben.
			echo $blogentry->getText(); 
			?>
		</textarea>
		<input type="submit" name="editsend" value="Bearbeitung absenden"/>
		<br/>
	<?php } else { ?>
		<h3>
			<?php
				//Hier wird der Titel des Blogeintrages geholt und wieder ausgegeben.
				echo $blogentry->getTitle(); 
			?>
		</h3>
		<p>
			<?php
			//Hier wird der Text des Blogeintrages geholt und wieder ausgegeben.
			echo $blogentry->getText(); 
			?> 
		</p>
		<p class="font_9"> Kategorie: 
			<?php
				//Hier wird die Kategorie des Blogeintrages geholt und wieder ausgegeben.
				echo $blogentry->getCategory(); 
				?>
		</p>
	<?php }?>
	<?php if ($actual_user_blog != NULL && $actual_user_blog == $blog) { ?>
		<span class="font_9"> erstellt am: <?php echo $blogentry->getCreated(); ?></span>
		<input type="submit" name="blogedit" class="font_8" value="bearbeiten"/>
		<?php echo "<a class='font_9' href='main.php?deleteblogentry=" . $count . "'>entfernen </a>" ?>
	<?php } ?>
</form>