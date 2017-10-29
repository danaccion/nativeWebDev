<?php include('../include/dbConn.php');

    
function toInit(){
	//CRUD command
	$server='localhost';
	$username='root';
	$password='';
	$action='Drop database';
	$dbname= 'itpe';
	if($action == 'Create database')
	{
		viaCreateDb($server,$username,$password,$action);

	}
	else
	{
		viaQuery($server,$username,$password,$action,$dbname);

	}
}

function viaCreateDb($server,$username,$password,$action){
	//database creation
	$_SESSION['server']=$server;
	$_SESSION['username']=$username;
	$_SESSION['password']=$password;
	$_SESSION['action']=$action;

	viacConn();

}

function viaUseTableNames()
{	
	//table name
	$_SESSION['arr'] = array($_SESSION['tablename'] ='account', 
	$_SESSION['tablename1'] ='account1',
	$_SESSION['tablename2'] ='account2',
    $_SESSION['tablename3'] ='account3');
}

function viaQuery($server,$username,$password,$action,$dbname){
	//insert , table creation, drop
	$_SESSION['server']=$server;
	$_SESSION['username']=$username;
	$_SESSION['password']=$password;
	$_SESSION['action']=$action;
	$_SESSION['dbname']= $dbname;
	$_SESSION['todrop']= 'itpe';//plz be sure either table or database
	viaUseTableNames();
	viacdConn();
}

?>
