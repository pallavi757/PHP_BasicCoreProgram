<?php
//$num=0;
$num=readline("Enter a limit:");
$sum=0;
for($i=1;$i<=$num;$i++)
{
    $sum = $sum + (1/$i);

}
echo"Harmonic sum is:".round($sum,2);
?>

