<?php
$iddelete = $_POST["textiddelete"];
include("../config.php");

$sqldelete = "DELETE FROM food WHERE ProductID ='$iddelete'";

mysql_query($sqldelete,$con);

mysql_close($con);
echo '<script>alert("ź�Թ�������")</script>'; 
echo "<script>window.location='index.php'</script>"; 
?>