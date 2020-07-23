<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
   $num=array(14,23,45,8,98,56,3,44,61,19);
   sort($num);
   echo "<h4>Sorting Array</h4>";
   foreach($num as $val){
       echo $val." ";

   }
   echo "<br>";
   echo "<br>";
   echo "Largest number=".$num[count($num)-1];
   echo "<br>";
   echo "Second Largest number=".$num[count($num)-2];
   echo "<br>";
   echo "<br>";
   echo "Smallest number=".$num[0];
   echo "<br>";
   echo "Second Smallest number=".$num[1];
   ?>
</body>
</html>