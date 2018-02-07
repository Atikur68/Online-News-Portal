<?php session_start();

	if(! isset($_SESSION['status']))
	{
		header("location:index.php");
	}
		$link=mysql_connect("localhost","root","")or die("can not connect");
		
		//$mysqli = new mysqli("localhost","root","","newsportal");
		
		mysql_select_db("newsportal",$link) or die("can not select database");
		
		$q="select * from user where ee_id in(select a_uid from applicants where a_nid=".$_GET['id']." )";
	
		$res=mysql_query($q,$link) or die ("wrong query");
		
		
	
?>


<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<?php
include("includes/head.inc.php");
?>
</head>
<body>
<div id="header-wrapper">
	<div id="header">
	<div id="menu">
		<?php
		include("includes/menu.inc.php");
		?>
		</div>
		<div id="search">
		<?php
		
		include("includes/search.inc.php");
		?>
		</div>
	</div>
</div>

<div id="logo">
	<?php
	include("includes/logo.inc.php");
	?>
	</div>
<div id="wrapper">
	<div id="page">
		<div id="page-bgtop">
			<hr />
			<div id="content">
				<div class="post">
					
					<h2 class="title"><?php echo $_GET['nm']; ?></h2>
					<p class="meta"></p>
					<div class="entry">
				
					<table border="0" width="100%">
				
				<tr>
						<td width="10%">No
						<td width="50%">Name
						<td width="30%">Contact
						
					</tr>
				
					
				<?php
				$count=1;
					while($row=mysql_fetch_array($res))
					{
						
						echo '<tr> <td width="10%">'.$count.'
								<td width="50%">'.$row['ee_fnm'].'
								<td width="30%">'.$row['ee_email'].'
								';
							$count++;
					}
				?>
				
					</table>
						
					</div>
				</div>
				
			</div>
			<div id="sidebar">
			<?php
		include("includes/sidebar.inc.php");
		?>	
			</div>
			<div style="clear: both;">&nbsp;</div>
		</div>
	</div>
</div>

<div id="footer-bgcontent">
	<div id="footer">
		<?php
		include("includes/footer.inc.php");
		?>	
	</div>
</div>

</body>
</html>
