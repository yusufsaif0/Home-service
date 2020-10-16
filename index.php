<?php 
  session_start(); 
if (!isset($_SESSION['uname'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  } 
  ?>
<!DOCTYPE html>
<html>
<head>
	<title>Home Service</title>

</head>
<body>
<?php include 'header.php'; ?>
<?php include 'home.php'; ?>
<?php include 'footer.php';?>
</body>
</html>


