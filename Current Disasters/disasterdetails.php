<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  padding: 0 5px;
}

.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 10px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #444;
  color: white;
}

.fa {font-size:50px;}
</style>
</head>
<body>

<a href='current.php'>Back</a>
<h2>Current Disaster Details</h2>
<p>Updated Information regarding the ongoing disaster</p>
<br>

<div class="row">
  <div class="column">
    <a href="displaydisaster.php"><div class="card">
      <p><font color="white"><i class="fa fa-user"></i></font></p>
      <h3><font color="white">11+</font></h3>
      <p><font color="white">Missing People</font></p>
    </a>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <p><i class="fa fa-check"></i></p>
      <h3>55+</h3>
      <p>Confirmed Casualities</p>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <p><i class="fa fa-star"></i></p>
      <h3>100+</h3>
      <p>People Evacuated</p>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <p><i class="fa fa-street-view"></i></p>
      <h3>5+</h3>
      <p>Counties Affected</p>
    </div>
  </div>
</div>

</body>
</html>