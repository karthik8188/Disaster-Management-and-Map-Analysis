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
<form method="post" action="addDisaster.php" enctype="multipart/form-data">
	<table align="center" border="1" style="width:70%; margin-top:40px;">
		<tr>
			<th>Damage Id</th>
			<td><input type="INTEGER" name="DamID" placeholder="Enter id" required></td>
		</tr>
		<tr>
			<th>Year of Declaration</th>
			<td><input type="text" name="year_of_declaration" placeholder="Enter year" required></td>
		</tr>
		<tr>
			<th>IH Program Declared</th>
			<td><input type="text" name="IH_Program_Declared" placeholder="Enter IH" required></td>
		</tr>
		<tr>
			<th>IA Program Declared </th>
			<td><input type="text" name="IA_Program_Declared" placeholder="Enter IA" required></td>
		</tr>
		<tr>
			<th>PA Program Declared</th>
			<td><input type="text" name="HM_Program_Declared" placeholder="Enter PA " required></td>
		</tr>
		<tr>
			<th>Total Cost</th>
			<td><input type="text" name="cost_estimate" placeholder="Enter cost" required></td>
		</tr>
		<tr>
			<th>DID</th>
			<td><input type="text" name="DID" placeholder="Enter did" required></td>
		</tr>
		<tr>
			<th>CID</th>
			<td><input type="text" name="CID" placeholder="Enter cid" required></td>
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
   	$damid=$_POST['DamID'];
   	$year=$_POST['year_of_declaration'];
   	$IH=$_POST['IH_Program_Declared'];
   	$IA=$_POST['IA_Program_Declared'];
   	$PA=$_POST['HM_Program_Declared'];
   	$cost=$_POST['cost_estimate'];
   	$did=$_POST['DID'];
   	$cid=$_POST['CID'];

   	$query="INSERT INTO damage (DamID,year_of_declaration,IH_Program_Declared,IA_Program_Declared,HM_Program_Declared,cost_estimate,DID,CID) VALUES ('$damid','$year','$IH','$IA','$PA','$cost','$did','$cid')";
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