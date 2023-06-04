<?php
$fptr=fopen("harry1.text",'r');
//echo $fptr;
$content=fread($fptr,filesize("harry1.text"));
echo $content;
?>