<?php

$fh=fopen("test.txt",'r') or die("failed to create file");
$text=<<<_END
Line 1
Line 2
Line 3

_END;

fread($fh,5) or die("Could not write to file");
fclose($fh);
echo("File 'text.txt' written to");


?>