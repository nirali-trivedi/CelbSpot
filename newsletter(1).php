<?php 

ob_start();
	include('connect.php');
	
	if(isset($_REQUEST['Go']))
	{
		$m=$_REQUEST['Email'];
		
		$q="insert into newsletter() values('','$m')";
		$q1=mysql_query($q) or die(mysql_error());
	}
	
ob_flush();
?>
