<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Formular</title>
</head>
<body>

<?php
/**
 * Created by PhpStorm.
 * User: Manuel
 * Date: 14.03.2018
 * Time: 12:16
 */
?>
<form name="formular" action="auswertung.php" method="get">
    <h1>Patientenverwaltung</h1>

    Willkommen im BSA-KIS (BSA Krankenhausinformationssystem)!

    <h2>Neuen Patienten anlegen </h2>
    <table>
        <tr>
            <td><label for="vorname">Vorname:</label></td>
            <td><input type="text" name="vorname" id="vorname" placeholder="Vorname">*</td>
        </tr>
        <tr>
            <td><label for="nachname">Nachname:</label></td>
            <td><input type="text" name ="nachname" id="nachname" placeholder="Nachname">*</td>
        </tr>
        <tr>
            <td><label for="email">E-Mail:</label></td>
            <td><input type="email" name ="email" id="email" placeholder="test@me.at" >*</td>
        </tr>
        <tr>
            <td><label for="svn">SVN:</label></td>
            <td><input type="number" name="svn" id="svn" max="9999" placeholder="1234" >*</td>
        </tr>
        <tr>
            <td><label for="geb">Geburtsdatum:</label></td>
            <td><input type="date" id="geb" name="bday"></td>
        </tr>
        <tr>
            <td><label for="gender">Geschlecht:</label></td>
            <td><input type="radio" id="gender" name="gender" value="male"> Männlich
                <input type="radio"  name="gender" value="female"> Weiblich
                <input type="radio"  name="gender" value="other" checked> keine Angabe</td>
        </tr>
        <tr>
            <td><h3>Vitalparameter:</h3></td>
            <td></td>
        </tr>
        <tr>
            <td><label for="diastolisch">Blutdruck Diastolisch: </label></td>
            <td><input type="number" name="diastolisch" id="diastolisch" max="999"></td>
        </tr>
        <tr>
            <td><label for="systolisch">Blutdruck Systolisch: </label></td>
            <td><input type="number" name="systolisch" id="systolisch" max="999"></td>
        </tr>
        <tr>
            <td><label for="puls">Puls: </label></td>
            <td><input type="number" name="puls" id="puls" max="999"></td>
        </tr>
        <tr>
            <td><label for="anmerkung">Anmerkungen:</label></td>
            <td><textarea rows="5" cols="50" name="anmerkung" id="anmerkung" placeholder="Platz für Anmerkungen..."></textarea></td>
        </tr>
        <tr>
            <td><input type="reset"></td>
            <td><input type="submit"></td>
        </tr>
    </table>

</form>
</body>
</html>

