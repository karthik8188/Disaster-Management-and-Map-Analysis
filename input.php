<HTML>
<?php
if($submit)
    {
       $db = mysqli_connect("localhost", "root","");
       mysqli_select_db("office",$db);
       $sql = "INSERT INTO personnel (ssn, name, lot) VALUES ('$ssn','$name','$lot')";
       $result = mysqli_query($sql);
       echo "Thank you! Information entered.\n";
    }
else
   {
   ?>
     <form method="post" action="input.php">
     ssn:<input type="int" name="ssn"><br>
     name:<input type="Text" name="name"><br>
     lot:<input type="Text" name="lot"><br>
     <input type="Submit" name="submit" value="Enter information"></form>
   <?
   }
?>
</HTML>