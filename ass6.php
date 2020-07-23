<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>">
    Enter a number:<br>
    <input type="number" name="name"><br>
    <input type="submit" value="Submit" name="submit">
    </form>
    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $input=$_REQUEST['name'];
        $result=1;
        if($input!=0 && $input!=1){
          for($x=$input;$x>0;$x--){
              $result *=$x;
        }
        echo "$input!= ";
        echo $result;
    }
    else{
        echo "$input!= ";
        echo 1;
    }
}
?>
</body>
</html>