<?php
$num = readline("Input number to find prime factors:");
if (is_numeric($num) && $num > 0) {
    for ($i = 2; $i * $i <= $num; $i++) {
        if ($num % $i == 0) {
            $factors = $num / $i;
            echo "Prime factors of given number are:" . $i . " " . $factors;
        }
    }
} else {
    echo "\n Not valid input";
}
