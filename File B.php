<!DOCTYPE html>
<html>
  <body>
<?php
$a=array("Volvo"=>"XC90","BMW"=>"X5","Saab"=>"71");
if (array_key_exists("Volvo",$a))
   {
   echo "Hi, Key exists!";
   }
else
   {
   echo "Woo, Key does not exist!";
   }
    ?>
  </body>
</html>