<?php
$name1=array("rohan","om","lokesh","prajesh");
$name2=array("sahil","prajesh","parth","om");
$name3=array_intersect($name1,$name2);
foreach ($name3 as $n)
{
echo "$n<br>";
}
?>