<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$name=$email=$phone=$township=$grade=$subject="";
if($_SERVER['REQUEST_METHOD']=="POST"){
    $name= test_input($_POST["name"]);
    $email= test_input($_POST["email"]);
    $phone= test_input($_POST["phone"]);
    $township= test_input($_POST["township"]);
    $grade= test_input($_POST["grade"]);
    $subject= $_POST["subject"];
}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>
    <h2>Student Registration </h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    Name: <input type="text" name="name"><br><br>
    Email: <input type="text" name="email"><br><br>
    Phone: <input type="phone" name="phone"><br><br>
    Township: <select name="township">
    <option value="Sagaing">Sagaing</option>
    <option value="Mandalay">Mandalay</option>
    <option value="Yangon">Yangon</option>
    </select>
    <br><br>
    Grade: <input type="radio" name="grade" value="Final Year">Final Year
    <input type="radio" name="grade" value="Fifth Year">Fifth Year
    <br><br>
    Subject: <input type="checkbox" name="subject[]" value="JAVA">JAVA
    <input type="checkbox" name="subject[]" value="PHP">PHP
    <input type="checkbox" name="subject[]" value="HTML">HTML
    <br><br>
    <input type="submit" name="submit" value="Submit">
    </form>
<?php
echo "<h3>Your Result:</h3>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $phone;
echo "<br>";
echo $township;
echo "<br>";
echo $grade;
echo "<br>";
if(isset($_POST['submit']))
{
    $subject=$_POST['subject'];
    foreach($subject as $key=>$values)
    {
        echo $values. " ";
    }
}
?>
</body>

</html>