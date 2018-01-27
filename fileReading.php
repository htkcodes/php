<?php

$fh=fopen("test.txt",'r') or die("failed to create file");

//$line=fgets($fh); // Gets the first line

$line=fread($fh, 3); //Reads first 3 characters


fclose($fh);

echo $line;


?>