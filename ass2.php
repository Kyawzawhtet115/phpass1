<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <label for="str">Any String</label>
    <input type="text" name="str">
    <label for="num">Position Number</label>
    <input type="text" name="num">
    <input type="submit" value="Remove" name="remove">
    </form>
    <?php
    echo "Result is .......";
    if(isset($_POST['remove'])){
        $str=$_POST['str'];
        $arr=str_split($str);
        $num=$_POST['num'];
        echo substr_replace($str,'',$num,1);
    }
?>
</body>
</html>