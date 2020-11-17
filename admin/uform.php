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
$damid=$_GET['damid'];
$sql="SELECT * from damage WHERE DamID='$damid'";
$run=mysqli_query($con,$sql);
$data=mysqli_fetch_assoc($run);
?>
<form method="post" action="udata.php">
	<table align="center" border="1" style="width:70%; margin-top:40px;">
		<tr>
			<th>Damage id</th>
			<td><input type="INTEGER" name="DamID" value=<?php echo $data['DamID']; ?> required></td>
		</tr>
		<tr>
			<th>year of declaration</th>
			<td><input type="text" name="year_of_declaration" value=<?php echo $data['year_of_declaration']; ?> required></td>
		</tr>
		<tr>
			<th>IH Program Declared</th>
			<td><input type="text" name="IH_Program_Declared" value=<?php echo $data['IH_Program_Declared']; ?> required></td>
		</tr>
		<tr>
			<th>IA Program Declared</th>
			<td><input type="text" name="IA_Program_Declared" value=<?php echo $data['IA_Program_Declared']; ?> required></td>
		</tr>
		<tr>
			<th>PA Program Declared</th>
			<td><input type="text" name="HM_Program_Declared" value=<?php echo $data['HM_Program_Declared']; ?> required></td>
		</tr>
		<tr>
			<th>Total Cost</th>
			<td><input type="text" name="cost_estimate" value=<?php echo $data['cost_estimate']; ?> required></td>
		</tr>
		<tr>
			<th>DID</th>
			<td><input type="text" name="DID" value=<?php echo $data['DID']; ?> ></td>
		</tr>
		<tr>
			<th>CID</th>
			<td><input type="text" name="CID" value=<?php echo $data['CID']; ?> ></td>
		</tr>
		<tr>
			<td colspan="2" align="center">
				<input type="hidden" name="DamID" value="<?php echo $data['DamID']; ?>" />
				<input type="submit" name="submit" value="submit"></td>
		</tr>
    </table>
</form>
</body>
</html>