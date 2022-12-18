<?php
# string
$message = "hello world";
# Integer
$regInt = 1234;
$octNum = 0123;
$hexNum = 0xABCD;
$binaryNum = 0b1100;
#float
$float = 1.234;
$scientific = 123E4;
$scientific = 123E-5;
#boolean
$bool = true;
#constant defining
define ('NEW_CONSTANT', "Hello New Constant!");

#to check value 
echo is_int($regInt);
echo "<br>"; #to enter line space
echo is_float($float);
echo "<br>"; #to enter line space
#To check Constant 
echo defined('NEW_CONSTANT');
echo "<br>"; #to enter line space


#output
var_dump($binaryNum);
echo "<br>"; #to enter line space
var_dump($hexNum);
echo "<br>"; #to enter line space
var_dump($octNum);
echo "<br>"; #to enter line space
var_dump($regInt);
echo "<br>"; #to enter line space

var_dump($float);
echo "<br>"; #to enter line space
var_dump($scientific);
echo "<br>"; #to enter line space

var_dump($bool);
echo "<br>"; #to enter line space

echo $message;
echo "<br>"; #to enter line space
#Printing Constant 
echo NEW_CONSTANT;
echo "<br>"; #to enter line space

?>
