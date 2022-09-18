<?php
    $message = "Hello";

    $$message =function ($message){
        return  $message;
    };
    echo "{$message} " ;

 
    
 echo $Hello("Osama"); 


?>