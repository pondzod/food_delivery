<!DOCTYPE html> 
<html> 
	<head> 
	<title>My Page</title> 
	<meta name="viewport" content="width=device-width, initial-scale=1; charset=windows-874"/ > 
    <meta http-equiv="content-Type" content="text/html; charset=tis-620"> 
		<link rel="stylesheet"  href="../demos/css/themes/default/jquery.mobile-1.2.0.css" />
	<link rel="stylesheet" href="../demos/docs/_assets/css/jqm-docs.css"/>

	<script src="../demos/js/jquery.js"></script>
	<script src="../demos/docs/_assets/js/jqm-docs.js"></script>
	<script src="../demos/js/jquery.mobile-1.2.0.js"></script>
</head> 
<body> 
<?php
include ("../config.php");
if(copy($_FILES["picacc1"]["tmp_name"],"../images/".$_FILES["picacc1"]["name"]))
{

$fileUpload=$_FILES["picacc1"]["name"];
	}
	
$PID=$_POST["PID"];
$Pname=$_POST["Pname"];
$Ptype=$_POST["food"];
$Pprice=$_POST["Pprice"];
$picacc1 = $_FILES["picacc1"]["name"];
$sql="INSERT INTO food(ProductID,Name,Type,Price,Img) values ('$PID','$Pname','$Ptype','$Pprice','$picacc1')";
if (!mysql_query($sql,$con))
	{ 
 	die('Error:'. mysql_error());
	}
	echo '<script>alert("ใส่รายการอาหารเพิ่มเรียบร้อย")</script>'; 
	echo "<meta http-equiv='refresh' content='0; url=../admin/index.php'>";  
	mysql_close($con);
	?> 
</body>


