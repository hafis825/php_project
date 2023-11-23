<?php

$num1 = 1;

while ($num1 <= 5) {
    echo $num1."<br>";
    $num1++;
}

echo "<hr>";

$num2 = 10;

while ($num2 >= 1) {
    echo $num2."<br>";
    $num2--;
}

echo "<hr>";

$num3 = 10;
$numplus = 5;

while ($num3 <= 100) {
    echo $num3."<br>";
    $num3 += $numplus;
}

echo "<hr>";

$num4 = 100;
$numde = 10;

while ($num4 >= 10) {
    echo $num4."<br>";
    $num4 -= $numde;
}

echo "<hr>";



$num5 = 1;
$nummu = 99;

while ($num5 <= 12) {
    echo $nummu." x ".$num5." = ".($nummu * $num5);
    echo "<br>";
    $num5++;
}

echo "<hr>";
?>

<?php
  $i = 2;
  while( $i<=12 ) {
    echo "แม่สูตรคูณ {$i}<br/>";
    $j = 2;
    while( $j<=12 ) {
      echo "{$j} x {$i} = ".($j*$i)."<br/>";
      $j++;
    }
    echo "<hr>";
    $i++;
  }
?>