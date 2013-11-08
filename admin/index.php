<!DOCTYPE html> 
<html> 
	<head> 
	<title>My Page</title> 
	<meta name="viewport" content="width=device-width, initial-scale=1; charset=UTF-8"/ > 
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
	header("Location:../index.php");
	exit();
}
?>
<body>
<div data-role="page">

	<div data-role="header">
		<h1>หน้าหลักผู้ดูแลระบบ</h1>
	</div>
 <form id="AddPForm" method="post" enctype="multipart/form-data" action="addpro.php" onsubmit="return senddata();" target="uploadtarget">
        <h3>
          <p align="center">เพิ่มข้อมูลอาหาร </p>
        </h3>
        <table width="331" border="0" align="center">
          <tr>
            <td width="103">รหัสอาหาร :</td>
            <td width="218"><div align="left">
              <input name="PID" type="text" id="PID" />
            </div></td>
          </tr>
          <tr>
            <td>ชื่ออาหาร:
              <label for="textfield"></label></td>
            <td><div align="left">
              <input type="text" name="Pname" id="Pname" />
            </div></td>
          </tr>
          
          <tr>
            <td>ประเภทอาหาร: </td>
            <td><div align="left">
              <select name="food" id="food">
                  <option value="1">อาหารทอด</option>
                  <option value="2">อาหารต้ม</option>
                  <option value="3">อาหารผัด</option>
                  <option value="4">อาหารยำ</option>
                  <option value="5">เครื่องดื่ม</option>
                </select>
                
                
            </div></td>
          </tr>
               <tr>
            <td>ราคาอาหาร</td>
            <td><div align="left">
          <input type="text" name="Pprice" id="Pprice" />
            </div></td>
          </tr>
             <tr>
            <td>รูปอาหาร: </td>
            <td><div align="left">
              <input type="file" name="picacc1" id="picacc1" />
            </div></td>
          </tr>
          
          <tr>
          
            <td>&nbsp;</td>
            <td><div align="left">
             <input type="submit" data-role="button" data-inline="true" value="Submit" ied- />
  
<a href="index.php" data-role="button" data-role="button" data-inline="true">Cancle</a>

            </div></td>
          </tr>
        </table>
        <p align="center">
          <label for="Submit"></label>
        </p>
    </form></td>
    <td></td>
  </tr>ลบอาหาร
  <tr><td>
  <form action="delete.php" method="post" >
					กรอกรหัสอาหารที่ต้องการลบ : : <input type="text" name ="textiddelete" placeholder="รหัสอาหาร" >
					<input type="submit" value="ตกลง">
	</form>
           </td>
</tr>
<tr>       
<td height="307"></td>
    <td rowspan="2" align="center" valign="top"><span id="showdetail" ></span></td>
    <td></td>
  </tr>
  <tr>
    <td height="162">&nbsp;</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
  <td>
แก้ไขอาหาร :
			
				<form action="index.php" method="get">
			กรอกรหัสอาหารที่ต้องการแก้ไขข้อมูล : <input type="text" name ="textidupdate"  placeholder="รหัสอารหาร" >
				<input type="submit" value="ค้นหาข้อมูล">
				</form>
    </td>
</tr>
                
<?
include("../config.php");
$idupdate = $_GET['textidupdate'];
$result = mysql_query("SELECT * FROM food WHERE ProductID = '$idupdate'");
			while($row= mysql_fetch_array($result))
			{	
			echo '<form action="edit.php" method= "post">';
			echo '<input type="hidden" value="'. $row["ProductID"].'" name="textmainid"><br>';
			echo 'id :<input type="text" value="'. $row["ProductID"].'" name="textid"><br><br>';
			echo 'ชื่อ : <input type="text" value="'. $row["Name"].'" name="textname"><br><br>';
			echo 'ราคา: <input type="text" value="'. $row["Price"].'" name="textprice"><br><br>';
			echo 'ประเภท : <input type="text" value="'. $row["Type"].'" name="texttype"><br><br>';	
			echo '<input type="submit" value="ตกลง" id="btnsubmit"><br>';
			echo '</form>';
			echo '</div>';
			echo '<br>';
			}
			mysql_close($con);
			?>		
				
			ตารางอาหาร : 
			<?
			include("../config.php");
			 $result = mysql_query("SELECT * FROM food ");
		
			echo '<div>';
			echo '<br><table border="1"  >';
			echo '<td width="100" align="center" bgcolor="33CCFF">รหัสอาหาร</td>';
			echo '<td width="100" align="center" bgcolor="33CCFF">ชื่ออาหาร</td>';
			echo '<td width="100" align="center" bgcolor="33CCFF">ราคา</td>';
			echo '<td width="100" align="center" bgcolor="33CCFF">รูปอาหาร</td>';
			echo '<td width="100" align="center" bgcolor="33CCFF">ประเภทอาหาร</td>';
		
			
			while($row= mysql_fetch_array($result))
			{
			echo '<tr>';
			echo '<td width="120" align="center">'.$row["ProductID"].'</td>';
			echo '<td width="150" align="center">'.$row["Name"].'</td>';
			echo '<td width="200" align="center">'.$row["Price"].'</td>';
			echo '<td width="200" align="center"><img src ="../images/'.$row["Img"].'"></td>';
			echo '<td width="200" align="center">'.$row["Type"].'</td>';
			}
			echo '</tr>';
			echo '</table><br>';
			echo '</div>';
  ?>
</table>
<ul>
					<li><a href="index.php">หน้าหลัก</a></li>
                    <li><a href="order.php">รายการการสั่งอาหาร</a></li>
					<li><a href="custom.php">หน้าลูกค้า</a></li>
					<li id="liLast"><a href="../logout.php">ออกจากระบบ</a></li>
</body>
</html>