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
<table align="center">
<form method="post" action="updateDisaster.php">
	<tr>
		<th>Enter Id</th>
		<td><input type='INTEGER' name='id' placeholder="Enter id " required="required" /></td>
		<th>Enter First Name</th>
		<td><input type='text' name='first_name' placeholder="Enter first name " required="required" /></td>
		<td colspan="2" align="center"><input type="submit" name="submit" value="search"></td>
	</tr>
</form>
</table>
<table align="center" width="80%" border="1" style="margin-top:10px;">
	<tr>
		<th>Id</th>
		<th>First name</th>
		<th>Last Name</th>
		<th>Age</th>
		<th>Email</th>
		<th>Image</th>
		<th>Edit</th>
	</tr>
<?php
   if(isset($_POST['submit']))
   {
   	include('../condb.php');
   	$id=$_POST['id'];
   	$name=$_POST['first_name'];
   	$sql="SELECT * from person where id='$id' and first_name LIKE '%$name%'";
   	$run=mysqli_query($con,$sql);
   	if(mysqli_num_rows($run)<1)
   	{
   		echo "No records found!";
   	}
    else
    {
    	$count=0;
    	while($data=mysqli_fetch_assoc($run))
    	{
    		$count++
    		?>
    		<tr>
    		<td><?php echo $data['id']; ?></td>
		 	<td><?php echo $data['first_name']; ?></td>
			<td><?php echo $data['last_name']; ?></td>
			<td><?php echo $data['age']; ?></td>
			<td><?php echo $data['email']; ?></td>
			<td><img src="../dataimg/<?php echo $data['image']; ?>" style="max-width:100px;"</td>
			<td><a href="updateform.php?id=<?php echo $data['id']; ?>">Edit</a></td>
		</tr>
	</table>
          <?php
    	}

    }		
   }
?>

