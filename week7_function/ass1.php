<?php
    function say_Hello($name,$gender ){
        if($gender == "Female"){
            echo "Hello Miss $name";
        }
        elseif($gender == "Male"){
            echo "Hello Mr $name";
        }
        else{
            echo "Hello $name";
        }
    }

    say_Hello("Osama", "Male"); 
    // say_Hello("Eman", "Female"); 
    // say_Hello("Sameh"); 
?>