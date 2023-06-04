<?php
$a=$_POST["t1"];
$b=$_POST["t2"];
$c=$_POST["t3"];
$d=$_POST["t4"];
$e=$_POST["t5"];
$f=$_POST["t6"];
echo"length is:-",$a,"<br>";
echo"Breath is:-",$b,"<br>";
echo"height is:-",$c,"<br>";
echo"base is:-",$d,"<br>";
echo"radius is:-",$e,"<br>";
echo"size is:-",$f,"<br>";
echo"the area of rectangle is :-",$a*$b,"<br>";
echo"the area of square is :-",$f*$f,"<br>";
echo"the area of triangle is :-",0.5*$d*$c,"<br>";
echo"the area of circle is :-",3.14*$e*$e,"<br>";
echo"the area of cylinder is :-",2*3.14*$e*$c+3.14+$e*$e,"<br>";