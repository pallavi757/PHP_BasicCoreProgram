<?php
$num = readline("Enter a number:");
if (preg_match('/^[0-9]*$/', $num)) {
    echo "User enterd number is:$num\n";
    if ($num % 2 == 0)
        echo "Number is even";
    else
        echo "Number is odd";
} else {
    echo "enter valid number";
}
