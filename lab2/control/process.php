<?php

$number1=$_POST["number1"];
$number2=$_POST["number2"];
$Operation=$_POST["Operation"];
$number1=(float)$number1;
$number2=(float)$number2;

if ($Operation=="add")
{
    echo "Your 1st number is ".$number1." and your 2nd number is ".$number2." and sum is ".$number1+$number2;
}
if ($Operation=="substraction")
{
    echo "Your 1st number is " .$number1." and your 2nd number is ".$number2." and substraction is ".$number1-$number2;
}
if ($Operation=="multiplication")
{
    echo "Your 1st number is ".$number1." and your 2nd number is ".$number2." and multiplication is ".$number1*$number2;
}
if ($Operation=="division")
{
    echo "your 1st number is ".$number1." and your 2nd number is ".$number2." and division is ".$number1/$number2;
}

?>