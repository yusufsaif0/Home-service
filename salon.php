<?php 
include 'header2.php';
include'config.php';
include("sfunction.php");?>

<!DOCTYPE html>
<html>
<head>
	<title>Salon</title>
	 <meta charset="utf-8">
	 <link rel="stylesheet" type="text/css" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="jumbotron">
<div class="container">
	<div class="row">
	<div class="col-md-4" style="background-color: lavender;">
	<ul class="list-group">
		<?php
		include 'config.php';
		$sql="SELECT DISTINCT s_title FROM salon";
		$query=mysqli_query($conn,$sql);
		while($run=mysqli_fetch_assoc($query))
		{
			$s_title=$run['s_title'];
		echo "<li class='list-group-item '><a href='salon.php?cat=$s_title'>$s_title</a></li>";
		}
		?>
	</ul>
	</div>
	<div class="col-md-4" style="background-color: lavenderblush;">
		<?php 
		salon(); 
		//catogery();
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