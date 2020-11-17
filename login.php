<?php
session_start();
if(isset($_SESSION['Uid']))
{
	header('location:admin/admindash.php');
}
?>
<!DOCTYPE HTML>
<html lang="en_US">
<head>
	<meta charset="UTF-8">
	<title>Admin page</title>
</head>
<body>
	<h1 align='center'>Admin login</h1>
	<form action="login.php" method="post">
		<table align='center'>
			<tr>
				<td>Username</td><td><input type="text" name="uname" required></td>
			</tr>
			<tr>
				<td>Password</td><td><input type="password" name="pass" required></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="Login" value="Login"></td>
			</tr>
		</table>
	</form>
</body>
</html>
<?php
include('condb.php');
if(isset($_POST['Login']))
{
	$username=$_POST['uname'];
	$password=$_POST['pass'];
	$query="SELECT * from admin where username='$username' and password='$password'";
	$run=mysqli_query($con,$query);
	$row=mysqli_num_rows($run);
	if($row<1)
	{
		?>
		<script>
			alert('username and password not match');
			window.open('login.php','_self');
		</script>_
		<?php
	}
	else
	{
		$data=mysqli_fetch_assoc($run);
		$id=$data['id'];
        $_SESSION['Uid']=$id;
        header('location:admin/admindash.php');
	}
}
?>