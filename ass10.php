<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      echo "<h4>Numbers without divided by 3 from 1 to 100 using continue</h4>";
      echo "<br>";
      $x=1;
      while($x<=100){
          if($x%3==0){
              $x++;
              continue;
          }
          echo $x." ";
          $x++;
      }
      ?>
</body>
</html>