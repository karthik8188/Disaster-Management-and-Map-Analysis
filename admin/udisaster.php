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
<form method="post" action="udisaster.php">
	<tr>
		<th>Damage Id</th>
		<td><input type='INTEGER' name='DamID' placeholder="Enter id " required="required" /></td>
		<th>Year</th>
		<td><input type='text' name='year_of_declaration' placeholder="Enter first name " required="required" /></td>
		<td colspan="2" align="center"><input type="submit" name="submit" value="search"></td>
	</tr>
</form>
</table>
<table align="center" width="80%" border="1" style="margin-top:10px;">
	<tr>
		<th>DamID</th>
		<th>year of declaration</th>
		<th>IH Program Declared</th>
		<th>IA Program Declared</th>
		<th>PA Program Declared</th>
		<th>cost estimate</th>
		<th>DID</th>
		<th>CID</th>
		<th>Edit</th>
	</tr>
<?php
   if(isset($_POST['submit']))
   {
   	include('../condb.php');
   	$damid=$_POST['DamID'];
   	$year=$_POST['year_of_declaration'];
   	$sql="SELECT * from damage where DamID='$damid' and year_of_declaration='$year'";
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
    		<td><?php echo $data['DamID']; ?></td>
		 	<td><?php echo $data['year_of_declaration']; ?></td>
			<td><?php echo $data['IH_Program_Declared']; ?></td>
			<td><?php echo $data['IA_Program_Declared']; ?></td>
			<td><?php echo $data['HM_Program_Declared']; ?></td>
			<td><?php echo $data['cost_estimate']; ?></td>
			<td><?php echo $data['DID']; ?></td>
			<td><?php echo $data['CID']; ?></td>
			<td><a href="uform.php?damid=<?php echo $data['DamID']; ?>">Edit</a></td>
		</tr>
	</table>
          <?php
    	}

    }		
   }
?>

