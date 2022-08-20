<?php
    function  get_arguments(...$word){
        $all=" ";
        foreach(func_get_args() as $arg):
            $all .= $arg ." " ;
        endforeach;
        return $all;
    }
    echo get_arguments("Hello", "Elzero", "Web", "School");
    echo "<br>";
    echo get_arguments("I", "Love", "PHP");
?>