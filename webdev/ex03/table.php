<!DOCTYPE html>
<html>
<head>
    <title>Table - Schleifen - PHP</title>

    <style type="text/css">

        table {
            width: 50%;
            text-align: center;

        }
        tr {

            height: 50px;
        }
        .odd {

            background-color: #4b88ea;
        }


    </style>
</head>
<body>

<?php
//For-Loop
$number = 1;
echo "<h1>For-Loop Table</h1>";
echo "<table border='1'>";

for ($row = 0; $row < 3; $row ++) {
    echo "<tr>";

    for ($col = 0; $col < 5; $col ++) {
        if($number % 2 == 0) {
            echo "<td class='even'>" .$number. "</td>";
        } else {
            echo "<td class='odd'>" .$number. "</td>";
        }
        $number++;
    }

    echo "</tr>";
}

echo "</table>";


//While-Loop
$number_while = 1;
$number_while_cols = 1;
$number_while_rows = 1;
echo "<h1>While-Loop Table</h1>";
echo "<table border='1'>";
while ($number_while_rows <=3) {
    echo "<tr>";

    while ($number_while_cols <=5) {

        if ($number_while % 2 == 0) {
            echo "<td class='even'>" .$number_while. "</td>";
        } else {
            echo "<td class='odd'>" .$number_while. "</td>";
        }
        $number_while++;
        $number_while_cols++;
    }
    echo "</tr>";
    $number_while_cols = 1;
    $number_while_rows++;

}

echo "</table>";

//DO-Loop
$number_do = 1;
$number_do_rows = 1;
$number_do_cols = 1;

echo "<h1>DO-Loop</h1>";
echo "<table border='1'>";
do {
    echo "<tr>";

    do {

        if ($number_do % 2 == 0) {
            echo "<td class='even'>" .$number_do. "</td>";
        } else {
            echo "<td class='odd'>" .$number_do. "</td>";
        }
        $number_do++;
        $number_do_cols++;

    } while ($number_do_cols <=5);

    echo "</tr>";
    $number_do_rows++;
    $number_do_cols = 1;
} while ($number_do_rows <= 3);

echo "</table";
?>




</body>
</html>