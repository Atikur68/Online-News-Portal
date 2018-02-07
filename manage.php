<?php session_start();

	if(! isset($_SESSION['status']))
	{
		header("location:index.php");
	}
		$link=mysql_connect("localhost","root","")or die("can not connect");
		mysql_select_db("newsportal",$link) or die("can not select database");
		
		$q="select * from news where n_owner_name='".$_SESSION['unm']."'";
		
		$res=mysql_query($q,$link) or die ("wrong query");
		
		
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">


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
					
					<h2 class="title">Manage news</h2>
					<p class="meta"></p>
					<div class="entry">
					<center><b> your news <b></center>
					<table border="0" width="100%">
				
				<tr>
						<td width="20%">No
						<td width="50%">Title
						<td width="20%">Show
						<td width="10%">delete
						
					</tr>
					
				<tr>
					<td colspan="4"><hr></td></tr>
				
				<?php
				$count=1;
					while($row=mysql_fetch_array($res))
					{
						echo '<tr> <td width="10%">'.$count.'
								<td width="50%"><a href="news_details.php?id='.$row['n_id'].'">'.$row['n_title'].'
								<td width="10%"><a href="show.php?id='.$row['n_id'].'&nm='.$row['n_title'].'">show</a>
								<td><a href="process_del_news.php?id='.$row['n_id'].'"><img src="images/delete.png"></a></tr>';
						
						$count++;
					}
					
				?>
					
					</tr>
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
