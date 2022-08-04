<?php
    $a = "Elzero";
    $b = "Web";
    $c = "School";

    //Method one
    
    $d = "$a $b $c";
    echo $d;
    echo "<br>";
   

    //Method two
   
    $d ="{$a} {$b} {$c}";
    echo $d;
    echo "<br>";
    

    //Method Three
   
    $d =$a ." " .$b. " " .$c;
    echo $d;
    echo "<br>";
    
    //Method Four
    $d =" ";
    $d .= " {$a}";
    $d .= " {$b}";
    $d .= " {$c}";
    echo $d;


?>