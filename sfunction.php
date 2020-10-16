<?php

$conn=mysqli_connect("localhost","root","","homeservice") or die("connection failed".mysqli_error());


//get ip address

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

//cart function
function cart()
{
global $conn;
if(isset($_GET['cart']))
{	
$title=$_GET['cart'];
$price=$_GET['price'];
$desc=$_GET['description'];
$ip=getipadd();
$check_pro="select * from cart where ip_add='$ip' AND price='$price'";
$query=mysqli_query($conn,$check_pro);
if(mysqli_num_rows($query) > 0)
{
  echo "";
}
else
{
	$insert="insert into cart values('','$title','$desc','$ip','$price')";
	mysqli_query($conn,$insert);
}
}
}

// default content

function salon()
{ 
	global $conn;
	if(!isset($_GET['cat'])){
 $sql="select * from salon where s_title='facial'";
 $query=mysqli_query($conn,$sql);
 while($run=mysqli_fetch_assoc($query))
 {
$title=$run['s_title'];
$img=$run['img'];
$desc=$run['description'];
$price=$run['price'];
echo "

<div id='single_product'>
<h5><b>$title</b></h5>
<div class='row'>
<div class='col-md-4'>
<img src='image/$img' width='100px' height='60px'>
<h5>Price &#8377 $price</h5>
</div>
<div class='col-md-8'>
<h5>Description $desc</h5>
 <a href='salon.php?cart=$title && price=$price && description=$desc'><button class='btn btn-default'>Add to cart</button></a></div>
</div>
</div>
";
}
}
if(isset($_GET['cat'])){
		$s_title=$_GET['cat'];
 $sql="select * from salon where s_title='$s_title'";
 $query=mysqli_query($conn,$sql);
 while($run=mysqli_fetch_assoc($query))
 {
$title=$run['s_title'];
$img=$run['img'];
$desc=$run['description'];
$price=$run['price'];
echo "

<div id='single_product'>
<h5><b>$title</b></h5>
<div class='row'>
<div class='col-md-4'>
<img src='image/$img' width='100px' height='60px'>
<h5>Price &#8377 $price</h5>
</div>
<div class='col-md-8'>
<h5>Description $desc</h5>
<a href='salon.php?cart=$title && price=$price && description=$desc'><button class='btn btn-default'>Add to cart</button></a>
</div>
</div>
</div>
";
}
}
}
?>


