<?php 
    $employeearray = array  
        (  
            array(1,"Akshay",400000),  
            array(2,"Sandesh",500000),  
            array(3,"Kunal",300000)  
        );  
    
    for ($row = 0; $row < 3; $row++) {  

        for ($coloum = 0; $coloum < 3; $coloum++) {  

            echo $employeearray[$row][$coloum]."  ";  
        }  
        echo "\n";  
    }  
?>