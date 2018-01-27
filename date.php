<?php
//echo date('Y/m/d');

//echo date('h'); //HR
//echo date('i'); //multiplyNum
//echo date('s');//seconds
//echo data('a');//AM/PM

date_default_timezone_set('America/New_York');



$timestamp = mktime(10,14,54,2,25,1997);


echo date('Y/d/m',$timestamp);

echo "<br>";
//$strtime = strtotime('tomorrow');'2 months,2days,2 years etc'
$strtime2 = strtotime('+4 Days');


//echo date('m/d/Y',$strtime);

echo date('m/d/Y',$strtime2);




?>
