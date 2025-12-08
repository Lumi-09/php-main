<?php

function callcounter(){
    static $count=0;
    $count++;
    echo "The value of count variable is : $count <br>";
}
callcounter();
callcounter();
callcounter();


?>