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
					
					<h2 class="title">REGISTER</a></h2>
					<p class="meta">Please fill up the form</p>
					<div class="entry">
						<form action="process_newswriter_register.php" method="post">
							FULL NAME <br> <input type="text" name="nm" style="width:200px;">
							<br><br> PASSWORD <br> <input type ="password" required="required" name="pwd" id="password">
							<br><br>CONFIRM PASSWORD<br><input type="password" name="pwd2" required="required" id="passwordCon" oninput= "check(this)" />
							<script language='javascript' type = 'text/javascript'>
								function check(input) {
									if(input.value != document.getElementById('password').value){
										input.setCustomValidity('Password Must be Matching.');
									} else{
										input.setCustomValidity('');
									}
								}
								</script>
							<br><BR> COMPANY NAME <BR> <INPUT TYPE = "TEXT" name="cnm" style="width:200px;">
							<BR><BR> COMPANY ADDRESS <BR> <TEXTAREA name="addr" style="width:200px;"></TEXTAREA>
							<br><br> PHONE NUMBER <br><input type="text" name="ph" style="width:200px;">
							<BR><BR> EMAIL <BR> <INPUT type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" name="email" style="width:200px;">
							<BR><BR>COMPANY PROFILE<BR> <TEXTAREA name="profile" style="width:200px;"></TEXTAREA>							
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
