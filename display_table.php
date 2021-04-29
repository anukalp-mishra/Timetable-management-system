<?php 
    $con=mysqli_connect("localhost","root","","timetable");
    $querry2 = "select * from student";
    $result2 =mysqli_query($con,$querry2);

    $querry="select * from branch";
    $result1 =mysqli_query($con,$querry);
?>
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
			top: 10%;
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
			top: 18%;
			width: 80%;
			left: 17%;
			position: fixed;
			color: blue;
		}
		#td{
			border: 1px solid black;
			padding-left: 2px;
			text-align: left;
			width: 200px;
		}
        .select{
            width:52%;
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
		<center>Timetable Management System &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email: <?php echo $_SESSION['email'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name:<?php echo $_SESSION['name'];?> 
		<a href="logout.php?logout=true">Logout</a>
		</center>
	</div>
	<span id="top_span"><marquee><strong>Welcome To The Timetable Management System</strong></marquee></span>
	<div id="left_side">
		<br><br><br>
		<form action="" method="post">
			<table>
            <select class="select" name="course" id="course" required>

			<option selected disabled value="">Select Course</option>
			<option value="CSE">CSE</option>
			<option value="ECE">ECE</option>
			<option value="EEE">EEE</option>
			<option value="ME">ME</option>
			<option value="CE">CE</option>

            </select>
					<input type="submit" class="select" name="show_timetable" value="Display timetable" >
			</table>
		</form>
	</div>
	<div id="right_side"><br><br>
		<div id="demo">
			<?php
				// $gettable=$_POST['course'];
				if(isset($_POST['show_timetable']) && $_POST['course']=="CSE"){
					
					include("display.php");		
				}
				if(isset($_POST['show_timetable']) && $_POST['course']=="ECE"){
					include("display1.php");		
				}
				if(isset($_POST['show_timetable']) && $_POST['course']=="EEE"){
					
					include("display2.php");		
				}
				if(isset($_POST['show_timetable']) && $_POST['course']=="ME"){
					include("display3.php");
				}
				if(isset($_POST['show_timetable']) && $_POST['course']=="CE"){
					include("display4.php");
				}
				if(isset($_POST['show_timetable']) && $_POST['course']==""){
					echo "Please select course";
				}
			?>			
		</div>
	</div>
	<?php include "./components/footer.php" ?>
</body>
</html>