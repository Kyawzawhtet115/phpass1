<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action ="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <label for="str">Enter a string</label><br>
    <input type="text" name="name">
    <input type="submit" name="submit" value="Submit">
    </form>
    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $input=$_REQUEST['name'];
        $char=strtoupper($input[0]);
        $new=substr_replace($input,$char,0,1);
        echo $new;

    }
    ?>
</body>
</html>