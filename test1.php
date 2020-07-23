<!DOCTYPE html>
<html>
<body>

<?php
echo "Hello World<br>";
$num1=200;
$num2=300;
$result=$num1+$num2;
echo "The Result is"." " .$result.".";
echo "<br>";
$txt="Hello My PHP";
$x=10;
$y=2.5;
$a=150;
$b=250;
echo $txt;
echo "<br>";
echo $x;
echo "<br>";
echo $y;
echo "<br>";
$zz="W3School.com";
echo "Hello".$zz."!";
$num=500;
function test(){
    $num=500;
 echo "<p> Apple is: $num</p>";
}
test();
echo "<p> Apple is: $num</p>";
function fun(){
    global $a,$b;
    $b=$a+$b;
}
fun();
echo $b;
echo "<br>";
function aa(){
    $GLOBALS['y']=$GLOBALS['x']+$GLOBALS['y'];
}
aa();
echo $y;
echo "<br>";
function bb(){
    static $d=0;
    echo $d;
    $d++;
}
bb();
echo "<br>";
bb();
echo "<br>";
bb();
echo"<br>";
echo"My name ","is ","Kyaw Zaw Htet.";
$txt1="Learn PHP";
echo "<h2>" . $txt1 ."</h2>";
//print "<br>";
print "<h3>".$txt."</h3>";
print "Study " . "$zz." ;
echo "<br>";
var_dump($num);
echo "<br>";
var_dump($y);
print "<br>";
var_dump($txt1);
echo "<br>";
$e=null;
var_dump($e);
echo "<br>";
echo strlen("Hello Acer");
echo "<br>";
print str_word_count("Ko Kyaw Gyi");
echo "<br>";
print strrev("Kyaw Zaw Htet");
echo "<br>";
echo strpos("What is your name?","name");
echo "<br>";
print str_replace("Acer","PHP","Hello Acer");
echo "<br>";
$f = 5985;
var_dump(is_int($f));
echo "<br>"; 
$f = 59.85;
var_dump(is_int($f));
print "<br>";
$g = 10.365;
var_dump(is_float($g));
echo "<br>"; 
$h = 1.9e411;
var_dump($h);
echo "<br>";
$i = "5985";
var_dump(is_numeric($i));
echo "<br>";
$j = "59.85" + 100;
var_dump(is_numeric($j));
echo "<br>";
$k = "Hello";
var_dump(is_numeric($k));
print "<br>";
$l = 4321.567;
$int_cast = (int)$l;
echo $int_cast;
echo "<br>";
echo (pi());
echo "<br>";
echo(min(0,12,-35,42,31)."<br>");
echo(max(0,12,35,42,31));
print "<br>";
echo(abs(-24));
print "<br>";
echo(sqrt(4) . "<br>");
echo(sqrt(9) . "<br>");
echo(sqrt(16) . "<br>");
echo(sqrt(36));
echo "<br>";
echo (round(0.51)."<br>");
echo (round(0.31)."<br>");
echo (round(-0.99)."<br>");
echo (rand()."<br>");
echo (rand(15,200));
echo "<br>";
define("GREET", "Welcome to W3Schools.com!", true);
echo greet;
print "<br>";
define("cars",[
    "Toyota",
    "BMW",
    "CROWN"
]);
echo cars[1];
print "<br>";
define ("GRATE","Hello My World");
function cc(){
    echo GRATE;
}
cc();
echo "<br>";
$c=20;
$d=50;
$c+=100;
echo $c;
echo "<br>";
var_dump($c!==$d);
print"<br>";
echo ($c<=>$d);
print"<br>";
$c=50;
$d=50;
echo ($c<=>$d);
print"<br>";
$c=50;
$d=20;
echo ($c<=>$d);
print"<br>";
$car=array("Handa","BMW","Swift");
$arrlenght=count($car);
for($j=0;$j<$arrlenght;$j++){
    echo $car[$j];
    echo "<br>";
}
print"<br>";
$age=array("Peter"=>43,"Kyaw"=>21);
foreach($age as $k=>$k_value){
    echo ""
}
print"<br>";
?> 
</body>
</html>
