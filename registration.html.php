<!doctype html>
<html>
<head>
    <meta charset="UTF-8" >
    <link rel="stylesheet" type="text/css" href="static/styles.css">
    <title>BLOG Registration</title>
    
    
    <!-- Hier kommen die JavaScript Funktionen hin -->
    <script type="text/javascript">
    
    function validateForm() {
        
		// Damit das Testen einfacher ist, werden zu Beginn die Einschränkung
		// für das Passwort nicht durchgesetzt.
    
	    return true;		// das formular kann abgeschickt werden
    }
    
    </script>
</head>

<!-- here comes the body -->
<body>
    <h1 align="center">Registration</h1>
    
    <div align="center">
    
        <form action="registration.php" method="post" name="formRegistration">
            <table align="center" id="rcorners">
                <tr>
                    <td>Benutzername</td>
                    <td><input type="email" name="txtMail" id="mail" required/></td>
                </tr>
                <tr>
                    <td>Passwort</td>
                    <td><input type="password" name="txtPasswort" id="password" required/></td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="txtName" id="name" required/></td>
                </tr>
                <tr>
                    <td>Vorname</td>
                    <td><input type="text" name="txtVorname" id="firstname" required/></td>
                </tr>
                <tr>
                    <td>Strasse Nummer</td>
                    <td><input type="text" name="txtStrasse" id="street"/></td>
                </tr>
                <tr>
                    <td>PLZ Ort</td>
                    <td><input type="text" name="txtPLZOrt" id="zipPlace" required/></td>
                </tr>
                <tr>
                    <td colspan="2">&nbsp;</td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                    	<input type="reset" value="Reset"/>
                    	<input id="submit" type="submit" value="Abschicken" onClick="validateForm()"/>
                    </td>
                </tr>
            </table>
        </form>
    
    </div>
    
</body>
</html>
