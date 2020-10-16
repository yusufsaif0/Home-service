<?php 
  session_start(); 
if (isset($_SESSION['uname'])) {
  $lg=$_SESSION['uname'];
    
  } 
  if (isset($_GET['logout'])) { 
    session_destroy(); 
    unset($_SESSION['username']); 
    header("location: login.php"); 
} 
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home Service</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
  .navbar-nav > li{
  padding-left:10px;
  padding-right:20px;
}
.navbar-nav >li:hover{
background-color:silver;
}
li{
  list-style-type: none;
}
.navbar { margin-bottom:0px !important; }

</style>
<body>

<nav class="navbar navbar-expand-md bg-light navbar-light navbar-fixed-top">
  <a class="navbar-brand" href="index.php">Home Service</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="nav navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="">Work with us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="blog.php">Blog</a>
      </li> 
      <li class="nav-item">
        <a class="nav-link" href="Contact.php">Contact Us</a>
      </li>    
    </ul>
   <ul class="nav navbar-nav navbar-right">
<li>
    
  <button class="btn btn-xs dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">
    <?php echo $lg ?>
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a href="index.php?logout='1'" style="color: red;"> 
                  Logout
                </a> 
   </div></li>
    </ul>
  </div>  
</nav>



</body>
</html>


