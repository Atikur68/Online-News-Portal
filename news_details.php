<?php session_start();


	$link=mysqli_connect("localhost","root","","newsportal") or die("cant connect");
		
	$q = "select * from news where n_id =".$_GET['id'];
	
	$res = $link->query($q) or die("Wrong Query");
	
	$row = $res->fetch_assoc();
	
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
					
					<h2 class="title"><center><?php echo $row['n_title']; ?></center></a></h2>
					
					<p class="meta"></p>
					<div class="entry">
						<table width="100%" border="0">
							
						<?php
						
						echo '<tr><td width="30%"><b>Category:</b><br><td>'.$row['n_category'].'</td></tr>
								<tr><td><b>Description:</b></td><td>'.$row['n_discription'].'</td></tr>
								<tr><td><b>City:</b></td><td>'.$row['n_city'].'</tr>
								';
						
						?>
						
						
					
		<?php
	
				if(isset($_SESSION['status']) && $_SESSION['cat']=="user")
				{
					echo'<tr><td colspan="2"><center><a href="process_apply.php?nid='.$row['n_id'].'"> Thank You </center></td></tr></a>';
				}
	
		?>															
					
						</table>					
						
					</div>
				</div>
				<div>
				<?php
         $id=$_GET['id'];
$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
$db = mysql_select_db("newsportal", $connection); // Selecting Database from Server
if(isset($_POST['submit'])){ 
$name=$_POST['name'];
$comment=$_POST['comment'];
$id=$_POST['id'];
$query = mysql_query("insert into comment(comment,name,newid) values('$comment','$name','$id')"); // <Database> V <locla var>

}
$sql=mysql_query("select * from comment where newid ='$id'");
while($row = mysql_fetch_array($sql))
{
$comment = $row['comment'];
$name=$row['name'];

echo '<tr> <td width="10%">
								<td width="50%"><a href="news_details.php?id='.$row['id'].'">'.$row['name'].'
								<td width="10%"><a href="show.php?id='.$row['id'].'&nm='.$row['comment'].'"></a>
								<td><a href="commentDelete.php?id='.$row['id'].'"><img src="images/delete.png"></a></tr>';
						
						

?>
                <h3>Name:<?php echo $name;?><h3>
                <h4>Comment: <?php echo $comment;?><h4>				
<?php } ?>
				</div>
				<?php
						$ee=$_SESSION['email'];
						$rr1=$_SESSION['unm'];
						
						if($ee=='' && $rr1==''){
							?>
							<a href="userregister.php">Comment</a>
						<?php }
						else
						{
                        ?>						
						<form action="news_details.php?id=<?php echo $id;?>" method="post">
							<TEXTAREA name="comment" style="width:200px;"></TEXTAREA>
							<input type="hidden" name="id" value="<?php echo $id;?>">
							<input type="hidden" name="name" value="<?php echo $rr1;?>">
							<input type="submit" name="submit" value="Comment">
							</form>
							<?php
						}
						
						?>
						<br>
						<br>
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
