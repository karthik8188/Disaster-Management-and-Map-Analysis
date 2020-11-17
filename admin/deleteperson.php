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
<form method="post" action="deleteperson.php">
	<table align="center" border="1" style="width:70%; margin-top:40px;">
		<tr>
			<th>Person ID</th>
			<td><input type="INTEGER" name="id" placeholder="Enter id" required></td>
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
   	$query="DELETE FROM person WHERE id='$id'";
   	$run=mysqli_query($con,$query);
   	if($run==true)
   	{
   		?>
   		<script>
   			alert('Data deleted successfully');
   		</script>	
   	<?php
   	}
   }
?>