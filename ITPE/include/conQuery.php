<?php

function viaMessage($sql,$con)
{
	if($con->query($sql))
			echo $_SESSION["action"]." successfully";
		else
			die("Error creating database".' '.$_SESSION['dbname']);
		$con->close();	
}

function viaMessageUpdate($sql,$con)
{
	if($con->query($sql))
			echo "Update".$_SESSION["action"]." successfully";
		else
			die("Error creating database".' '.$_SESSION['dbname']);
		$con->close();	
}

function viaAttempConMessageErrno(){
	
	$con = new mysqli($_SESSION['server'], $_SESSION['username'],$_SESSION['password'],$_SESSION['dbname']);

	if($con->connect_errno){

		die("Could not connect: ".$con->connect_error);
	}
	return $con;
}


function viaTableMessage($sql,$con)
{
	if($con->query($sql)){
		return true;
		}
		else{
			die("Eror creating table ".$_SESSION['dbname']);
		}
		$con->close();	
}
?>