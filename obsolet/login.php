<!doctype html>
<html>
<head>
    <meta charset="UTF-8" >
    <title>BLOG Registration</title>
    <link rel="stylesheet" type="text/css" href="./static/styles.css">
    
    <!-- Hier kommen die JavaScript Funktionen hin -->
    <script type="text/javascript">
    
    function validateForm() {
        
		// Damit das Testen einfacher ist, werden zu Beginn die Einschränkung
		// für das Passwort nicht durchgesetzt.
		
		alert("wurde getestet");
    
	    return false;		// das formular kann abgeschickt werden
    }
    
    </script>
</head>








<!-- here comes the body -->
<body> <h1 align="center">Login</h1> 
<div align="center"> <form action="main.php" method="post" name="formLogin"> 
    <table align="center" id="rcorners">
      <tbody>
        <tr> 
          <td>Benutzername</td> 
          <td><input name="txtMail" id="mail" required="" type="email" /></td> 
        </tr> 
        <tr> 
          <td>Passwort</td> 
          <td><input name="txtPasswort" id="password" required="" type="password" /></td> 
        </tr> 
        <tr> 
          <td colspan="2">&nbsp;</td> 
        </tr> 

        <tr> 
          <td colspan="2" align="center"> <input type="reset" value="Reset" /> <input id="submit" onclick="checkFields()" type="submit" value="Abschicken" /> 
            <br><br><a href="registration.html.php">Registrieren</a></td> 
        </tr> 
      </tbody>
    </table> </form> 
</div> </body>
</html>
