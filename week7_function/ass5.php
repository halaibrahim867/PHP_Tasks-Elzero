<?php
    function check_status($a, $b, $c) {
       $name="";
       $age="";
       $state="";
        foreach(func_get_args() as $arg){
            if(is_string($arg)){
                $name =  " Hello " .$arg  . ",";
            }
            elseif(is_numeric($arg)){
                $age = " Your Age Is " . $arg . ",";
            }
           elseif(is_bool($arg)){
                $state =  ($arg == true) ? " You Are Available For Hire " :" You Are Not Available For Hire ";
            }        
        }
        return $name . $age . $state;
    }

    echo check_status("Osama", 38, true);
    echo "<br>";
    echo check_status(38, "Osama", true);
    echo "<br>";
    echo check_status(true, 38, "Osama");
    echo "<br>";
    echo check_status(false, "Osama", 38); 

?>