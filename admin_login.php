<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/style.css">
	<title>Admin Login</title>
	<style type="text/css">
		body{
			background-image:url(img6.png);
			background-size: cover;
			background-attachment: fixed;
		}
	</style>
</head>
<body>
	<center><br><br>
		<h2>Admin LogIn Page</h2><br>
		<form action="" method="post" class="box" action="logout.php" enctype="multipart/form-data">
			<input type="email" name="email" required placeholder="Email"><br>
			<input type="password" name="password" required placeholder="Password"><br>
			<input type="submit" name="submit" value="LogIn">
		</form><br>
		<?php
			session_start();
			if(isset($_POST['submit']))
			{
				$connection = mysqli_connect("localhost","root","","timetable");
				$query = "select * from login where email = '$_POST[email]'";
				$query_run = mysqli_query($connection,$query);
				while ($row = mysqli_fetch_assoc($query_run)) 
				{
					if($row['email'] == $_POST['email'])
					{
						if($row['password'] == $_POST['password'])
						{
							$_SESSION['name'] =  $row['name'];
							$_SESSION['email'] =  $row['email'];
							
							header("location:admin_dashboard.php");
						}
						else{
							?>
							<span>Wrong Password !!</span>
							<?php
						}
					}
					else
					{
						?>
						<span>Wrong UserName !!</span>
						<?php
					}
				}
			}
		?>
	</center>
</body>
</html>