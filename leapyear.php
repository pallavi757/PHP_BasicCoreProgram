<?php
$year = readLine("Enter a year:");
if (preg_match("/^([0-9]{4})$/", $year)) {
    if (($year % 4 == 0) && ($year % 100 != 0) ||  ($year % 400 == 0))
        echo $year . " is a Leap Year";
    else
        echo $year . " is not a Leap Year";
} else {
    echo "Enter valid year";
}
