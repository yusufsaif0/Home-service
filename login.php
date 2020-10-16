<?php
session_start();
include 'config.php';
?>
<!DOCTYPE html>
<html>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
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
.cancelbtn, .loginbtn {
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
<body>

<form action="login.php" style="border:1px solid #ccc" method="post">
  <div class="container">
    <h1>Login</h1>
    <hr>
    <label for="uname"><b>UserName</b></label>
    <input type="text" placeholder="Enter UserName" name="uname">

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw">
    
      
    <p><a href="singup.php" style="color:dodgerblue">Singup</a>.</p>

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
    <button type="submit" class="loginbtn" name="submit">Login</button>    </div>
  </div>
</form>

</body>
</html>

<?php
if(isset($_POST['submit']))
{
  $UserName=$_POST['uname'];
  $password=$_POST['psw'];
  $sql="select * from singup where uname='$UserName' AND password='$password'";
  $query=mysqli_query($conn,$sql);
  if(mysqli_num_rows($query)==1)
  {
    $_SESSION['uname']=$UserName;
    header('location:index.php');
  }
  else
  {
    echo "<script>alert('username or password is wrong')</script>";
  }
}



?>