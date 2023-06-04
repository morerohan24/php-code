<?php
$ic=$_POST["t1"];
$in=$_POST["t2"];
$us=$_POST["t3"];
$r=$_POST["t4"];
$code=explode(",",$ic);
$name=explode(",",$in);
$usold=explode(",",$us);
$rate=explode(",",$r);
echo"<table border=1>";
echo"<tr>";
echo"<td> Item Code</td>
<td> Item Name</td>
<td>Unit Sold</td>
<td>Rate</td>
<td>Total</td>";
echo"</tr>";
for($i=0;$i<5;$i++)
{
echo"<tr>";
echo"<td> $code[$i]</td>"; 
echo"<td> $name[$i]</td>";
echo"<td> $usold[$i]</td>“;
echo"<td>$rate[$i]</td>";
$bill[$i]=$usold[$i]*$rate[$i];
echo"<td>$bill[$i]</td>";
}
?>