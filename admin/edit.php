<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<title>Untitled Document</title>
</head>

<body>
<?
include ("../config.php");
$idmain = $_POST['textmainid'];
$idedit = $_POST['textid'];
$nameedit = $_POST['textname'];
$priceedit = $_POST['textprice'];
$typeedit = $_POST['texttype'];


$sql = "UPDATE product SET ProductID = '$idedit',Name = '$nameedit',Price = '$priceedit',Type = '$typeedit' WHERE ProductID = '$idmain'";


mysql_query($sql,$con);
echo '<script>alert("แก้ไขสินค้าแล้ว")</script>'; 
mysql_close($con);
echo "<script>window.location='index.php'</script>"; 
?>
</body>
</html>
