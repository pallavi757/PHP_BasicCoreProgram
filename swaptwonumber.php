<?php  //Swap two numbers without using third variable
$num1 = 15;
$num2 = 30;
echo"Before swapping numbers are:$num1,$num2\n";
//using arithmetic operation 
$num1=$num1+$num2;
$num2=$num1-$num2;
$num1=$num1-$num2;
echo"After swapping numbers are:$num1,$num2\n";
?>