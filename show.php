<!DOCTYPE html> 
<html> 
	<head> 
	<title>My Page</title> 
	<meta name="viewport" content="width=device-width, initial-scale=1; charset=windows-874"/ > 
    <meta http-equiv="content-Type" content="text/html; charset=UTF-8"> 
		<link rel="stylesheet"  href="../demos/css/themes/default/jquery.mobile-1.2.0.css" />
	<link rel="stylesheet" href="../demos/docs/_assets/css/jqm-docs.css"/>
      <link rel="stylesheet" href="CSS/box.css"/>
	<script src="../demos/js/jquery.js"></script>
	<script src="../demos/docs/_assets/js/jqm-docs.js"></script>
	<script src="../demos/js/jquery.mobile-1.2.0.js"></script>
</head> 

<body>
<?
session_start();
include ("config.php");
?>

<html>
<head>
<title>PKS restuarant</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
<div data-role="page" class="type-interior">
<div class="content-primary">
<table id="newspaper-b" cellspacing="0" cellpadding="0">

  <tr>
    <td width="101">ProductID</td>
    <td width="82">ProductName</td>
    <td width="82">Price</td>
    <td width="79">Qty</td>
    <td width="79">Total</td>
    <td width="10">Del</td>
  </tr>
  <?
  $Total = 0;
  $SumTotal = 0;

  for($i=0;$i<=(int)$_SESSION["intLine"];$i++)
  {
	  if($_SESSION["strProductID"][$i] != "")
	  {
		$strSQL = "SELECT * FROM food WHERE ProductID = '".$_SESSION["strProductID"][$i]."' ";
		$objQuery = mysql_query($strSQL)  or die(mysql_error());
		$objResult = mysql_fetch_array($objQuery);
		$Total = $_SESSION["strQty"][$i] * $objResult["Price"];
		$SumTotal = $SumTotal + $Total;
	  ?>
	  <tr>
		<td><?=$_SESSION["strProductID"][$i];?></td>
		<td><?=$objResult["Name"];?></td>
		<td><?=$objResult["Price"];?></td>
		<td><?=$_SESSION["strQty"][$i];?></td>
		<td><?=number_format($Total,2);?></td>
		<td><a href="../delete.php?Line=<?=$i;?>">x</a></td>
	  </tr>
	  <?
	  }
  }
  ?>
</table>
Sum Total <?=number_format($SumTotal,2);?>
<br><br>
<a href="Menu.php" data-role="button" data-inline="true">Back to menu</a>
<a href="saveorder.php" data-role="button" data-inline="true">ทำรายการเสร็จสิ้น</a>


<?
mysql_close();
?>
</body>
</html>
