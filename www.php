<?php
function generateOTP(){
$otplength=6;//Number of digits in the OTP
$otp=' ';
for($i=0;$i<$otplength;$i++){
$otp.=random_int(0,9);//add a random digit to the OTP
}
return $otp;
}
//Example Usage:
$otp=generateOTP();
echo"Your OTP is :$otp";
?>