<?php
session_start();
if(isset($_SESSION['Uid']))
{
	echo "";
}
else
{
	header('location:../login.php');
}
?>
<?php
include('header.php');
?>
       <div class="admintitle" align="center" style="background-color:#530602; color:#fff; margin-left:50px; margin-right:50px; height:70px;">
       	    <h4><a href="logout.php" style="float:right; margin-right:30px; color:#fff">Logout</a></h4>
       	    <h4><a href="../index.php" style="float:left; margin-left:30px; color:#fff">Go To Home Page</a></h4>
	        <h1>Welcome to Admin Dashboard</h1>
       </div>
       <div class="dashboard" align="center">
       	   <table>
       	   	  <tr>
       	   	  	<td><a href="addDisaster.php" style="font-size: 25px; text-decoration: none;">Add disaster details</a></td>
       	   	  </tr>
       	   	  <tr>
       	   	  	<td><a href="udisaster.php" style="font-size: 25px; text-decoration: none;">Update disaster details</a></td>
       	   	  </tr>
       	   	  <tr>
       	   	  	<td><a href="deleteDisaster.php" style="font-size: 25px; text-decoration: none;">Delete disaster details</a></td>
       	   	  </tr>
       	   	  <tr>
       	   	  	<td><a href="addperson.php" style="font-size: 25px; text-decoration: none;">Add Missing Person details</a></td>
       	   	  </tr>
       	   	  <tr>
       	   	  	<td><a href="updateDisaster.php" style="font-size: 25px; text-decoration: none;">Update Missing Person details</a></td>
       	   	  </tr>
       	   	  <tr>
       	   	  	<td><a href="deleteperson.php" style="font-size: 25px; text-decoration: none;">Delete Missing Person details</a></td>
       	   	  </tr>
       	   </table>
       	</div>

