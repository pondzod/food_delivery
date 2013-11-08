<!DOCTYPE html> 
<html> 
	<head> 
	<title>อร่อยเว่อ Restuarant</title> 
	<meta name="viewport" content="width=device-width, initial-scale=1; charset=UTF-8"/ > 

		<link rel="stylesheet"  href="demos/css/themes/default/jquery.mobile-1.2.0.css" />
	<link rel="stylesheet" href="demos/docs/_assets/css/jqm-docs.css"/>
 <link rel="stylesheet" href="CSS/box.css"/>
	<script src="demos/js/jquery.js"></script>
	<script src="demos/docs/_assets/js/jqm-docs.js"></script>
	<script src="demos/js/jquery.mobile-1.2.0.js"></script>
</head> 
<body> 

<div data-role="page">

	<div data-role="header">
		<h1>Aroi ver Restuarant</h1>
        	<h1>Food delivery</h1>
	</div>
	<p><!-- /header -->
	  <?  
 session_start();
if(isset($_SESSION['sessEcom']))
{
	$userSession = $_SESSION['sessEcom'];
	print('<ul data-role="listview" data-inset="true" data-filter="true">
			<li><a href="Menu.php">เน€เธเธเน€เธเธ‘เน€เธยเน€เธยเน€เธเธเน€เธเธ’เน€เธเธเน€เธเธ’เน€เธเธ</a></li>
			<li><a href="show.php">เน€เธโฌเน€เธยเน€เธยเน€เธยเน€เธยเน€เธเธ”เน€เธเธ…</a></li>
		</ul>
		<p> 

	<ul data-role="listview" data-inset="true" data-theme="d" data-divider-theme="d">
				<li data-role="list-divider">Menu</li>
				<li><a href="contactus.html">Contact Us</a></li>
				<li><a href="logout.php">Logout</a></li>
	</ul>');
	
}
else
{
	print('
	<p> 
	

	<div data-role="content" data-theme="d">	
		<h2>Login</h2>
		<form action="login.php" method="post">
        
		Username : <input type="text" name="user">
		Password :<input type="password" name="pass">
		<br />
		<input type="submit" value="Login">
		</form>

		<p><a href="#one" data-rel="back" data-role="button" data-inline="true" data-icon="back">Close</a></p>	
	</div><!-- /content --> </p>

	<ul data-role="listview" data-inset="true" data-theme="d" data-divider-theme="d">
				<li data-role="list-divider">Menu</li>
                <li><a href="register.php">Register</a></li>
				<li><a href="aboutus.html">About Us</a></li>
				<li><a href="contactus.html">Contact Us</a></li>
	</ul>

</div>
<!-- /page -->



	


');
	exit();
}
?>
	  
  <center>
	  </p>
	<p>&nbsp;</p>
	<p><img src="logo.gif" width="264" height="167"></p>
