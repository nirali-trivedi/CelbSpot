<?php
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("city",$con);
$result=mysql_query("select * from city");
?>
<select name=city>

<?php


while($row=mysql_fetch_array($result))
{
echo "<option value='.$row[1].'>".$row[1]."</option>";
}


?>
</select>03:10 14-04-201403:13 14-04-2014