<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard</title>
	<link rel="stylesheet" type="text/css" href="./css/foot.css" />
	<style>
		#header{
			height: 10%;
			width: 100%;
			top: 2%;
			background-color: black;
			position: fixed;
			color: white;
		}
		#left_side{
			height: 75%;
			width: 15%;
			top: 13%;
			position: fixed;
		}
		#right_side{
			height: 60%;
			width: 80%;
			background-color: whitesmoke;
			position: fixed;
			left: 17%;
			top: 21%;
			color: red;
			border: solid 1px black;
		}
		#top_span{
			color:blue;
			top: 18%;
			width: 80%;
			left: 17%;
			position: fixed;
		}
		#td{
			border: 1px solid black;
			padding-left: 2px;
			text-align: left;
			width: 200px;
		}
		.select{
            width:65%;
            height:25px;
            margin-left:55px;
            margin-bottom:5px;
        }
	</style>
</head>
<?php
	session_start();
	$con=mysqli_connect("localhost","root","","timetable");
	@session_start();
		if($_SESSION['name']==''){
			header("location:index.php");
		}
?>
<body>
	<div id="header"><br>
		<center>Timetable Management System &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email:<?php echo $_SESSION['email'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name:<?php echo $_SESSION['name'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
		<a href="logout.php?logout=true">Logout</a>
		</center>
	</div>
	<span id="top_span"><marquee><strong>Welcome To The Timetable Management System</strong></marquee></span>
	<div id="left_side">
		<br><br><br>
		<form action="" method="post">
			<table>
				<tr>
					<td>
						<input type="submit" class="select" name="add_student" value="Add Students">
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" class="select" name="add_teacher" value="Add Teachers">
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" class="select" name="delete_student" value="Delete Student">
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" class="select" name="delete_teacher" value="Delete Teacher">
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" class="select" name="show_teacher" value="View Teachers">
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" class="select" name="show_timetable" value="Manage timetable" >
					</td>
				</tr>
			</table>
		</form>
	</div>
	<div id="right_side"><br><br>
		<div id="demo">
			<?php
				if(isset($_POST['show_timetable'])){
					header("location:display_table.php");		
				}
			?>			


			<?php 
				if(isset($_POST['add_student'])){
					?>
					<center><h3>Add Students</h3></center>
					<form action="add_student.php" method="post">
						<table>
						<tr>
							<td>
								<b>Name:</b>
							</td> 
							<td>
								<input type="text" name="name" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>S_ID:</b>
							</td> 
							<td>
								<input type="text" name="s_id" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Roll No:</b>
							</td> 
							<td>
								<input type="text" name="roll_no" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Course:</b>
							</td> 
							<td>
								<input type="text" name="course" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Year:</b>
							</td> 
							<td>
								<input type="text" name="year" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Email:</b>
							</td> 
							<td>
								<input type="text" name="email" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Password:</b>
							</td> 
							<td>
								<input type="password" name="password" required>
							</td>
						</tr>
						<tr>
							<td></td>
							<td><br><input type="submit" name="add" value="Add Student"></td>
						</tr>
					</table>
					</form>
					<?php
				}
				?>
				<?php
				if(isset($_POST['add_teacher'])){
					?>
					<center><h3>Add Teachers</h3></center>
					<form action="add_teacher.php" method="post">
						<table>
						<tr>
							<td>
								<b>Name:</b>
							</td> 
							<td>
								<input type="text" name="name" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>E_ID:</b>
							</td> 
							<td>
								<input type="text" name="t_id" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Email:</b>
							</td> 
							<td>
								<input type="text" name="email" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Subject:</b>
							</td> 
							<td>
								<input type="text" name="subject" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Password:</b>
							</td> 
							<td>
								<input type="password" name="password" required>
							</td>
						</tr>
						<tr>
							<td></td>
							<td><br><input type="submit" name="add" value="Add Teacher"></td>
						</tr>
						</table>
					</form>
					<?php
			}		

			?>
			<?php
			if(isset($_POST['delete_student']))
			{
				?>
				<center>
				<form action="delete_student.php" method="post">
				&nbsp;&nbsp;<b>Enter Student ID:</b>&nbsp;&nbsp; <input type="text" name="s_id" required>
				<input type="submit" name="delete_student" value="Delete">
				</form><br><br>
				</center>
				<?php
			}
			?>

			<?php
			if(isset($_POST['delete_teacher']))
			{
				?>
				<center>
				<form action="delete_teacher.php" method="post">
				&nbsp;&nbsp;<b>Enter Teacher ID:</b>&nbsp;&nbsp; <input type="text" name="t_id" required>
				<input type="submit" name="delete_teacher" value="Delete">
				</form><br><br>
				</center>
				<?php
			}
			?>

			<?php
				if(isset($_POST['show_teacher'])){
					?>
					<center>
						<h5>Teacher's Details</h5>
						<table>
							<tr>
								<td id="td"><b>E_ID</b></td>
								<td id="td"><b>Name</b></td>
								<td id="td"><b>Email</b></td>
								<td id="td"><b>Subject</b></td>

							</tr>
						</table>
					</center>
					<?php
					$con=mysqli_connect("localhost","root","","timetable");
					$query = "select * from teacher";
					$query_run = mysqli_query($con,$query);
					while ($row = mysqli_fetch_array($query_run)) 
					{
						?>
						<center>
						<table style="border-collapse: collapse;border: 1px solid black;">
							<tr>
								<td id="td"><?php echo $row['t_id']?></td>
								<td id="td"><?php echo $row['name']?></td>
								<td id="td"><?php echo $row['email']?></td>
								<td id="td"><?php echo $row['subject']?></td>
							</tr>
						</table>
						</center>
						<?php
					}
				}
			?>
		</div>
	</div>
	<?php include "./components/footer.php" ?>
</body>
</html>