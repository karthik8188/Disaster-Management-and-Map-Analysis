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
<form method="post" action="deleteDisaster.php">
	<table align="center" border="1" style="width:70%; margin-top:40px;">
		<tr>
			<th>Damage ID</th>
			<td><input type="INTEGER" name="DamID" placeholder="Enter id" required></td>
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
   	$lid=$_POST['DamID'];
   	$query="DELETE FROM Damage WHERE DamID='$lid'";
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