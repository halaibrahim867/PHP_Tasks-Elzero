<?php
    $a = "10"; 

    echo +$a;
    echo "<br>";
    echo gettype(+$a);
    echo "<br>";

    $b =(int) $a;
    echo  $b;
    echo "<br>";
    
    echo gettype($b);
    echo "<br>";

    $c =(integer) $a;
    echo $c;
    echo "<br>";
    echo gettype($c);
    echo "<br>";
    $d =intval ($a);
    echo $d;
    echo "<br>";
    echo gettype($d);

?>