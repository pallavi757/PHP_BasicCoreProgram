
<?php
$letter = readLine("Enter a character:");

if (preg_match("/^[a-zA-Z]{1}$/", $letter)) {
    $char = strtolower($letter);
    if ($char == 'a' || $char == 'e' || $char == 'i' || $char == 'o' || $char == 'u') {
        echo $letter . " is a Vowel";
    } else {
        echo $letter . " is a Consonant";
    }
} else {
    echo "Enter valid input";
}
?>