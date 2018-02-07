<?php
	if(empty($_GET))
	{
		header("location:index.php");
	}
	
		$link=mysql_connect("localhost","root","","newsportal")or die("can not connect");
		
		
		$q="delete from news where id=".$_GET['id'];
		
		$mysqli = new mysqli("localhost","root","","newsportal");
		
		$res=$mysqli->query($q);
		
		header("location:news_details.php");	
?>