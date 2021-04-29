<?php
$con=mysqli_connect("localhost","root","","timetable");
if(isset($_REQUEST['submit']))
{
	@session_start();
}

if(isset($_REQUEST['logout']))
{
session_start();
session_destroy();
header("location:index.php");
}		
	
?>