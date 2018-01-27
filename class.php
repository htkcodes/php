<?php


class Math{

 var $radius;
function setRadius()
{
$radius=5;
return $radius;
}

function setArea()
{
  $r=$this->setRadius();
$area=3.14*$r*$r;
echo ($area);
}


}


$lorem=new Math();

$lorem->setArea();



?>