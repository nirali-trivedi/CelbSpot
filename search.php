<?php 
include('connect.php');

if(!isset($_POST['search']))
{
	header('location:index.php');
}

$search_sql="SELECT * FROM h_detail WHERE H_name LIKE '%".$_POST['search']."%' OR H_detail LIKE '%".$_POST['search']."%' ";
$search_query=mysql_query($search_sql);
if(mysql_num_rows($search_query)!=0)
{
$search_rs=mysql_fetch_assoc($search_query);
}
?>