<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    Enter a string ....... <br>
    <input type="text" name="name">
    <input type="submit" name="submit" value="Submit">
    </form>
    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $input=$_REQUEST['name'];
        $lindex=strlen($input)-1;
        $fchar=$input[0];
        $lchar=$input[$lindex];
        $new=substr_replace($input,$fchar,$lindex,1);
        $new=substr_replace($new,$lchar,0,1);
        echo $new;

    }
    ?>
</body>
</html>