<?php session_start();
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
					
					<h2 class="title">Contact</h2>
					<p class="meta">please fill this form if you have any query</p>
					<div class="entry">
					<form action="process_contact.php" method="post">
						Fullname <br><br><input type="text" name="nm">
						<br><br> Email <br><br> <input type="text" name="email">
						<br><br> Query <br><br> <textarea name="query"></textarea>
						<center><br><br> <input type="submit" value="submit"></center>
					</form>
						
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
