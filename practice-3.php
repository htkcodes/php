<?php

 
function interest($principal,$rate,$time)
{

    $res = $principal*(1+($rate*$time));

    echo("Principal:$principal");
    echo("<br>");
    echo("Number of years: $time");
    echo("<br>");
    echo("Interest Rate:$rate");
    echo("<br>");
    echo("The value after the term is $res");

}

interest(5000,0.06,5);

?>