<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<title>Untitled Document</title>
</head>

<body>
<?php
$iddelete = $_POST["textiddelete"];
include("../config.php");

$sqldelete = "DELETE FROM food WHERE ProductID ='$iddelete'";

mysql_query($sqldelete,$con);

mysql_close($con);
echo '<script>alert("ลบสินค้าแล้ว")</script>'; 
echo "<script>window.location='index.php'</script>"; 
?>