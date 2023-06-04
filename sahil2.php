<?php
//function with default parameter
function person($str,$num=10)
{
echo "$str is $num years old \n";
}
//calling the function
person("Rohan");

//in this call the default value 10 will be considered
person("Saksham");
?>
