<?php

require_once('../Model/userModel.php');

if (isset($_POST['submit'])) {

	$username 	= $_POST['username'];
	$pass	 	= $_POST['pass'];

	$row = getUserByName($username);

	if ($username == "" || $pass == "") {
		echo "Please fill up all fields!";
	} else {

		// validating user			
		$status = validateUser($username, $pass);

		if ($status) {
			setcookie('status', 'true', time() + (3600 * 24 * 365), '/');
			setcookie('username', $username, time() + (3600 * 24 * 365), '/');
			setcookie('pass', $pass, time() + (3600 * 24 * 365), '/');
			//setcookie('id', $itr, time()+(3600 * 24 * 365), '/');
			header('location: ../View/customer_dash.php');
		} else {
			echo "Wrong Credentials...";
		}
	}
}