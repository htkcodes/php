<?php


function factorial($num)
{
    if($num ==0)
    {
        echo("Negative Number entered");
    }
    else
    {
        $factorial = 1;
        for ($x=$num; $x>=1; $x--) 
        {
          $factorial = $factorial * $x;
        }
        echo "Factorial of $num is $factorial";
    }
    
  
}

factorial(5);


?>