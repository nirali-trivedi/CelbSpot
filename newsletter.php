<?php
    $Email=$_GET["Email"];
	$con=mysql_connect("localhost","root","");
	$db=mysql_select_db("celbspot",$con);
 	$query="insert into newsletter values('$Email')";
	$result=mysql_query($query,$con);
	
	if(!$result)
	{
		echo "error";
	}
	else
	{
		echo "register successfully";
	}

?>