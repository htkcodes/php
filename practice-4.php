<?php
for ($z = 1; $z < 7; $z++) {
  for ($x = 1; $x < 7; $x++) {
     if ($x == 1) {
       echo str_pad($z*$x, 2, " ", STR_PAD_LEFT);
     } else {
       echo str_pad($z*$x, 4, " ", STR_PAD_LEFT);
     }
  }
  echo "\n";
}
?>