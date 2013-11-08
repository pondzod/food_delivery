<!DOCTYPE html> 
<html> 
	<head> 
	<title>My Page</title> 
	<meta name="viewport" content="width=device-width, initial-scale=1; charset=windows-874"/ > 
    <meta http-equiv="content-Type" content="text/html; charset=UTF-8"> 
		<link rel="stylesheet"  href="../demos/css/themes/default/jquery.mobile-1.2.0.css" />
	<link rel="stylesheet" href="../demos/docs/_assets/css/jqm-docs.css"/>
	<script src="../demos/js/jquery.js"></script>
	<script src="../demos/docs/_assets/js/jqm-docs.js"></script>
	<script src="../demos/js/jquery.mobile-1.2.0.js"></script>
</head> 
<? session_start();
if(isset($_SESSION['admin']))
{
	$userSession = $_SESSION['admin'];
	
}
else
{
	header("Location:index.php");
	exit();
}
?>
<body>
<?
  include("../config.php");
  $result = mysql_query("SELECT * FROM Customer ");
			echo '<div data-role="content">
		<div class="content-primary">';

		print '<h2>รายชื่อลูกค้า</h2>';
			echo '<br><div class= "table01"><table margin="0">';
			
			echo '<tr><td width="100" align="center" >Username</td>';
			echo '<td width="100" align="center">Password</td>';
			echo '<td width="100" align="center" >ชื่อ</td>';
			echo '<td width="100" align="center" >ที่อยู่</td>';
			echo '<td width="100" align="center">โทรศัพท์</td>';
			echo '<td width="100" align="center" >มือถือ</td></tr>';
			while($row= mysql_fetch_array($result))
			{
			echo '<tr>';
			echo '<td width="120" align="center">'.$row["Username"].'</td>';
			echo '<td width="150" align="center">'.$row["Password"].'</td>';
			echo '<td width="150" align="center">'.$row["Name"].'</td>';
			echo '<td width="200" align="center">'.$row["Address"].'</td>';
			echo '<td width="200" align="center">'.$row["Phone"].'</td>';
			echo '<td width="200" align="center">'.$row["Mobile"].'</td>';
			}
			echo '</tr>';
			echo '</table><br>';
			echo '</div>';?>
			<ul>
					<li><a href="index.php">หน้าแรก</a></li>
                    <li><a href="order.php">รายการการสั่งอาหาร</a></li>
					<li><a href="custom.php">หน้าลูกค้า</a></li>
					<li id="liLast"><a href="../logout.php">ออกจากระบบ</a></li>
</body>
</html>