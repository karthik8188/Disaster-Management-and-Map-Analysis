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
include('admintitle.php');
include('../condb.php');
$id=$_GET['id'];
$sql="SELECT * from person WHERE id=$id";
$run=mysqli_query($con,$sql);
$data=mysqli_fetch_assoc($run);
?>
<form method="post" action="updatedata.php" enctype="multipart/form-data">
	<table align="center" border="1" style="width:70%; margin-top:40px;">
		<tr>
			<th>person id</th>
			<td><input type="INTEGER" name="id" value=<?php echo $data['id']; ?> required></td>
		</tr>
		<tr>
			<th>First nane</th>
			<td><input type="text" name="first_name" value=<?php echo $data['first_name']; ?> required></td>
		</tr>
		<tr>
			<th>Last Name</th>
			<td><input type="text" name="last_name" value=<?php echo $data['last_name']; ?> required></td>
		</tr>
		<tr>
			<th>Age</th>
			<td><input type="text" name="age" value=<?php echo $data['age']; ?> required></td>
		</tr>
		<tr>
			<th>Email</th>
			<td><input type="text" name="email" value=<?php echo $data['email']; ?> ></td>
		</tr>
		<tr>
			<th>Image</th>
			<td><input type="file" name="image" required> ></td>
		</tr>
		<tr>
			<td colspan="2" align="center">
				<input type="hidden" name="id" value="<?php echo $data['id']; ?>" />
				<input type="submit" name="submit" value="submit"></td>
		</tr>
    </table>
</form>
</body>
</html>