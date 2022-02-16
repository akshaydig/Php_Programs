<?php
$coinFlipLimit = readline("Enter the number :- ");
$head = 0;
$tail = 0;
$counter = 0;

while($counter != $coinFlipLimit){
    $randomNumber = rand(0,1);
    if($randomNumber == 1)
        $head++;
    else
        $tail++;
    $counter++;
}
$percentageOfHead = $head/$coinFlipLimit *100;
$percentageOfTail = 100 - $percentageOfHead;
echo "percentage of head outcome $percentageOfHead\n","percentage of tail outcome $percentageOfTail\n";
?>
