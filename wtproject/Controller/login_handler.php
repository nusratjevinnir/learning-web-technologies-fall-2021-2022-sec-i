<?php
include '../Model/user_data_access.php';
session_start();

function test_name($name){
    $name = trim($name);
    if(!ctype_alnum($name)) return false;
    return true;
}

$user_name = $password = "";
$remember = false;

$req_err = [];
$val_err = [];
$user_validation_error = [];

if((isset($_POST['submit']))){
    if(empty($_POST["user_name"])) array_push($req_err, "User name field cannot be empty.");
    else{
        if(test_name($_POST["user_name"])) $user_name = trim($_POST["user_name"]);
        else array_push($val_err, "Please enter a valid User name.");
    }
    if(empty($_POST["password"])) array_push($req_err, "Password field cannot be empty.");
    else{
        $password = trim($_POST["password"]);
    }
    if(isset($_POST["remember"])) $remember = true;

    if (empty($val_err) && empty($req_err)){
        $user = user_login_validate($user_name, $password);
        if($user == null) array_push($user_validation_error, "Login validation failed.");
        else{
            $_SESSION["valid"] = "yes";
            $_SESSION["user_name"] = $user['user_name'];
            $_SESSION["user_type"] = $user['user_type'];
            if($remember){
                setcookie ("user_name", $user['user_name'], time()+ (86400*30));
                setcookie ("password", $user['user_password'], time()+ (86400*30));
            }
            else{
                setcookie ("user_name", "");
                setcookie ("password", "");
            }
        }
    }
}



