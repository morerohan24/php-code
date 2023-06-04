<?php
$a_POST[t1];
$sub=isset($a);
if($sub){
$email=$_POST["email"];
if(pre-match("/^[A-Z a-z 0-9.]+@[a-z A-z 0-9.]+[a-z A-z.]{2,3}$/",$email))
{
echo"Email is valid";
}
else{
echo"Email is invalid";
}
?>