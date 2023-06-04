<?php
$number=$_GET["a"];
$fact=1;
for($i=1;$i<=$number;$i++)
{
$fact=$fact*$i;
}
echo"the factorial of the given no is :",$fact;
?>
