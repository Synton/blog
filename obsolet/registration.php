<?php
include("core/user.php");
$user = new User();
$user->setUsername($_POST["txtMail"]);
$user->setPassword($_POST["txtPasswort"]);
$user->setFirstname($_POST["txtVorname"]);
$user->setLastname($_POST["txtName"]);
$user->setStreet($_POST["txtStrasse"]);
$user->setCity($_POST["txtPLZOrt"]);

$ser_user = serialize($user);
$user_data = 'data/user.txt';
$userFile = fopen($user_data, "a+") or die("save: unable to open File");

// in die geöffnete Datei schreiben
fwrite($userFile, $ser_user . "\r\n") or die("save: unable to write file");

// die geöffnete Datei schliessen. Schreibt den Buffer in die Datei
fclose($userFile) or die("save: error closing file " . $user_data);

$userFile = fopen($user_data, "r");

$user_arr = array();


while(!feof($userFile)){
    $line = fgets($userFile);
    # do same stuff with the $line

    $user_obj = unserialize($line);
    if ($user_obj){ 
        $user_arr[] = $user_obj;
    }
}
echo "<table>";
echo "<thead><tr>";
echo "<td>Username</td><td>Password</td><td>Firstname</td><td>Lastname</td><td>Street</td><td>City</td>";
echo "</tr></thead>";
echo "<tbody>";

foreach ($user_arr as $object) {
    echo "<tr>";
    echo "<td>" . $object->getUsername() . "</td>";
    echo "<td>" . $object->getPassword() . "</td>";
    echo "<td>" . $object->getFirstname() . "</td>";
    echo "<td>" . $object->getLastname() . "</td>";
    echo "<td>" . $object->getStreet() . "</td>";
    echo "<td>" . $object->getCity() . "</td>";
    echo "</tr>";
}
echo "</tbody>";

fclose($userFile);
?>