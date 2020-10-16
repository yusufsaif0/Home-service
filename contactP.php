<?php
$conn=mysqli_connect("localhost","root","","homeservice") or die("connection failed".mysqli_error());

$name=$_POST['name'];
$option=$_POST['country'];
$subject=$_POST['subject'];
$sql="INSERT INTO contact VALUES ('','$name','$option','$subject')";
if(mysqli_query($conn,$sql))
{
  echo "<script>alert('we will contact you soon')</script>";
    echo "<script>header('location:index.php')</script>";
}
else {
  echo "error".mysqli_error($conn);
}


?>
