<?php 
	session_start();

	if(isset($_POST['submit'])){

		$username 	= $_POST['username'];
		$password 	= $_POST['password'];

		if($username != ""){
			if($password != ""){
				
				$myfile = fopen('user.txt', 'r');
				$data = fread($myfile, filesize('user.txt'));
				//fgets($myfile);
				//feof($myfile);
				//while
				
				$user = explode('|', $data);		
				if($username == trim($user[0]) && $password == trim($user[1])){
						//$_SESSION['flag'] = 'true';
					setcookie('flag', 'true', time()+3600, '/');
						header('location: home.php');
				}else{
					echo "invalid username/password";
				}	

			}else{
				echo "invalid password....";
			}
		}else{
			echo "invalid username....";
		}
	}
?>