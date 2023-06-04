<?php
$num1=$_POST["t1"];
$num2=$_POST["t2"];
function add($a,$c){
$sum=$a+$c;
$sum1=$a-$c;
$sum2=$a*$c;
$sum3=$a/$c;
echo"the additon of two number is :$sum","<br>";
echo"the subtraction of two number is :$sum1","<br>";
echo"the multiplication of two number is :$sum2","<br>";
echo"the division of two number is :$sum3";
}
add($num1,$num2);
?>