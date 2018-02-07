<?php session_start();

	if(empty($_POST))
	{
		exit;
	}
	$msg=array();
	if(empty($_POST['title'])|| empty($_POST['cat'])|| empty($_POST['disc'])|| empty($_POST['city']))
	{
		$msg[]="one of your field is empty";
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
		$link=mysql_connect("localhost","root","","newsportal")or die("can not connect");
		
		
		$title=$_POST['title'];
		$cat=$_POST['cat'];
		$disc=$_POST['disc'];
		$city=$_POST['city'];
		
		$q="insert into news(n_title,n_owner_name,n_category,n_discription,n_city)
		   values ('$title','".$_SESSION['unm']."','$cat','$disc','$city')";
		   
		$mysqli = new mysqli("localhost","root","","newsportal");
		   
		$rest=$mysqli->query($q)or die("wrong query");
		
		#$rest = mysqli_query($link,$q,MYSQLI_USE_RESULT) or die ("wrong query");
		
		header("location:postnews.php");
	}
	
?>