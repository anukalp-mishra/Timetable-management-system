<?php
	$con=mysqli_connect("localhost","root","","timetable");
	$query = "insert into teacher set name='".$_POST['name']."',t_id='".$_POST['t_id']."',email='".$_POST['email']."',subject='".$_POST['subject']."',password='".$_POST['password']."'";
	$query_run = mysqli_query($con,$query);
?>
<script type="text/javascript">
	alert("Teacher added successfully");
	window.location.href = "admin_dashboard.php";
</script>
