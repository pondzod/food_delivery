<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PKS Restuanrant</title>
</head>

<body>
<?

session_start();
include ("config.php");

  $Total = 0;
  $SumTotal = 0;
  
$max = mysql_query("SELECT max(OrderID) FROM orders_detail");
$total_max = mysql_result($max,0)+1;
$strOrderID=$total_max;

$ue1= mysql_query("SELECT * FROM Customer  WHERE Username = '".$_SESSION['sessEcom']."' ");
	while($row= mysql_fetch_array($ue1))
			{
		

$name=$row['Name'];
$Address=$row['Address'];


			}

  for($i=0;$i<=(int)$_SESSION["intLine"];$i++)
  {
	  if($_SESSION["strProductID"][$i] != "")
	  {
			  $strSQL = "
				INSERT INTO orders_detail (OrderID,ProductID,Qty,Name,Address)
				VALUES
				('".$strOrderID."','".$_SESSION["strProductID"][$i]."','".$_SESSION["strQty"][$i]."','$name','$Address')";
			  mysql_query($strSQL) or die(mysql_error());
			 
			 
	  }
  }

mysql_close();



header("location:finish_order.php?OrderID=".$strOrderID);



?>



</body>
</html>