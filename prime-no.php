<?php
$a=$_POST["a"];
$count=0;
for($i=1;$i<=$a;$i++)
{
if($a%$i==0)
$count++;
}
if($count==2)
echo"the given number is prime:,"$a,"<br>";
else
echo"the given number is not prime:,"$a,"<br>";
?>
