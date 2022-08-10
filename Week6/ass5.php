<?php
    $start = 0;
    $mix = [1, 2, 3, "A", "B", "C", 4];


    for(; $start < count($mix); $start++ ){
        if($start == 0){
            continue;
        }
        else{
            if(is_integer($mix[$start])){
                echo $mix[$start]. "<br>";
            }
        }
    }

?>