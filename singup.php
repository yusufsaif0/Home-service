<?php
session_start();
$host = 'localhost:3306';  
$user = 'root';  
$pass = '';  
$dbname = 'homeservice';  
  
$conn = mysqli_connect($host, $user, $pass,$dbname);  
if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}  
//echo 'Connected successfully<br/>';  
  ?>
<!DOCTYPE html>
<html>
<head>
  <script type="text/javascript" src="javascript\Validate.js"></script>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password], input[type=number] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus, input[type=number]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>
</head>
<body>

<form action="singup.php" name="myform" style="border:1px solid #ccc" method="post" onsubmit="validate()">
  <div class="container">
    <h1>Sign Up</h1>
    <hr>
    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter Your Name" name="name" required>

    <label for="uname"><b>UserName</b></label>
    <input type="text" placeholder="Enter UserName" name="uname" required>

  

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>


    <label for="mobile"><b>Phone Number</b></label>
    <input type="text" placeholder="Enter Mobile Number" name="num" required>
    
    <label for="houseNumber"><b>House Number</b></label>
    <input type="number" placeholder="House Number" name="HouseNumber" required>

    <label for="Street"><b>Street</b></label>
    <input type="text" placeholder="Enter your Street" name="street" required>

    <label for="District"><b>District</b></label>
    <input type="text" placeholder="Enter your District" name="District" required>

    <label for="state"><b>State</b></label>
    <input type="text" placeholder="Enter your State" name="state" required>

     <label for="pincode"><b>pincode</b></label>
    <input type="number" placeholder="Enter your Pincode" name="Pincode" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw" required>
    
      
    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
    <button type="submit" class="signupbtn" name="submit">Sign Up</button>    </div>
  </div>
</form>

</body>
</html>

<?php
include 'config.php';

function getipadd(){
@$http_client_ip=$_SERVER['HTTP_CLIENT_IP'];
@$http_forwarded_for=$_SERVER['HTTP_FORWARDED_FOR'];
$remote_addr=$_SERVER['REMOTE_ADDR'];

  if(!empty($http_client_ip))
{
  $ipaddress=$http_client_ip;
}
else if(!empty($http_forwarded_for))
{
  $ipaddress=$http_forwarded_for;
}
else if(!empty($remote_addr))
{
  $ipaddress=$remote_addr;
  return $ipaddress;
}
}
if(isset($_POST['submit']))
{
 $ip=getipadd();
 $uname=$_POST['name'];
 $name=$_POST['uname'];
 $email=$_POST['email'];
 $phone=$_POST['num'];
 $houseNumber=$_POST['HouseNumber'];
 $street=$_POST['street'];
 $District=$_POST['District'];
 $state=$_POST['state'];
 $pincode=$_POST['Pincode'];
 $psw=$_POST['psw'];
  $sql="INSERT INTO singup VALUES('','$name','$uname','$email','$phone','$houseNumber','$street','$District','$state','$pincode','$psw','$ip')";
 if(mysqli_query($conn,$sql))
 {
  $_SESSION['uname']=$uname;
 header('location:login.php');
}
 else{
  echo "failed".mysqli_error($conn);
 }}
?>

