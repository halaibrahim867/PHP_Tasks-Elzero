<?php
    function multiply(...$nums){
        $result=1;
        foreach(func_get_args() as $num){
            if(is_string($num)){
                continue;
            }
            elseif(is_float($num)){
                $num = (int)$num;
            }
            $result *= $num;
        }
        return $result;
    }
    echo multiply(10, 20);
    echo "<br>";
    echo multiply("A", 10, 30); ;
    echo "<br>";
    echo multiply(100.5, 10, "B"); 
?>