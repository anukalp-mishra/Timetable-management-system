<?php
	$con=mysqli_connect("localhost","root","","timetable");
	$query = "insert into student set name='".$_POST['name']."',s_id='".$_POST['s_id']."',roll_no='".$_POST['roll_no']."',course='".$_POST['course']."',year='".$_POST['year']."',email='".$_POST['email']."',password='".$_POST['password']."'";
	$query_run = mysqli_query($con,$query);
?>
<script type="text/javascript">
	alert("Student added successfully");
	window.location.href = "admin_dashboard.php";
</script>
