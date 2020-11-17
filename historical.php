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
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-red w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="index.php" class="w3-bar-item w3-button w3-padding-large w3-white">Home</a>
    <a href="map.php" class="w3-bar-item w3-button w3-padding-large w3-white">Map</a>
  </div>
</div>

<!-- Header -->
<header class="w3-container w3-red w3-center" style="padding:50px 16px">
  <h1 class="w3-margin w3-jumbo">Historical data</h1>
</header>
  <form method="post" action="historical.php" enctype="multipart/form-data">
  <table align="center"  style="width:30%; margin-top:40px;">
    <tr>
      <th>Location</th>
      <td  align="left">
      <select name="Cname" align="center">
        <option value="">Select..</option>
        <option value="Benton">Benton</option>
        <option value="Mongomery">Mongomery</option>
        <option value="Putnam">Putnam</option>
        <option value="Clay">Clay</option>
        <option value="Gibson">Gibson</option>
        <option value="Posey">Posey</option>
        <option value="Vanderburg">Vanderburg</option>
        <option value="Warrick">Warrick</option>
        <option value="Pike">Pike</option>
        <option value="Perry">Perry</option>
        <option value="Crawford">Crawford</option>
        <option value="Harrison">Harrison</option>
        <option value="Jefferson">Jefferson</option>
        <option value="Clark">Clark</option>
        <option value="Swizerland">Swizerland</option>
        <option value="Ohio">Ohio</option>
        <option value="Dearborn">Dearborn</option>
        <option value="Franklin">Franklin</option>
        <option value="Hamilton">Hamilton</option>
        <option value="Lawrence">Lawrence</option>
        <option value="Madison">Madison</option>
        <option value="Grant">Grant</option>
      </select>
    </td>
      <td  align="left"><input type="submit" name="submit" value="search"></td>
    </tr>
    </table>
</form>
</body>
</html>
<?php
    if(isset($_POST['submit']))
   {
    include('condb.php');
    $name=$_POST['Cname'];
    $query="select * from disastertype,county,damage where disastertype.DID=damage.DID and damage.CID=county.CID and Cname='$name'";
    echo "<table align='center' border='1'>";
    echo "<tr>";
    echo "<th align='center'>"; echo "DisasterID"; echo"</th>";
    echo "<th align='center'>"; echo "DisasterName"; echo"</th>";
    echo "<th align='center'>"; echo "year of declaration"; echo"</th>";
    echo "<th align='center'>"; echo "IH Program Declared"; echo"</th>";
    echo "<th align='center'>"; echo "IA Program Declared "; echo"</th>";
    echo "<th align='center'>"; echo "PA Program Declared"; echo"</th>";
    echo "<th align='center'>"; echo "cost estimate(USD)"; echo"</th>";
    echo "</tr>";
    $run=mysqli_query($con,$query);
    $row=mysqli_fetch_assoc($run);
    if(mysqli_num_rows($run) > 0)
    {
    while($row=mysqli_fetch_assoc($run))
    {
        echo "<tr>";
        echo "<td>"; echo $row['DID']; echo "</td>";
        echo "<td>"; echo $row['Dtype']; echo "</td>";
        echo "<td>"; echo $row['year_of_declaration']; echo "</td>"; 
        echo "<td>"; echo $row['IH_Program_Declared']; echo "</td>";
        echo "<td>"; echo $row['IA_Program_Declared']; echo "</td>";
        echo "<td>"; echo $row['HM_Program_Declared']; echo "</td>";
        echo "<td>"; echo $row['cost_estimate']; echo "</td>";
        echo "</tr>";
    }
    echo "</table>";
  }
}
?>

<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>
