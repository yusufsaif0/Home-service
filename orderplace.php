<?php
include 'header.php';
include 'orderplacef.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Check out</title>
	 <meta charset="utf-8">
	 <link rel="stylesheet" type="text/css" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<div class="row">

	<div class="col-sm-4">
		<h3 style="text-align: center;"><p><b>order list</b></p></h3>
		<?php show(); ?>
	</div>
		<div class="col-sm-8">
		<h4 style="background-color: #303030; color: white;padding-left: 20px; height: 30px; padding-top: 5px;"><b>Service Address<b></h4>
		<?php address(); ?>

<form action="orderplace.php" method="post" >
<a href='orderplace.php?title=$title && price=$price && ip=$ip && description=$desc && name=$name && email=$email && pone=$phone && HouseNumber=$houseNumber && street=$street && District=$District && state=$state && Pincode=$pincode'>
<button class="btn btn-default" name="book"><h5>Book your order</h5></button></a>
</form>
	</div>
</div>
</div>
</body>
<?php
if(isset($_POST['book']))
{
 //$ip=getipadd();
 $name=$_POST['name'];
 $email=$_POST['email'];
 $phone=$_POST['num'];
$houseNumber=$_POST['HouseNumber'];
 $street=$_POST['street'];
 $District=$_POST['District'];
 $state=$_POST['state'];
 $pincode=$_POST['Pincode'];
 $title=$_POST['title'];
  $desc=$_POST['description'];
 $price=$_POST['price'];
  $sql="INSERT INTO `order list`(`name`, `email`, `mobile number`, `house_number`, `street`, `district`, `state`, `pincode`, `title`, `description`, `price`) VALUES ('$name','$email','$phone','$houseNumber','$street','$District','$state','$pincode','$title','$desc','$price')";
 if(mysqli_query($conn,$sql))
 {
  $_SESSION['uname']=$uname;
 header('location:login.php');
}
 else{
  echo "failed".mysqli_error($conn);
 }}

// email
/*
function email()
{  
	if(isset($_post['click']))
	{
	global $email;
	$to=$email;
	$subject="Booking confiorm";
	$message="your bookin gis confiorm we will contact you very soon";
	$header="From:yusufsaif0@gmail.com";
	 $result = mail ($to,$subject,$message,$header);  
  
   if( $result == true ){  
      echo "<script>alert('your booking is confiorm')</script";  
   }else{  
      echo "<script>alert('your booking is failed')</script>";  
   }  
}
}
*/
//Sms
 /*	if(isset($_POST['click']))
 	{
 // Authorisation details.
   // Authorisation details.
	$username = "yusufsaif0@gmail.com";
	$hash = "a2e8ead2a03810867cdca3ba753042f04183ec2fd799c108daa699a7b201f138";

	// Config variables. Consult http://api.textlocal.in/docs for more info.
	$test = "0";

	// Data for text message. This is the text message data.
	$sender = "TXTLCL"; // This is who the message appears to be from.
	$numbers = "7992337665"; // A single number or a comma-seperated list of numbers
	$message = "This is a test message from the PHP API script.";
	// 612 chars or less
	// A single number or a comma-seperated list of numbers
	$message = urlencode($message);
	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	$ch = curl_init('http://api.textlocal.in/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); // This is the result from the API
	curl_close($ch);
	if(! $result)
	{
		echo "<script>alert('message not sent')</script>";
	}
	else {
		echo "<script>alert('Booking Successfully');header('location:index.php');</script>";
		}
}

include 'footer.php';
?>