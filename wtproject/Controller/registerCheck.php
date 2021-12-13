<?php
require_once('../Model/userModel.php');

$username 	        = $_REQUEST['username'];
$mail 		        = $_REQUEST['mail'];
$pass 	        	= $_REQUEST['pass'];
$confirmpass	 	= $_REQUEST['confirmpass'];

$flagUsername = true;
$flagPass = true;

//////////// username validation


if (strlen($username) < 2) {
	echo "User Name must contain at least two (2) characters!\n";
	$flagUsername = false;
}


for ($itr = 0; $itr < strlen($username); $itr++) {
	if (($username[$itr] >= 'A' && $username[$itr] <= 'Z')
		|| ($username[$itr] >= 'a' && $username[$itr] <= 'z')
		|| ($username[$itr] >= 0 && $username[$itr] <= 9)
		|| ($username[$itr] === '.')
		|| ($username[$itr] === '-')
		|| ($username[$itr] === '_')
	) {
		$flagUsername = true;
		continue;
	} else {
		echo "User Name can contain alpha numeric characters, period, dash or underscore only!\n";
		$flagUsername = false;
		break;
	}
}



// Password Validation
if ($pass == $confirmpass) {

	if (strlen($pass) < 2 || strlen($pass) > 5) {
		echo "Password must not be less than two or greater than five characters!\n";
		$flagPass = false;
	}
} else {
	echo "Passwords do not match, try again!\n";
}

if ($flagUsername == true && $flagPass == true) {

	// Storing the valid data into db				
	$flagUsernameAvailable = validateUsername($username);

	if ($flagUsernameAvailable != true) {
		$user = [
			'username' 		=> $username,
			'mail'	 		=> $mail,
			'pass'			=> $pass,
		];

		$status = insertUser($user);

		if ($status) {
			header('location: ../View/login.php');
		} else {
			echo "Database Error! Try again.";
		}
	} else {
		echo "username already available, please try something else...";
	}
}