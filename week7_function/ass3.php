<?php
    function sum_all(...$nums){
        $result=0;
        foreach (func_get_args() as $num ){
            if($num == 5){
                continue;
            }
            elseif($num == 10){
                $num =20;
                
            }
        $result += $num;
       
        }
        return $result;
    }
    echo sum_all(10, 12, 5, 6, 6, 10); // 20+12 +6 +6 +20
    echo "<br>";
    echo sum_all(5, 10, 5, 10);
?>