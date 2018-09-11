<?php
	require("dbcon.php");
	$obj = new DbCon();

	if(isset($_POST["sub_reg"]))
	{
		$email = $_POST["email"];
		$pass = $_POST["psw"];
		$cpass = $_POST["cpsw"];
		$address = $_POST["address"];
		$phno = $_POST["phno"];
		$aadhar = $_POST["aadhar"];

		if($pass == $cpass)
		{
			$obj->registeruser($email,$pass,$address,$phno);
		}
		else
		{
			echo 'Password Mismatch';
		}
	}
	else
	{
		header("location:../pages/register.html");
	}
?>