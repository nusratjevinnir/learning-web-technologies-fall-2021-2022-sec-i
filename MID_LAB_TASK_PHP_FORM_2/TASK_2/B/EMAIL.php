<?php 

	
	if(isset($_REQUEST['submit'])){
		$email = $_REQUEST['myemail'];
		
	}

?>


<html>
<head>
	<title>EMAIL</title>
</head>
<body>
	<form method="post" >
		Usermail: <input type="email" name="myemail" value=""/>
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>