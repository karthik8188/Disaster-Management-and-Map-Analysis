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
   include('../condb.php');
    include('missingperson.php');
    echo "<table align='center' border='1'>";
    echo "<tr>";
    echo "<th align='center'>"; echo "Person ID"; echo"</th>";
    echo "<th align='center'>"; echo "First Name"; echo"</th>";
    echo "<th align='center'>"; echo "Last Name"; echo"</th>";
    echo "<th align='center'>"; echo "Age"; echo"</th>";
    echo "<th align='center'>"; echo "Email"; echo"</th>";
    echo "<th align='center'>"; echo "Image"; echo"</th>";
    echo "</tr>";
    $query="select * from person;";
    $run=mysqli_query($con,$query);
    $row=mysqli_fetch_assoc($run);
    if(mysqli_num_rows($run) > 0)
    {
    while($row=mysqli_fetch_assoc($run))
    {
   ?>
   <tr>
       <td><?php echo $data['id']; ?></td>
        "<td>"; echo $row['first_name']; "</td>";
        echo "<td>"; echo $row['last_name']; echo "</td>"; 
        echo "<td>"; echo $row['age']; echo "</td>";
        echo "<td>"; echo $row['email']; echo "</td>";
        echo "<td>"; 
        echo "<img src='".($row['image'])."' />";
        echo "</td>";
        echo "</tr>";
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