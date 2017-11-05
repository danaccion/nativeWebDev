<?php include('../include/conQuery.php');
session_start();

function toCreateDbQuery($con)
{
	//database creation
	$sql = $_SESSION["action"]." ". $_SESSION["dbname"]; //name of database
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
			return false;
			die("Eror Inserting into ".' '.$_SESSION['dbname']);

		$con->close();	

}

function toInserIntoStoredProc($con)
{
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	//table insertion
	if($_SESSION['insertintoAccounting']){
	$sql = "CALL insertintoAccounting(".$_REQUEST['accounting_date'].")";
	}

	
	else if($_SESSION['insertintoCashier']){
	$sql = "CALL insertintoCashier(".$_REQUEST['cashier_date'].")";

	}

	else if($_SESSION['insertintoCost']){
	$sql = "CALL insertintoCost(".$_REQUEST['po_number'].",".$_REQUEST['total_actual_cost'].")";

	}

	else if($_SESSION['insertintoDelivery']){
	$sql = "CALL insertintoDelivery(".$_REQUEST['notice_to_proceed'].",".$_REQUEST['delivery_completion'].",".$_REQUEST['ci_no'].",".$_REQUEST['number_of_days_po_to_delivery'].",".
		$_REQUEST['number_of_days_delivery_to_cashier'].")";

	}

	else if($_SESSION['insertintoParticulars']){
	$sql = "CALL insertintoParticulars(".$_REQUEST['pr_number'].",".$_REQUEST['pr_date'].",".$_REQUEST[' request_date'].",".$_REQUEST['date_required'] .",".$_REQUEST['particulars_details'].")";

	}
	else if($_SESSION['insertintoSuppliers']){
	$sql = "CALL insertintoSupplier(".$_REQUEST['supplier_name'].")";

	}
	}

	if($con->query($sql))
			echo $_SESSION["action"]." successfully";
		else
			die("Eror Inserting into ".' '.$_SESSION['dbname']);

		$con->close();	

}

function toUpdateQuery($con)
{
	$sql = "UPDATE 
	SET username='Alfred Schmidt'
	WHERE id =''";
	viaMessageUpdate($sql,$con);
}

function toDeleteQuery($con)
{
	$sql = "DELETE FROM supplier
    WHERE supplier_name = 'sd';";
	viaMessageUpdate($sql,$con);
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
