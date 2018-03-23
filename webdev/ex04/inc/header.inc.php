
<h1> Smart Home Controller App v.1.0 </h1>

<form name="login" id="login" action="" method="POST">

    Username: <input type="text" name="username" id="username">
    Password: <input type="password" name="password" id="password">

    <input type="submit" name="SubmitButton">

</form>

<?php

$username = "admin";
$password = "passw0rd";
$cookiename = "login";


if(isset($_POST['SubmitButton'])) {

    $username_input = $_POST['username'];
    $password_input = $_POST['password'];




    CheckLogin($username, $password, $username_input, $password_input);

}



function CheckLogin($username, $password, $username_input, $password_input) {

    if(empty($_POST['username'])) {
        die("<div id='username_empty'><p>Username ist leer!</div></p>");
        return false;
    }

    if(empty($_POST['password'])) {
        die("<div id='password_empty'><p>Passwort ist leer!</div></p>");
        return false;
    }

    if($username_input == $username AND $password_input == $password) {

        echo "<div id='login_successfully'><p> Sie sind eingeloggt als  " .$username. "</p></div>";
        echo "<script> document.getElementById('login').style.display = 'none'; </script>";

        return true;
    } else {

        echo "<div id='login_failure'><p> Fehler beim Login! Username oder Passwort falsch! Bitte versuchen Sie es erneut</p></div>";
        return false;
    }
}

?>


