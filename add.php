<?php
$r1=$_POST["R1"];
$r2=$_POST["R2"];
$r3=$_POST["R3"];
$r4=$_POST["R4"];
$r5=$_POST["R5"];
$totalmarks=$r1+$r2+$r3+$r4+$r5;
echo"the total marks is $totalmarks<br>";
$percentage=($totalmarks)*100/500;
echo"the total percentage is $percentage";
if ($percentage<=35){
echo" the student is pass"
}
else{
echo"the students is fail"
}
?>

