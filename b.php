<?php
//$email="someone@example.com";

$email=$_POST['b1'];
//if(eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$",$email))
if(eregi("^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+.([a-zA-Z]{2,4})$",$email))
{
echo"valid email address.";
}
else
{
echo"invalid email address.";
}

?>