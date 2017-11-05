<?php
if(isset ($_POST['btnLogin'])){
	$user = $_POST['user'];
	$pass = $_POST['pass'];


	include 'config.php';

	$sql = "Select * from account where username ='$user' && passord = '$pass'";

	$result = $con->query($sql);
	if($result->num_rows > 0)
	{
		while($row = $result->fetch_array())
		{	
			echo "Welcome, $row[1] <br>
			Your password is $row[2]<br>
			You are a member since $row[3]";
		}
		?>
		<p>register a new account</p>
		    <form action = "register.php" method = "post">
			<input type = "text" name = "userreg" id = "userreg" placeholder = "Enter your username registration"/> <br />
			<input type = "password" name = "passreg" id = "passreg" placeholder = "Enter your password"/> <br />
			<input type = "submit" name = "btnreg" id = "btn" value ="reg"/>
			</form>

		<?php

	}else{
		echo " not log";
	}
	$con->close();
}
else
	header("location:login.php");

?>
