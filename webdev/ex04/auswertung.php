<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Auswertung</title>
    <link rel="stylesheet" href="res/css/stylesheet.css">
</head>
<body>

<?php
/**
 * Created by PhpStorm.
 * User: Manuel
 * Date: 14.03.2018
 * Time: 12:16
 */
function getval($name){
    if(isset($_GET[$name])){
        echo $_GET[$name];
    }else{
        echo "<span class='missing'>missing </span>";
    }
}
?>
<table>
    <tr>
        <td>Vorname:</td>
        <td><?php getval("vorname")?></td>
    </tr>
    <tr>
        <td>Nachname:</td>
        <td><?php getval("nachname")?></td>
    </tr>
    <tr>
        <td>E-Mail:</td>
        <td><?php getval("email")?></td>
    </tr>
    <tr>
        <td>SVN:</td>
        <td><?php getval("svn")?></td>
    </tr>
    <tr>
        <td>Geburtsdatum:</td>
        <td><?php getval("geb")?></td>
    </tr>
    <tr>
        <td>Geschlecht:</td>
        <td><?php getval("gender")?></td>
    </tr>
    <tr>
        <td><h3>Vitalparameter:</h3></td>
        <td></td>
    </tr>
    <tr>
        <td>Blutdruck Diastolisch:</td>
        <td><?php getval("diastolisch")?></td>
    </tr>
    <tr>
        <td>Blutdruck Systolisch:</td>
        <td><?php getval("systolisch")?></td>
    </tr>
    <tr>
        <td><label for="puls">Puls: </label></td>
        <td><?php getval("puls")?></td>
    </tr>
    <tr>
        <td>Anmerkungen:</td>
        <td><?php getval("anmerkung")?></td>
    </tr>

</table>
</body>
</html>

