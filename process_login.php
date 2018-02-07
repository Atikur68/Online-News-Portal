<?php session_start();
if(empty($_POST))
{
	exit;
}

if(empty($_POST['unm'])||empty($_POST['pwd'])||empty($_POST['cat']))
{
	echo "You must enter all fields";
}
if($_POST['cat']=='user')
{


	$link = mysqli_connect("localhost","root","","newsportal") or die("Cannot Connect");
	$_SESSION['unm']=$_POST['unm'];
	
	$q = "select * from user where ee_fnm = '".$_POST['unm']."'";
	
	$res = $link->query($q) or die("wrong query");
	
	 $row=$res->fetch_assoc();
	
	
	if(!empty($row))
	{
		if($_POST['pwd']==$row['ee_pwd'])
		{
			//login
			$_SESSION = array();
			
			$_SESSION['unm']=$row['ee_fnm'];
			$_SESSION['eeid']=$row['ee_id'];
			$_SESSION['cat']='user';
			$_SESSION['status']=1;
			$_SESSION['user']=1;
			
			header("location:index.php");
		}
		else
		{
			echo "Wrong Password";
		}
	}
	else
	{
		echo "No Such User";
	}
	
}	
	
if($_POST['cat']=='newswriter')
{

$_SESSION['unm']=$_POST['unm'];
$rrr=$_SESSION['name'];
echo $rrr;
	$link = mysql_connect("localhost","root","") or die("Cannot Connect");
	mysql_select_db("newsportal",$link) or die("Cant select db");
	
	$q = "select * from newswriter where er_fnm = '".$_POST['unm']."'";
	
	$res = mysql_query($q,$link) or die("wrong query");
	
	$row = mysql_fetch_assoc($res);
	
	
	if(!empty($row))
	{
		if($_POST['pwd']==$row['er_pwd'])
		{
			//login
			$_SESSION = array();
			
			$_SESSION['unm']=$row['er_fnm'];
			$_SESSION['eid']=$row['er_id'];
			$_SESSION['cat']='newswriter';
			$_SESSION['status']=1;
			$_SESSION['newswriter']=1;
			header("location:index.php");
		}
		else
		{
			echo "Wrong Password .";
		}
	}
	else
	{
		echo "No Such User";
	}
	
	
}

if($_POST['cat']=='admin')
{

$_SESSION['unm']=$_POST['unm'];
	$link = mysql_connect("localhost","root","") or die("Cannot Connect");
	mysql_select_db("newsportal",$link) or die("Cant select db");
	
	$q = "select * from newswriter where er_fnm = '".$_POST['unm']."'";
	
	$res = mysql_query($q,$link) or die("wrong query");
	
	$row = mysql_fetch_assoc($res);
	
	
	if(!empty($row))
	{
		if($_POST['pwd']==$row['er_pwd'])
		{
			//login
			$_SESSION = array();
			
			$_SESSION['unm']=$row['er_fnm'];
			$_SESSION['eid']=$row['er_id'];
			$_SESSION['cat']='newswriter';
			$_SESSION['status']=1;
			$_SESSION['newswriter']=1;
			header("location:index.php");
		}
		else
		{
			echo "Wrong Password .";
		}
	}
	else
	{
		echo "No Such User";
	}
	
	
}

?>