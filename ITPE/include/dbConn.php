<?php include('../include/databasecreation.php');

function viacConn(){


	$con = new mysqli($_SESSION['server'], $_SESSION['username'],$_SESSION['password']);

	if($con->connect_errno)
		die("Could not connect: ".$con->connect_error);
	toCreateDbQuery($con);
}

function viacdConn(){

	$con = viaAttempConMessageErrno();
	
	if($_SESSION['action'] == 'Create table'){

		toCreateTableQuery($con);
	}
	else if($_SESSION['action'] == 'Drop table'){

		toDropTableQuery($con);
	}
	else if($_SESSION['action'] == 'Drop database'){

		toDropTableQuery($con);
	}
	else if($_SESSION['action'] == 'Insert into'){

		toInserIntoTableQuery($con);
				toInserIntoStoredProc($con);
	}
	else if($_SESSION['action'] == 'Update'){

		toUpdateQuery($con);
	}

}
?>



