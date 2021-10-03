<?php 

	
	if(isset($_REQUEST['submit'])){
		$email = $_REQUEST['myemail'];
		if($email != ""){
			echo $email;
		}else{
			echo "Null value...";
		}
	}

?>


<html>
<head>
	<title>EMAIL</title>
</head>
<body>
	<form method="post" >
		Usermail: <input type="text" email="myemail" value=""/>
		<input type="submit" email="submit" value="Submit">
	</form>
</body>
</html>