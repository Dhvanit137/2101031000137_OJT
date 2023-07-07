<?php
echo "While loop"."\n";
$x = 1;

while($x <= 5) {
  echo "The number is: $x \n";
  $x++;
} 


echo "\n"."Do while loop"."\n";
$x = 1;

do {
  echo "The number is: $x \n";
  $x++;
} while ($x <= 5);

echo "\n"."For loop"."\n";
for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x \n";
  }
echo "\n";
?>