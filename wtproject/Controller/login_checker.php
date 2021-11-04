<?php
if(isset($_SESSION['user_type']) && isset($_SESSION['user_name'])){
    if($_SESSION['user_type'] == 'customer') header("location: customer_dash.php");
}

if(isset($_COOKIE['user_name']) && isset($_COOKIE['password'])){
    $user_name_cookie = $_COOKIE['user_name'];
    $user_password_cookie = $_COOKIE['password'];
}
else{
    $user_name_cookie = '';
    $user_password_cookie = '';
}

