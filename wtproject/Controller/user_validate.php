<?php

//function to check username
function test_name($name){
    $name = trim($name);
    if(!ctype_alnum($name)) return false;
    return true;
}

//function to check email
function test_mail($mail){
    $mail = trim($mail);
    $chars = str_split($mail);
    foreach ($chars as $char){
        if($char == '@') return true;
    }
    return false;
}

//function to check password
function test_pass($pass){
    if(strlen($pass) < 5) return false;
    return true;
}

//function to check password
function test_pass_match($pass, $confirm_pass){
    if($pass != $confirm_pass) return false;
    return true;
}
