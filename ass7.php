<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     echo "<h3>Two digit decimal combination</h3>";
     for($x=0;$x<100;$x++){
         if(strlen((string)$x)<2){
             echo "0";
             echo $x;
             echo ",";
             echo " ";
         }
         else{
             echo $x;
             echo ",";
             echo " ";
         }
     }
     ?>
</body>
</html>