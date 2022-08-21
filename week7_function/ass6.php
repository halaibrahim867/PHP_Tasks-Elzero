<?php

    function Calculate($num1 , $num2 , $cal= "add"){
        if($cal == "add" || $cal == "a"){
            return $num1 + $num2;
        }
        elseif($cal=="subtract" || $cal =="s") {
            return $num1 - $num2;
        }
        elseif($cal =="multiply" || $cal =="m"){
            return $num1 * $num2;
        }
        else{
            return "This Calculation Is Wrong";
        }
    }

    echo Calculate(10, 20); // 30
    echo "<br>";
    echo Calculate(10, 20, "a"); // 30
    echo "<br>";
    echo Calculate(10, 20, "s"); // -10
    echo "<br>";
    echo Calculate(10, 20, "subtract"); // -10
    echo "<br>";
    echo Calculate(10, 20, "multiply"); // 200
    echo "<br>";
    echo Calculate(10, 20, "m"); // 200
    echo "<br>";
    echo Calculate(10, 20, "d"); // 200

?>