<?php

#Creating Function #1
function firstFunction()
{
    echo "First Function";
    echo "<br>";
    echo "Something Nice";
    echo "<br>";
}
#Calling Function #1
firstFunction();

#Creating Function #2
function secondFunction($name, $DOB)
{
    echo $name;
    echo "<br>";
    echo $DOB;
    echo "<br>";
}
#Calling Function with Parameters
secondFunction(Omer, 1995);
$name = "ALI";
$DOB = 2002;
#Calling Functon without Parameters
secondFunction($name, $DOB);
#Calling Function with Parameters
secondFunction(Areeb, 2004);

#Creating Function #3 with Default Value
function thirdFunction($name, $DOB = 1990)
{
    echo $name;
    echo "<br>";
    echo $DOB;
    echo "<br>";
}
#Calling Function without Parameters
thirdFunction(Junaid);

#Creating Function #4 that Returns value
function forthFunction()
{
    return "Thanos";
}
#Getting Value from Function  
$name = forthFunction();
#Calling third Funtion with forth Function value 
thirdFunction($name);

#Creating Function #5
function fifthFunction()
{
    global $name;
    $name = "YoYo";
    echo "<br>";
}
#Check name
echo $name;
#Calling Function to set Name to global
fifthFunction();
echo $name;

?>