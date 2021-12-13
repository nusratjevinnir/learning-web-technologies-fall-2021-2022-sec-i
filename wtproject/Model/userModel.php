


<?php
	
	require_once('db.php');

	function validateUser($username, $pass){
		$conn = getConnection();
		$sql = "select * from user where username='{$username}' and pass='{$pass}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);


		if(empty($row)){
			return false;
		}else{
			return true;
		}
	}

    function validateUsername($username){
		$conn = getConnection();
		$sql = "select * from user where username='{$username}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		if(empty($row)){
			return false;
		}else{
			return true;
		}
	}

	function insertUser($user){
		$conn = getConnection();
		$sql = "insert into user (username, mail, pass)
        values('{$user['username']}', '{$user['mail']}', '{$user['pass']}')";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

    function getUserByName($username){
		$conn = getConnection();
		$sql = "select * from user where username='{$username}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		return $row;
	}

	function getAllUser(){
		$conn = getConnection();
		$sql = "select * from user";
		$result = mysqli_query($conn, $sql);
		$user = [];

		while ($row = mysqli_fetch_assoc($result)) {
			array_push($user, $row);
		}

		return $user;
	}

	function updatePassword($newPass){
		$conn = getConnection();
		$sql = "UPDATE user SET password='$newPass' WHERE username='{$_COOKIE['username']}'";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function deleteUser($username){
		$conn = getConnection();
		$sql = "delete from user where username='{$username}'";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

?>