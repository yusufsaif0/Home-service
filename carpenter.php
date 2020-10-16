<?php 
//include 'header2.php';
include'config.php';
include("cfunction.php");?>

<!DOCTYPE html>
<html>
<head>
	<title>carpenter</title>
	 <meta charset="utf-8">
	 <link rel="stylesheet" type="text/css" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="jumbotron">
<div class="container-fluid">
	<nav class="navbar navbar-expand-md bg-warning navbar-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="nav navbar-nav">
     <?php
		include 'config.php';
		$sql="SELECT DISTINCT c_title FROM carpenter";
		$query=mysqli_query($conn,$sql);
		while($run=mysqli_fetch_assoc($query))
		{
			$c_title=$run['c_title'];
		echo "<li class='nav-item'><a href='carpenter.php?cat=$c_title'>$c_title</a></li>";
		}
		$ip=getipadd();
		?>
    </ul>
  </div>  
</nav>
	<div class="col-md-4" style="background-color: lavenderblush;">
		<?php 
		carpenter(); 
		catogery();
		?>
	</div>
	<div class="col-md-4" style="background-color: lavender;">
		<a href='orderplace.php?title=$title && price=$price && ip=$ip && description=$desc'><button class="btn btn-default"><h5>BOOK SERVICE</h5><?php cart(); ?></button></a>
	</div>
	</div>
</div>
</div>
</body>
</html>
<?php
include 'footer.php';
?>