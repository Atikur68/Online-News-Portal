<?php session_start();

$link=mysqli_connect("localhost","root","","newsportal")or die("can not connect");


$q="select * from news where n_active=1 order by n_id desc ";
$res=$link->query($q) or die ("can not select database");


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
					
					<h2 class="title"><center><b>WELCOME TO NEWSPORTAL</b></center></a></h2>
					
					<p class="meta"></p>
					<div class="entry"><font face color="black"><b>
						An online newsportal is the online version of newspapers, either as a stand-alone publication or as the online version of a printed periodical.<br /><br /><br />
                        For news readers, a news portal helps in many ways like:<br /><br />
					
					<li>Decrease costsuch like hard-copy newspapers</li><br />
					<li>Can be available at any time</li><br />
					<li>Easy to follow the legal boundaries like copyrights, law etc.</li><br /><br />
 
					For the news reporters, good online news portal contribute to organizational effectiveness by:<br /><br />

					<li>Easy to spread a news.</li><br />
					<li>Easy to maintain the legal boundaries like copyrights, law etc.</li><br /></font></b>
 
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
