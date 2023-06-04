<?php
$num=array(78,60,62,68,71,68,73,85,66,64,76,63,75,76,73,68,62,73,72,65,74,62,62,65,64,68,73,75,79,73);
$mul=array();
$n=count($num);
$sum=0;
echo "Number of elements in array is : ". $n."<br>";
for($i=0;$i<$n;$i++)
{
$mul[$i]=$num[$i]*5;
echo " 5 X $num[$i] = $mul[$i] <br> ";
}
?>
