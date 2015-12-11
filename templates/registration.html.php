
        <form action="createuser.php" method="post" name="formRegistration">
                  <h3> Registration </h3>
            <table align="center" id="rcorners">
                <tr>
                    <td>Benutzername:</td>
                    <td><input type="text" name="txtUser" id="txtuser" required/></td>
                </tr>
                <tr>
                    <td>Passwort:</td>
                    <td><input type="password" name="txtPassword" id="txtPassword" required/></td>
                </tr>
                <tr>
                    <td>Name:</td>
                    <td><input type="text" name="txtNachname" id="name" required/></td>
                </tr>
                <tr>
                    <td>Vorname:</td>
                    <td><input type="text" name="txtVorname" id="firstname" required/></td>
                </tr>
                <tr>
                    <td>Strasse:</td>
                    <td><input type="text" name="txtStrasse" id="street"/></td>
                </tr>
                <tr>
                    <td>PLZ Ort:</td>
                    <td><input type="text" name="txtPLZOrt" id="zipPlace" required/></td>
                </tr>
                <tr>
                    <td colspan="2">&nbsp;</td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                    	<input type="reset" value="Reset"/>
                    	<input id="submit" type="submit" value="Registrieren" onClick="validateForm()"
                        />

                        <br><br><a href="login.php">Anmelden</a>
                    </td>
                </tr>
            </table>
        </form>
    
    </div>
    
</body>
</html>