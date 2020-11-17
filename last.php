
<?php
$db = mysqli_connect("localhost", "root","");
if (!$db) {
    die("Database connection failed: " . mysqli_error());
}
$db_insert = mysqli_select_db($db,"dis");
if (!$db_insert) {
    die("Database selection failed: " . mysqli_error($db));
}
$sql = "INSERT INTO damages (DamID, DamDate, loss,LID,DID) VALUES ('$_POST[DamID]','$_POST[DamDate]','$_POST[loss]','$_POST[LID]','$_POST[DID]')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>

