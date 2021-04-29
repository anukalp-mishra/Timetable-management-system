<?php
	if(isset($_POST['update'])){
	$con=mysqli_connect("localhost","root","","timetable");
	$query = "update student set email='".$_POST['email']."',password='".$_POST['password']."' where s_id = '".$_REQUEST['s_id']."'";
	$query_run = mysqli_query($con,$query);
	}
?>
<script type="text/javascript">
	alert("Details updated successfully");
	window.location.href = "student_dashboard.php";
</script>
