<?php
include 'config.php';
include 'function.php';
 function show()
{

 global $conn;
//if(isset($_GET['title']))
//{

//$title=$_GET['title'];
//$desc=$_GET['description'];
//$ip=$_GET['ip'];
//$price=$_GET['price']; 
//select sum of price

$sql="select * from cart where ip_add='::1'";

if($query=mysqli_query($conn,$sql))
{ 
 while($run=mysqli_fetch_assoc($query))
{
$title=$run['title'];
$desc=$run['description'];
$price=$run['price'];
$ip=$run['ip_add'];


echo "
<div id='single_product'>
<div class='row'>
<div class='col-sm-2'>
<h5><b>$title</b></h5>

</div>
<div class='col-sm-7'>
<h5><b>$desc</b></h5>
</div>
<div class='col-sm-3'>

<h5>&#8377 $price</h5>

</div>
</div>
</div>
";

}
}

}
function address()
{
	global $conn;
$sql="select * from singup where ip='::1'";

if($query=mysqli_query($conn,$sql))
{ 
 while($run=mysqli_fetch_assoc($query))
{
$name=$run['Name'];
$mobile=$run['mobile'];
$email=$run['email'];
$hn=$run['houseNumber'];
$street=$run['street'];
$dis=$run['District'];
$state=$run['state'];
$pincode=$run['pincode'];
echo "
<div id='single_product'>
<div class='row'>
<div class='col-sm-2'>
<h5><b>$name</b></h5>
</div>
<div class='col-sm-10'>
<h5><b>$hn, $street, $dis, $state, $pincode, $mobile</b></h5>
</div>
</div>
</div>

";
}
}
}


?>
