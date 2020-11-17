<!DOCTYPE html>
<html lang="en">
<title>Disaster Mangement System</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
</style>


<form method="post" action="displaydisaster.php" enctype="multipart/form-data">
</form>
</html>
<?php
  
    include('../condb.php');
    include('missingperson.php');
    echo "<table align='center' border='1'>";
    echo "<tr>";
    echo "<th align='center'>"; echo "Person ID"; echo"</th>";
    echo "<th align='center'>"; echo "First Name"; echo"</th>";
    echo "<th align='center'>"; echo "Last Name"; echo"</th>";
    echo "<th align='center'>"; echo "Age"; echo"</th>";
    echo "</tr>";
    $query="select * from person;";
    $run=mysqli_query($con,$query);
    $row=mysqli_fetch_assoc($run);
    if(mysqli_num_rows($run) > 0)
    {
    while($row=mysqli_fetch_assoc($run))
    {
        echo "<tr>";
        echo "<td>"; echo $row['id']; echo "</td>";
        echo "<td>"; echo $row['first_name']; echo "</td>";
        echo "<td>"; echo $row['last_name']; echo "</td>"; 
        echo "<td>"; echo $row['age']; echo "</td>";
        echo "</tr>";
    }
    echo "</table>";
  }

?>