#!/bin/python3

<?php

function randomPassword() {
    $num_length = '16';
    $list = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890+=-_)(*&^%$#@!~`|\}]{["\':;?/>.<, ';

    $pass = array(); //remember to declare $pass as an array
    $list_length = strlen($list) - 1; //put the length -1 in cache
    for ($i = 0; $i < $num_length; $i++) {
        $n = rand(0, $list_length);
        $pass[] = $list[$n];
    }
    return implode($pass); //turn the array into a string
    
} 
ECHO randomPassword();
    

?>

