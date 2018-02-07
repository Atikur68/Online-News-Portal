<?php 
session_start();
?>
	<?php
	
	if(empty($_POST))
	{
		exit;
	}
	$msg=array();
	if(empty($_POST['nm'])|| empty($_POST['gender'])|| empty($_POST['email'])|| empty($_POST['addr'])||
	empty($_POST['mobile'])|| empty($_POST['cl'])||
	empty($_POST['jsector'])||empty($_POST['pwd'] ))
	{
		$msg[]="one of your field is empty";
	}
	if(strlen($_POST['pwd'])<6)
	{
		$msg[]="please enter atlist 6 digit password";
	}

	if(strlen($_POST['mobile'])!=11)
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
		$gender=$_POST['gender'];
		$email=$_POST['email'];
		$addr=$_POST['addr'];
		$mobile=$_POST['mobile'];
		$cl=$_POST['cl'];
		$jsector=$_POST['jsector'];
		$pwd=$_POST['pwd'];
		$_SESSION['email'] = $email;
		echo $email;
		$q="insert into user(ee_pwd,ee_fnm,ee_gender,ee_email,ee_add,ee_mobileno,
		     ee_current_location,ee_job_sector)
	    values ('$pwd','$nm','$gender','$email','$addr','$mobile','$cl','$jsector')";
		
		$mysqli = new mysqli("localhost","root","","newsportal");
		   
		$res=$mysqli->query($q)or die("wrong query");
		mysqli_close($link);
		//header("location:userregister.php");
	}
?>