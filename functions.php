<?php

//Simple function
function simplefunction()
{
  echo "Hello World";
}
//Function with param
function sayHi($var = "Jewish")
{
  echo "Hi $var";
}
sayHi('jew');

//Returning function

function multiplyNum($num, $num2)
{
  return $num * $num2;
}
echo multiplyNum(5,5);



 ?>
