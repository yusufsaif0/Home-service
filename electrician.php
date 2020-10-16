<?php 
//include 'header.php';
include'config.php';
include("function.php");?>

<!DOCTYPE html>
<html>
<head>
	<title>Electrician</title>
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
<style type="text/css">
.nav-item{
text-align: center;
	}
</style>
<body>
<div class="jumbotron">
<div class="container-fluid shadow-lg p-3 mb-5 bg-white rounded">
	<nav class="navbar navbar-expand-md bg-warning navbar-dark shadow-sm p-3 mb-5 bg-white rounded">
  <button class="navbar-toggler btn-primary" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="nav navbar-nav">
     <?php
		include 'config.php';
		$sql="SELECT DISTINCT e_title FROM electrician";
		$query=mysqli_query($conn,$sql);
		while($run=mysqli_fetch_assoc($query))
		{
			$e_title=$run['e_title'];
		echo "<li class='nav-item shadow-sm p-3 mb-5 bg-light rounded'><a href='electrician.php?cat=$e_title'>$e_title</a></li>";
		}
		$ip=getipadd();
		?>
    </ul>
  </div>  
</nav>
	<div class="col-md-4 shadow-sm p-3 mb-5 bg-light rounded" style="background-color: lavenderblush;">
		<?php 
		sw(); 
		catogery();
		?>
	</div>
	<div class="col-md-3 shadow-sm p-3 mb-5 bg-white rounded" style="background-color: lavender;">

	<a href='orderplace.php?title=$title && price=$price && ip=$ip && description=$desc'><button class="btn btn-default"><h5>Go To Cart</h5><?php cart(); ?></button></a>
	</div>
	</div>
</div>
</div>
</body>
</html>
<?php
include 'footer.php';
?>