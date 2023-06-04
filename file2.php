<?php
$status=unlink("C:\wamp64\www\mysos.txt");
if($status){
echo"file delete successful";
}else{
echo"sorry";
}
?>