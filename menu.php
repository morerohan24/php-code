<?php
$n1=$_GET["t1"];
$n2=$_GET["t2"];
$r=$_GET["r1"];
if($r=="add")
{
$add=$n1+$n2;
echo" addition is $add";
}
elseif($r=="sub")
{
$sub=$n1-$n2;
echo" subraction is $sub";
}
elseif($r=="mul")
{
$mul=$n1*$n2;
echo" multiplication is $mul";
}
else
{
$Div=$n1/$n2;
echo" division is $Div";
}
?>