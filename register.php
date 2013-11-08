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
<div data-role="page" class="type-interior">
 
<div data-role="header" data-theme="f">
		<h1>Register</h1></div>

<form id="member" form action="regis.php" method="post">
          <label for="basic">Username:</label>
      <input type="text" name="user" id="user" value=""  />
      <label for="basic">Password:</label>
      <input type="password" name="pass" id="pass" value=""  />
        <label for="basic">Name:</label>
      <input type="text" name="name" id="name" value=""  />
      <label for="textarea">Address:</label>
      <textarea name="add" id="add"></textarea>
      <label for="basic">Tel:</label>
      <input type="text" name="tel" id="tel" value=""  />
      <label for="basic">Mobile:</label>
      <input type="text" name="mobile" id="mobile" value=""  />

  <input type="submit" data-role="button" data-inline="true" value="Submit" ied- />
  
<a href="index.php" data-role="button" data-role="button" data-inline="true">Cancle</a></p>
	</form>
    
</body>

</html>