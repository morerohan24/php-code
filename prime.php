<php
$a=6;

$count=0;
for($i=1;$i<=$a;$i++)
if($a%$i==0)
$count++;
if($count==2)
echo"the number is prime";
else
echo"the number is not prime";
?>