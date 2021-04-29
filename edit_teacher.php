<?php
	if(isset($_POST['update'])){
	$con=mysqli_connect("localhost","root","","timetable");
	$query = "update teacher set email='".$_POST['email']."',password='".$_POST['password']."' where t_id = '".$_REQUEST['t_id']."'";
	$query_run = mysqli_query($con,$query);
	}
?>
<script type="text/javascript">
	alert("Details updated successfully");
	window.location.href = "teacher_dashboard.php";
</script>
