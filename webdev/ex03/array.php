<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Arrays</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <style type="text/css">
        .highlight {

            background-color: lightcoral;
        }
    </style>

</head>
<body>


<?php

$week = array("Montag", "Dienstag", "Mittwoch", "Donnerstag", "Freitag", "Samstag", "Sonntag");

$week_random = array_rand($week, 1);



echo "<nav class='navbar navbar-fixed-top'>";
echo "<div class='container'>";
echo "<ul class= 'nav nav-pills navbar-right'>";

for ($i= 0; $i <=6 ; $i++) {


    if($week[$week_random] == $week[$i]) {

        echo "<li class='highlight' role='presentation'><a href='#'>". $week[$i] . "</a></li>";
    } else {
        echo "<li role='presentation'><a href='#'>". $week[$i] . "</a></li>";

    }


}


echo "</ul>";
echo "</div>";
echo "</nav>";



?>



<header>
</header>

<main>

        <?php
        echo $week[$week_random];
        ?>


</main>

<footer></footer>





</body>
</html>
