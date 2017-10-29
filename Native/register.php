<?php
if(isset ($_POST['btnreg'])){
	@include('config.php');
	$userreg = $_POST['userreg'];
	$passreg = $_POST['passreg'];

	$sql = "insert into account(
		username,passord)
		values('$userreg','$passreg')";


	if($con->query($sql))
		//echo "Database created successfully";successfully created I
		echo "Registered successfully";
	else
		die("Eror registration");

	$con->close();


}


?>
