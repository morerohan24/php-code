<?php
$a=$_POST["A"];
$b=$_POST["B"];
$c=$_POST["C"];
$d=$_POST["D"];
$e=$_POST["E"];
$totalmarks=$a+$b+$c+$d+$e;
echo"the total marks is $totalmarks<br>";
$percentage=($totalmarks)*100/500;
echo"the percentage is $percentage<br>";
if($percentage>="35%")
{
echo"the student is pass";
}
else
{
echo"the student is fail";
}
?>
