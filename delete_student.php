<script type="text/javascript">
	if(confirm("Do you want to remove them permanentely ?"))
	{
		document.write("<?php 
		$con=mysqli_connect("localhost","root","","timetable");
		$query = "delete from student where s_id = $_POST[s_id]";
		$query_run = mysqli_query($con,$query);
		?>");
	 	window.location.href = "admin_dashboard.php";
	}
	else
	{
		window.location.href = "admin_dashboard.php";
	}
</script>
