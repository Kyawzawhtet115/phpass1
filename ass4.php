<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    Enter a string.....<br>
    <input type="text" name="name"><br>
    <input type="submit" name="submit" value="Submit">
    </form>
    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $input=$_REQUEST['name'];
        if(strlen($input)<3){
            echo $input.$input.$input;
        }
        else{
            $f3char=substr($input,0,3);
            $new=$f3char.$input.$f3char;
            echo $new;
        }
    }
    ?>
</body>
</html>