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
session_start();
unset($_SESSION['sessEcom']);
session_destroy();
echo "<meta http-equiv='refresh' content='0; url=index.php'>";
?>