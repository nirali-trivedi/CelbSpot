<head>
<style type=text/css>
#div  {
width:350px;
height:280px;
background:grey;
color:white;
}
#span {
width:20px;
height:20px
background:red;
}

</style>

</head>
<?php 
include('connect.php');
?>

<iframe src="<?php echo $search_rs['Gmap'];?>" width="600" height="450" frameborder="0" style="border:0"></iframe>

