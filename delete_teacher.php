<script type="text/javascript">
	if(confirm("Do you want to remove them permanentely ?"))
	{
		document.write("<?php 
		$con=mysqli_connect("localhost","root","","timetable");
		$query = "delete from teacher where t_id = $_POST[t_id]";
		$query_run = mysqli_query($con,$query);
		?>");
	 	window.location.href = "admin_dashboard.php";
	}
	else
	{
		window.location.href = "admin_dashboard.php";
	}
</script>
