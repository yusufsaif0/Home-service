<?php
include 'config.php';

  $n=$_POST['name'];
  $nm=$_POST['phone'];
  $e=$_POST['email'];
  $s=$_POST['service'];
  $sb=$_POST['country'];
$sql="INSERT INTO member VALUES ('','$n','$nm','$e','$s','$sb')";
if(mysqli_query($conn,$sql))
{
  echo "<script>alert('we will contact you soon')</script>";
    
}
else {
  echo "error".mysqli_error($conn);
}

?>