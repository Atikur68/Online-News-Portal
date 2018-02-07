<?php
	if(empty($_POST))
	{
		exit;
	}
	$msg=array();
	if(empty($_POST['nm'])|| empty($_POST['cnm'])|| empty($_POST['addr'])||
	empty($_POST['ph'])|| empty($_POST['email'])|| empty($_POST['profile']) ||empty($_POST['pwd']))
	{
		$msg[]="one of your field is empty";
	}

	if(strlen($_POST['pwd'])<6)
	{
		$msg[]="please enter atlist 6 digit password";
	}
	if(strlen($_POST['ph'])!=11)
	{
	
		$msg[]="please enter 11 digit number";

	}

	if(!empty($msg))
	{
		echo "<b> errors:</b><br>";
		foreach($msg as $k)
		{
			echo "<li>".$k;
		}
	}
	else
	{
		$link=mysqli_connect("localhost","root","","newsportal")or die("can not connect");
	
		
		$nm=$_POST['nm'];
		$cnm=$_POST['cnm'];
		$addr=$_POST['addr'];
		$ph=$_POST['ph'];
		$email=$_POST['email'];
		$profile=$_POST['profile'];
		$pwd=$_POST['pwd'];
		
		
		$q="insert into newswriter(er_fnm,er_pwd,er_company,er_add,er_ph,er_email,er_company_profile)
		   values ('$nm','$pwd','$cnm','$addr','$ph','$email','$profile')";
		   
		$res=$link->query($q)or die("wrong query")
		;
		header("location:newswriterregister.php");
	}
?>