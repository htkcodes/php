<?php


function swap($num1,$num2)
{
   

    if($num1 < $num2)
    {
        $temp=$num1;
        $num1=$num2;
        $num2=$temp;
        
        echo "Value of num1: $num1</br>";
        echo "Value of num2: $num2</br>";
    }
    else
    {
        echo "Value of num1: $num1</br>";
        echo "Value of num2: $num2</br>";
    }
    

    
 
    
}
swap(10,5);    
?>