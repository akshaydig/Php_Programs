<?php
function checkLeapYear(){
$year = readline('Enter the year in four digit : ');

if($year > 999 && $year <= 9999) {     //condition for 4 digit number
    if($year % 4 == 0)                  // checking  leap year or not
        echo "$year :- Is leap year";
    else
        echo "$year :- Is not leap year";
}
else
    echo "Entered wrong input";
}
checkLeapYear();
?>