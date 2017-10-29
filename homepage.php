<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Home Page</title>
<link  href="css/style3.css" rel="stylesheet"  type="text/css">
</head>
<body>
	
	<div id="main-wrapper">
		<center>
			<h2>Home Page</h2>
			<h3>Welcome
				<?php echo $_SESSION['username'] ?>
			</h3>
			<?php echo '<img class="avatar"  src="'.$_SESSION["imglink"].'"  width="200" height="200"> ';
			
			
			?>
		</center>
	
		<form class="myform" action="homepage.php" method="post">
			<input name="logout" type="submit" id="logout_btn" value="Log Out"/><br>
			
		</form>
		
		<?php
			if(isset($_POST['logout']))
			{
				session_destroy();
				header('location:index.php');
			}
		?>
	</div>
</body>
</html>