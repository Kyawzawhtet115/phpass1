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
    <input type="submit" value="Submit" name="submit">
    </form>
    <?php
    echo "Result is .......";
    if(isset($_POST['submit'])){
        $str=$_POST['str'];
        $arr=str_split($str);
        $b=end($arr);
        $b=$b.$str.$b;
        echo $b;
    }
?>
</body>
</html>