<?php
session_start();
if(isset($_SESSION['Uid']))
{
	echo "";
}
else
{
	header('location:login.php');
}
?>
<?php
include('header.php');
include('admintitle.php')
?>
<form method="post" action="addperson.php" enctype="multipart/form-data">
	<table align="center" border="1" style="width:70%; margin-top:40px;">
		<tr>
			<th>Person Id</th>
			<td><input type="INTEGER" name="id" placeholder="Enter id" required></td>
		</tr>
		<tr>
			<th>First Name</th>
			<td><input type="text" name="first_name" placeholder="Enter first name" required></td>
		</tr>
		<tr>
			<th>Last Name</th>
			<td><input type="text" name="last_name" placeholder="Enter last name" required></td>
		</tr>
		<tr>
			<th>Age</th>
			<td><input type="INTEGER" name="age" placeholder="Enter age" required></td>
		</tr>
		<tr>
			<th>Email</th>
			<td><input type="text" name="email" placeholder="Enter email" required></td>
		</tr>
		<tr>
			<th>Image</th>
			<td><input type="file" name="image" required></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" name="submit" value="Submit"></td>
		</tr>
    </table>
</form>
</body>
</html>
<?php
   if(isset($_POST['submit']))
   {
   	include('../condb.php');
   	$id=$_POST['id'];
   	$Fname=$_POST['first_name'];
   	$Lname=$_POST['last_name'];
   	$age=$_POST['age'];
   	$Email=$_POST['email'];
   	$img=$_FILES['image']['name'];

   	$tempname=$_FILES['image']['tmp_name'];

   	move_uploaded_file($tempname,"../dataimg/$img");

   	$query="INSERT INTO person (id,first_name,last_name,age,email,image) VALUES ('$id','$Fname','$Lname',$age,'$Email','$img')";
   	$run=mysqli_query($con,$query);
   	if($run==true)
   	{
   		?>
   		<script>
   			alert('Data entered successfully');
   		</script>	
   	<?php
   	}
   }
?>

