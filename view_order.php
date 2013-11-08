<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Report</title>
</head>

<body>

<p>
  <?
include ("config.php");
session_start();
$userSession = $_SESSION['sessEcom'];
 $result = mysql_query("SELECT * FROM Customer  WHERE Username = '".$_SESSION['sessEcom']."' ");
			echo '<div data-role="content">
		<div class="content-primary">';
		
		echo '
<center>ใบเสร็จรับเงิน <br>

ร้านอาหาร PKS Restuarant <br>

ซ.สีลม 34 แขวง บางรัก เขตสีลม กทม. 23123 Tel:02-3232412<br>';

			while($row= mysql_fetch_array($result))
			{
		
		
			print  "ชื่อ: ".$row['Name'];
			echo "ที่อยู่: ".$row['Address']."<br>";
			echo "เบอร์บ้าน: ".$row['Phone'];
		echo "มือถือ: ".$row['Mobile'];
			}
			echo '</tr>';
			echo '</table><br>';
			echo '</div>';?>
</p>
            <center><table width="400"  border="1">
  <tr>
    <td width="101">ProductID</td>
    <td width="82">ProductName</td>
    <td width="82">Price</td>
    <td width="79">Qty</td>
    <td width="79">Total</td>
  </tr></center>
<?
$Total = 0;
$SumTotal = 0;

$strSQL2 = "SELECT * FROM orders_detail WHERE OrderID = '".$_GET["OrderID"]."' ";
$objQuery2 = mysql_query($strSQL2)  or die(mysql_error());

while($objResult2 = mysql_fetch_array($objQuery2))
{
		$strSQL3 = "SELECT * FROM food WHERE ProductID = '".$objResult2["ProductID"]."' ";
		$objQuery3 = mysql_query($strSQL3)  or die(mysql_error());
		$objResult3 = mysql_fetch_array($objQuery3);
		$Total = $objResult2["Qty"] * $objResult3["Price"];
		$SumTotal = $SumTotal + $Total;
	  ?><center>
	  <tr>
		<td><?=$objResult2["ProductID"];?></td>
		<td><?=$objResult3["Name"];?></td>
		<td><?=$objResult3["Price"];?></td>
		<td><?=$objResult2["Qty"];?></td>
		<td><?=number_format($Total,2);?></td>
	  </tr></center>
	  <?
 }
  ?>
</table>
Sum Total <?=number_format($SumTotal,2);?>

<?
mysql_close();
?>
</body>
</html>

</body>
</html>