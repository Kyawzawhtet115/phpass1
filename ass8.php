<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<h3>Table Format</h3>";
    echo "<table border='1' style='border-collapse:collapse'>";
    for($x=1;$x<=10;$x++){
        echo "<tr>";
        for ($y=1;$y<=10;$y++){
            echo "<td>" .$x*$y."</td>";
        }
        echo "</tr>";
    }    
     echo "</table>"; 
    ?>
</body>
</html>