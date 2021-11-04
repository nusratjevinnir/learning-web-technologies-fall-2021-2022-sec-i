<?php
function user_login_validate($user_name, $user_password){
    $fh = fopen('../Model/user.txt','r');
    while ($line = fgets($fh)) {
        $user = explode('|', $line);
        if(trim($user[0]) == $user_name && trim($user[1]) == $user_password){
            $user_data = array("user_name" => trim($user[0]), "user_password" => trim($user[1]), "user_type" => trim($user[2]));
            fclose($fh);
            return $user_data;
        }
    }
    fclose($fh);
    return null;
}

function add_user($user_name, $user_email, $user_password, $user_type, $user_img_url){
    $fh = fopen('../Model/user.txt','a');
    $user = "\n" .$user_name. '|' .$user_password. '|' .$user_type. '|' .$user_email. '|' .$user_img_url;
    $result = fwrite($fh, $user);
    fclose($fh);
    return $result;
}
