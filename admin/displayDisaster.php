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
<form method="post" action="displayDisaster.php" enctype="multipart/form-data">
	<table align="center"  style="width:30%; margin-top:40px;">
		<tr>
			<th>COUNTY NAME</th>
			<td align="left"><input type="text" name="name" placeholder="Enter name" required></td>
			<td  align="left"><input type="submit" name="submit" value="search"></td>
		</tr>
    </table>
</form>
</body>
</html>
<table align="center" width="80%" border="1" style="margin-top:10px;">
	<tr>
		<th>Name</th>
		<th>sum(loss)</th>
	</tr>
<?php
   if(isset($_POST['submit']))
   {
   	include('../condb.php');
   	$name=$_POST['name'];
   	$query="select name,sum(loss) from location,damages where location.LID=damages.LID and name='$name' GROUP BY name ORDER by sum(loss);";
   	$run=mysqli_query($con,$query);
   	$data=mysqli_fetch_assoc($run);
   	if($run==true)
   	{
   	?>
   		<tr>
    		<td align="center"><?php echo $data['name']; ?></td>
		 	<td align="center"><?php echo $data['sum(loss)']; ?></td>
		 </tr>
	</table>
	<?php
   	}
   }
?>