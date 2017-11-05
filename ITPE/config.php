<!Doctype>
<html>

<head>

<title>create</title>
</head>

<body>
<?php
	$server = "localhost";
	$username = "root";
	$password = "";	
	$dbname = "porfoliodb";								//add when adding table
	$con = new mysqli($server, $username , $password,$dbname);

	if($con->connect_errno)
		die("Could not connect: ".$con->connect_error);

/*II
	//$sql = "CREATE DATABASE porfoliodb"; successfully created I
	$sql = "create table account(
		id int(11) unsigned auto_increment primary key,
		username varchar(50) not null unique,passord varchar(50) not null,
		dateadded timestamp)";
	if($con->query($sql))
		//echo "Database created successfully";successfully created I
		echo "table was created successfully";
	else
		die("error creating database");

	$con->close();
		*/
?>
</body>
</html>
