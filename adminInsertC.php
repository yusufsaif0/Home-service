<!DOCTYPE html>
<html>
<head>
	<title>Insert Recorde</title>
</head>
<body>
<form action="admininsertC.php" method="post" enctype="multipart/form-data">
	<table border="1px" align="center">
		<tr>
			<th colspan="2" align="center">Insert Data</th>
		</tr>
		<tr>
			<td>Title</td>
			<td><input type="text" name="title"></td>
		</tr>
			<tr>
			<td>Image</td>
			<td><input type="file" name="img"></td>
		</tr>
		<tr>
			<td>Description</td>
			<td><input type="text" name="desc"></td>
		</tr>
		<tr>
			<td>Price</td>
			<td><input type="text" name="price"></td>
		</tr>
		<tr >
			<td colspan="2" align="center"><input type="submit" name="submit"></td>
		</tr>
	</table>
</form>
</body>
</html>
<?php
include'config.php';
if(isset($_POST['submit']))
{
	$title=$_POST['title'];
	$img=$_FILES['img']['name'];
	$desc=$_POST['desc'];
	$price=$_POST['price'];
	$img_temp=$_FILES['img']['tmp_name'];
	move_uploaded_file($img_temp,"image/$img");
	$sql="insert into carpenter(c_title,img,description,price) values('$title','$img','$desc','$price')";
	if(mysqli_query($conn,$sql))
	{
		echo "<script>alert('insert successfully')</script>";
	}
	else
	{
		echo "failed".mysqli_error($conn);
	}
}


?>


