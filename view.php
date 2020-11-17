<HTML>
<?php
$db = mysqli_connect("localhost", "root", "");
mysqli_select_db("office",$db);
$result = mysqli_query("SELECT * FROM employees",$db);
echo "<TABLE>";
echo"<TR><TD><B>ssn</B><TD><B>Name</B><TD><B>lot</B></TR>";
while ($myrow = mysqli_fetch_array($result))
{
echo "<TR><TD>";
echo $myrow["ssn"];
echo $myrow["name"];
echo $myrow["lot"];
}
echo "</TABLE>";
?>
</HTML>