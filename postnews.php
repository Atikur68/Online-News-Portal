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
					
					<h2 class="title">Post News</a></h2>
					<p class="meta">News Specification</p>
					<div class="entry">
					<form action="process_postnews.php" method="post">
						TITLE<br> <TEXTAREA type="text" name="title" style="width:200px;"></TEXTAREA>
						
						<BR><BR>Categories
							<br><SELECT name="cat" style="width:200px;">
							<?php

						
						
						$link=mysql_connect("localhost","root","")or die("can not connect");
						
						mysql_select_db("newsportal",$link) or die("cant select db");
				
						$q="select * from categories";
	
						$res=mysql_query($q,$link) or die('wrong query');
	
						while($row=mysql_fetch_assoc($res))
						{
							echo "<option>".$row['cat_nm'];
						}
						?>
						</SELECT>
								
							<BR><BR>Description<BR> <TEXTAREA name="disc" style="width:200px;"></TEXTAREA >
							<BR><BR>City<BR><INPUT TYPE="TEXT" name="city" style="width:200px;">
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
