<?php
ob_start();
	include('connect.php');
	
	if(isset($_REQUEST['update']) &&! isset($_REQUEST['eid']))
	{
		$n=$_REQUEST['name'];
		$e=$_REQUEST['email'];
		$s=$_REQUEST['spot'];
		$a=$_REQUEST['ad'];
		$r=$_REQUEST['area'];
		$l=$_REQUEST['ll'];
		$m=$_REQUEST['mobile'];

				
		$q="insert into demo() values('','$n','$e','$s','$a','$r','$l','$m')";
		$q1=mysql_query($q) or die(mysql_error());
		header('location:profile.php');
	}
	if(isset($_REQUEST['eid']))
	{
		$eid=$_REQUEST['eid'];
		$q="select * from demo where id='$eid'";
		$q1=mysql_query($q) or die(mysql_error());
		$fetch=mysql_fetch_array($q1);
	}
	if(isset($_REQUEST['update']) && isset($_REQUEST['eid']))
	{
		$eid=$_REQUEST['eid'];
		$n=$_REQUEST['name'];
		$e=$_REQUEST['email'];
		$s=$_REQUEST['spot'];
		$a=$_REQUEST['ad'];
		$r=$_REQUEST['area'];
		$l=$_REQUEST['ll'];
		$m=$_REQUEST['mobile'];


				
		$q="update demo set name='$n' ,email='$e' ,spot='$s' ,ad='$a' ,area='$r' ,ll='$l' ,mobile='$m' where id='$eid'";
		$q1=mysql_query($q) or die(mysql_error());
		header('location:profile.php');
	}

	ob_flush();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
	<form action="" method="post">
			<table>
				<tr><td width="1000">Service Provider's Name :- <input type="text" name="name" value="" /></td></tr>
				<tr><td>Website/E-mail :-<input type="text" name="email" value="" /></td></tr>
				<tr><td>Name of Banquet/Hall :-<input type="text" name="spot" value="" /></td></tr>
				<tr><td>Address :-<textarea name="ad"></textarea></td></tr>
				<tr><td>Area :-<input type="text" name="area" value="" /></td></tr>
				<tr><td>Phone Number(LL) :-<input type="text" name="ll" value="" /></td></tr>
				<tr><td>Mobile Number :-<input type="text" name="mobile" value="" /></td></tr> 
				<tr><td><input type="submit" name="update" value="Update" />
			</table>
		</form>
</body>
</html>
