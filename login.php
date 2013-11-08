<!DOCTYPE html> 
<html> 
	<head> 
	<title>My Page</title> 
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
$username = $_POST['user'];
$password = $_POST['pass'];
include('config.php');
$sql = "SELECT Username,Password FROM Customer WHERE Username = '$username' AND Password = '$password'";
$result = mysql_query($sql);
$rows = mysql_fetch_array($result);
$user = $rows["Username"];
if ($username != "admin" || $password != "1234" ){
	
	echo "<meta http-equiv='refresh' content='0; url=index.php'>";
	} 
else 
	{
		session_start();
	$_SESSION['admin'] = $_POST['user'];
	echo "<meta http-equiv='refresh' content='0; url=admin/index.php'>";
	exit();
	}
if(isset($user)){ 
	session_start();
	$_SESSION['sessEcom'] = $user;
	echo "<meta http-equiv='refresh' content='0; url=index.php'>";   
	}
	else {
	$A = "<h3>เป็นเพราะ :</h3>
	<p>ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง</p>";
	echo "<meta http-equiv='refresh' content='1; url=index.php'>";
	} 
?>

	
	<?= $A  ?>
	</body>
</html>
