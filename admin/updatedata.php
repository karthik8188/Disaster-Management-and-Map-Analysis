<?php
include('../condb.php');
   	$id=$_POST['id'];
   	$Fname=$_POST['first_name'];
   	$Lname=$_POST['last_name'];
   	$age=$_POST['age'];
   	$Email=$_POST['email'];
   	$img=$_FILES['image']['name'];

   	$tempname=$_FILES['image']['tmp_name'];

   	move_uploaded_file($tempname,"../dataimg/$img");
   	$query="UPDATE `person` SET `first_name`='$Fname',`last_name`='$Lname',`age`='$age',`email`='$Email',`image`='$img' WHERE id=$id";
   	$run=mysqli_query($con,$query);
   	if($run==true)
   	{
   		?>
   		<script>
   			alert('Data Updated successfully');
   			window.open('updateform.php?id=<?php echo $id;?>','_self');
   		</script>	
   	<?php
   	}
  ?>