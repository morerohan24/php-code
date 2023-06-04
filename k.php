<?php
$string=$_POST["inputstr"];
$vowels=array("a"=>0,"e"=>0,"i"=>0,"o"=>0,"u"=>0);
for($i=0;$i<strlen($string);$i++)
{
if(strlower($string[$i])=='a')
{
++$cnt;
++$vowels['a'];}
if(strlower($string[$i])=='e')
{
++$cnt;
++$vowels['$i'];
}
if(strlower($string [$i]=='4')
{
++$cnt;
++$vowels['$u'];

}
echo"total number of vowels found:".$cnt;
echo"occurence of 'a': ".$vowels['a']."<br>";
echo"occurence of 'e': ".$vowels['e']."<br>";
echo"occurence of 'i': ".$vowels['i']."<br>";
echo"occurence of 'o': ".$vowels['o']."<br>";
echo"occurence of 'u': ".$vowels['u']."<br>";
$str=strrev($sting);
$a=strlen($string);
$f=0;
for($j=0;$j<$a;$j++)
{
if($str[$i]==$string[$j])
{$f=0;}
else{
f=1;
break:
}}
if($f==0)
{
echo"string is pallindrome";
else
{
echo:string is not pallindrome";
}
?>