<?php session_start();


	$link=mysqli_connect("localhost","root","","newsportal") or die("cant connect");
	

		
	$q = "select * from news where n_category ='".$_GET['cat']."' and n_active=1";
	
	$res =$link->query($q) or die("Wrong Query");
	

	
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
					
					<h2 class="title"><?php echo $_GET['cat']; ?></h2>
					<p class="meta"></p>
					<div class="entry">
					<ul>		
					<?php
						while($row = $res->fetch_assoc())
						{
						
							echo '
										<li>
										<a href="news_details.php?id='.$row['n_id'].'">'.$row['n_title'].'</a>
								';
						}
						
					?>
					</ul>
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
