<?php
include('../condb.php');
   	$damid=$_POST['DamID'];
      $year=$_POST['year_of_declaration'];
      $IH=$_POST['IH_Program_Declared'];
      $IA=$_POST['IA_Program_Declared'];
      $PA=$_POST['HM_Program_Declared'];
      $cost=$_POST['cost_estimate'];
      $did=$_POST['DID'];
      $cid=$_POST['CID'];
   	$query="UPDATE `damage` SET `DamID`='$damid',`year_of_declaration`='$year',`IH_Program_Declared`='$IH',`IA_Program_Declared`='$IA',`HM_Program_Declared`='$PA',`cost_estimate`='$cost',`DID`='$did',`CID`='$cid' WHERE DamID='$damid'";
   	$run=mysqli_query($con,$query);
   	if($run==true)
   	{
   		?>
   		<script>
   			alert('Data Updated successfully');
   			window.open('uform.php?damid=<?php echo $damid;?>','_self');
   		</script>	
   	<?php
   	}
  ?>