<?php
/*
echo 与 print 的区别
echo - 可以输出一个或多个字符串
print - 只允许输出一个字符串，返回值总为 1
echo的输出速度比print块，因为没有返回值
*/

//php7中数据类型string、integer、float、Boolean、array、object、null;

echo "<h2>PHP is fun!</h2>";
echo "Hello world!<br>";
echo "I'm about to learn PHP!<br>";
echo "This", " string", " was", " made", " with multiple parameters.";

$txt1="Learn PHP";
$txt2="www.php.cn";
$cars=array("Volvo","BMW","Toyota");

echo $txt1;
echo "<br>";
echo "Study PHP at $txt2";
echo "<br>";
echo "My car is a {$cars[0]}";


$txt1="Learn PHP";
$txt2="www.php.cn";
$cars=array("Volvo","BMW","Toyota");

print $txt1;
print "<br>";
print "Study PHP at $txt2";
print "<br>";
print "My car is a {$cars[0]}";