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
						<form action="process_user_register.php" method="post" enctype="multipart/form-data">
							FULL NAME <br> <input type="text" name="nm" style="width:200px;">
							<br><br> PASSWORD<br><input type="password" required="required" name="pwd" id="password" />
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
							<BR><BR>GENDER <BR> <INPUT TYPE = "RADIO" VALUE="MALE" name="gender">MALE<INPUT TYPE = "RADIO" VALUE="female"name="gender">FEMALE
							<br><BR> EMAIL <BR> <INPUT type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" name="email" style="width:200px;">
							<BR><BR> ADDRESS <BR> <TEXTAREA name="addr" style="width:200px;"></TEXTAREA>
							<BR> <BR>MOBILE NO.<BR> <INPUT TYPE = "TEXT" name="mobile" style="width:200px;">
							<br><br>CURRENT LOCATION <BR><INPUT TYPE="TEXT" name="cl" style="width:200px;">
							<BR><BR>JOB SECTOR<BR><INPUT TYPE ="TEXT" name="jsector" style="width:200px;">
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
