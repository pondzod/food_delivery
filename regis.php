<!DOCTYPE html> 
<html> 
	<head> 
	<title>PKS Restuarant</title> 
	<meta name="viewport" content="width=device-width, initial-scale=1; charset=windows-874"/ > 
    <meta http-equiv="content-Type" content="text/html; charset=tis-620"> 
		<link rel="stylesheet"  href="demos/css/themes/default/jquery.mobile-1.2.0.css" />
	<link rel="stylesheet" href="demos/docs/_assets/css/jqm-docs.css"/>

	<script src="demos/js/jquery.js"></script>
	<script src="demos/docs/_assets/js/jqm-docs.js"></script>
	<script src="demos/js/jquery.mobile-1.2.0.js"></script>
</head> 
<body>
<? 
$user=$_POST["user"];
$pass=$_POST["pass"];
$add=$_POST["add"];
$tel=$_POST["tel"];
$mobile=$_POST["mobile"];
include("config.php");

$sql = "INSERT INTO Customer(Username,Password,Address,Phone,Mobile) VALUES ('$user','$pass','$add','$tel','$mobile')";
if (!mysql_query($sql,$con))
	{ 
 	die('Error:'. mysql_error());
	}
	echo '<script>alert("ท่านได้สมัครสมาชิกเรียบร้อยแล้ว")</script>'; 
	echo "<meta http-equiv='refresh' content='0; url=../index.php'>";  
	mysql_close($con);
?>
</body>