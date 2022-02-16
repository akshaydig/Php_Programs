<?php 
$charater = readline("Enter the charater :- ");

if($charater == 'a' || $charater == 'e' || $charater == 'i' || $charater == 'o' || $charater == 'u' ||
   $charater == 'A' || $charater == 'E' || $charater == 'i' || $charater == 'O' || $charater == 'U')
    echo "$charater is vowel";
else
    echo "$charater is consonent";
?>