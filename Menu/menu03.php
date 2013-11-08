<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Fried Menu</title>
<meta name="viewport" content="width=device-width, initial-scale=1; charset=windows-874"/ > 
    <meta http-equiv="content-Type" content="text/html; charset=UTF8"> 
		<link rel="stylesheet"  href="../demos/css/themes/default/jquery.mobile-1.2.0.css" />
	<link rel="stylesheet" href="../demos/docs/_assets/css/jqm-docs.css"/>
    <link rel="stylesheet" href="../CSS/box.css"/>
	<script src="../demos/js/jquery.js"></script>
	<script src="../demos/docs/_assets/js/jqm-docs.js"></script>
	<script src="../demos/js/jquery.mobile-1.2.0.js"></script>
</head>
<body> 

<div data-role="page">

  <div data-role="header">
		<h1>PKS Restuarant</h1>
	</div>
<?
session_start();
if(isset($_SESSION['sessEcom']))
{
	$userSession = $_SESSION['sessEcom'];
	
}
else
{
	header("Location:index.php");
	exit();
}

	include ("../config.php");
			mysql_query("SET NAMES UTF8");
			
$strSQL = "SELECT * FROM food where Type = 3";
$objQuery = mysql_query($strSQL)  or die(mysql_error());
?>
<table id="newspaper-b" cellspacing="0" cellpadding="0">
  <tr>
    <td width="101">Picture</td>
    <td width="101">ProductID</td>
    <td width="82">ProductName</td>
    <td width="79">Price</td>
    <td width="37">Cart</td>
  </tr>
  <?
  while($objResult = mysql_fetch_array($objQuery))
  {
  ?>
  <tr>
	<td><img src="../images/<?=$objResult["Img"];?>"></td>
    <td><?=$objResult["ProductID"];?></td>
    <td><?=$objResult["Name"];?></td>
    <td><?=$objResult["Price"];?></td>
    <td><a href="../order.php?ProductID=<?=$objResult["ProductID"];?>">Order</a></td>
  </tr>
  <?
  }
  ?>
</table>
<br><br><a href="../show.php" data-role="button" data-inline="true">View Cart</a>
<a href="../clear.php" data-role="button" data-inline="true">Clear cart</a>
<?
mysql_close();
?>
</body>
</html>


<body>
</body>
</html>
