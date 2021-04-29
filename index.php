<?php
include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		body{
			background-image:url(img6.png);
			background-size: cover;
			background-attachment: fixed;
		}
		.footer{
			display: inline-block;
			justify-content: center;
			width:40px;
			height:60px;
			margin-top:80px;
			margin-left:60px;
			text-align:center;

		}
		.foo{
			margin-top:250px;
		}
		p{
			display: grid;
  			place-items: center;
		}
	</style>
	<title>Login Page</title>
	<link rel="stylesheet" href="css/index.css">
</head>
<body>
	<div class="front">
	<h1><strong>Welcome To Timetable Management System</strong></h1><br>
	</div>
	<form class="form" action="" method="POST">
		<input type="submit" name="admin_login" value="Admin Login" required class="admin">&nbsp;&nbsp;
		<input type="submit" name="teacher_login" value="Teacher Login" required class="teacher">&nbsp;&nbsp;
		<input type="submit" name="student_login" value="Student Login" required class="student">
	</form>
	<?php
		if(isset($_POST['admin_login'])){
			header("Location: admin_login.php");
		}
		if(isset($_POST['teacher_login'])){
			header("Location: teacher_login.php");
		}
		if(isset($_POST['student_login'])){
			header("Location: student_login.php");
		}
	?>
	<div class="foo" style=" color:white; font-size: 15pt;text-align:center;text-shadow: 1px 1px 11px black; ">
	<div>
		<footer>
			<div class="footer" style="margin-right:180px;">
			<img src="user_image/user1.png" alt="Person" width="80" height="80" sstyle="float: center;margin: 0 10px 0 -15px;">
			<p>Anukalp Mishra</p>
	</div>
	<div class="footer" style="margin-right:180px;">
			<img src="user_image/user2.png" alt="Person" width="80" height="80" style="float: center;margin: 0 10px 0 -15px;">
			<p>Apurba Ganguly</p>
	</div>
	<div class="footer" style="margin-right:100px;">
			<img src="user_image/user3.png" alt="Person" width="80" height="80" style="float: center;margin: 0 10px 0 -15px;">
			<p>Ankita Singh</p>
	</div>
		</footer>
	</div>
</div>
</body>
</html>