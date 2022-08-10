<?php
    $mix = [1, 2, "A", "B", "C", 3, 4 ];

    $cnum=0;
    $cchar=0;
    for( $start =0; $start < count($mix); $start++ ){
        
        if(is_integer($mix[$start])){
            echo $mix[$start]. "<br>";
            $cnum++;
        }
        else{
            $cchar++;
        }
    }
    echo " $cnum Numbers Printed ";
    echo "<br>";
    echo "$cchar Letters Ignored";
    
?>