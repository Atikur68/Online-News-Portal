<?php session_start();
	if(empty($_GET))
	{
		header("location:index.php");
	
	}
	$link=mysql_connect("localhost","root","")or die("can not connect");
	mysql_select_db("newsportal",$link) or die("can not select database");
	$q="insert into applicants (a_uid,a_nid)values(".$_SESSION['eeid'].",".$_GET['nid'].")";

	mysql_query($q,$link) or die("wrong query");
	header("location:index.php");
	
?>