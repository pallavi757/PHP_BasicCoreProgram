<?php
$num1 = 10;
$num2 = 15;
$num3 = 23;
if ($num1 > $num2 && $num1 > $num3) {
    echo $num1 . "is largest number";
} else {
    if ($num2 > $num1 && $num2 > $num3) {
        echo $num2 . "is largest number";
    } else
        echo $num3 . "is largest number";
}
