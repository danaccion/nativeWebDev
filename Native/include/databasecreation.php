<?php include('../include/conQuery.php');
session_start();

function toCreateDbQuery($con)
{
	//database creation
	$sql = $_SESSION["action"]." ". $_SESSION["tbdbname"]; //name of database
	viaMessage($sql,$con);	
}

function toCreateTableQuery($con)
{
	//table creation
	foreach ($_SESSION['arr'] as $value) {

    if($_SESSION['tablename'] == $value){
	$sql = $_SESSION['action']." ". $_SESSION['tablename']."(
		id int(11) unsigned auto_increment primary key,
		username varchar(50) not null unique,passord varchar(50) not null,
		dateadded timestamp)";
		$bool =viaTableMessage($sql,$con);
	}
	else if($_SESSION['tablename1'] == $value){
	$con=viaAttempConMessageErrno();
	$sql = $_SESSION['action']." ". $_SESSION['tablename1']."(
		id int(11) unsigned auto_increment primary key,
		username varchar(50) not null unique,passord varchar(50) not null,
		dateadded timestamp)";
		$bool =viaTableMessage($sql,$con);
	}
	if($_SESSION['tablename2'] == $value){
	$con=viaAttempConMessageErrno();
	$sql = $_SESSION['action']." ". $_SESSION['tablename2']."(
		id int(11) unsigned auto_increment primary key,
		username varchar(50) not null unique,passord varchar(50) not null,
		dateadded timestamp)";
		$bool =viaTableMessage($sql,$con);

	}
	if($_SESSION['tablename3'] == $value){
	$con=viaAttempConMessageErrno();
	$sql = $_SESSION['action']." ". $_SESSION['tablename3']."(
		id int(11) unsigned auto_increment primary key,
		username varchar(50) not null unique,passord varchar(50) not null,
		dateadded timestamp)";
		$bool = viaTableMessage($sql,$con);
	}
	}
	if($bool)
	{
			echo $_SESSION["action"]." successfully";
	}
}

function toInserIntoTableQuery($con)
{

	//table insertion
	if($_SESSION['tablename']){
	$sql = $_SESSION['action']." ".$_SESSION['tablename']."(
		username,passord) VALUES ('dab','accion')";
	}

	
	else if($_SESSION['tablename1']){
	$sql = $_SESSION['action']." ".$_SESSION['tablename1']."(
		username,passord) VALUES ('dar','accion')";
	}

	else if($_SESSION['tablename2']){
	$sql = $_SESSION['action']." ".$_SESSION['tablename2']."(
		username,passord) VALUES ('dar','accion')";
	}

	else if($_SESSION['tablename3']){
	$sql = $_SESSION['action']." ".$_SESSION['tablename3']."(
		username,passord) VALUES ('dar','accion')";
	}
	if($con->query($sql))
			echo $_SESSION["action"]." successfully";
		else
			die("Eror Inserting into ".' '.$_SESSION['dbname']);

		$con->close();	

}

function toDropTableQuery($con)
{
	//drop table
	$sql = $_SESSION['action']." ".$_SESSION['todrop'];

		if($con->query($sql))
			echo $_SESSION["action"]." successfully";
		else
			die("Eror drop table");

		$con->close();	
}


?>
