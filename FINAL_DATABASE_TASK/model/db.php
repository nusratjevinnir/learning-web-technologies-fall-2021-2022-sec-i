
<?php 

	$host = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "webtech";


	function getConnection(){
		global $host;
		global $dbname;
		global $dbpass;
		global $dbuser;

		$con = mysqli_connect($host, $dbuser, $dbpass, $dbname);
		return $con;
	}


$sql = "CREATE DATABASE Wwebtech";	
mysql_query($con, $sql);

if (!$con) {
	die("failed to connect:");
	else {
		echo "connection successful";
	}
}



?>