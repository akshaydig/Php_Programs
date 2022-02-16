<?php 
$number1 = readline("enter the fist number :- ");
$number2 = readline("enter the second number :- ");
echo "Before swaping first number $number1 second number $number2\n";
$temp  = $number1;
$number1 = $number2;
$number2 = $temp;
echo "After swaping first number $number1 second number $number2\n";
?>