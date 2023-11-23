<?php

    $a = 10;
    $b = 20;

    echo $a + $b;
    echo "<br>";
    echo $a - $b;
    echo "<br>";
    echo $a * $b;
    echo "<br>";
    echo $b / $a;
    echo "<br>";
    echo $b % $a;
    echo "<br>";
    echo $b ** 2;
    echo "<br>";



    $x = 5;
    echo $x;
    echo "<br>";

    $x = $x + 5;
    echo $x;
    echo "<br>";

    $x += 5;
    echo $x;
    echo "<br>";  


    $d = 10;
    $h = 20;
    $k = "10"; 

    echo var_dump($d == $h);
    echo "<br>";

    echo var_dump($d === $k);
    echo "<br>";
    
    echo var_dump($d != $h);
    echo "<br>";
    echo var_dump($d <> $h);
    echo "<br>";
    echo var_dump($d < $h);
    echo "<br>";
    echo var_dump($d > $h);
    echo "<br>";
    echo var_dump($d <= $h);
    echo "<br>";
    echo var_dump($d >= $h);
    echo "<br>";
    echo var_dump($d <=> $h);
    echo "<br>";


    // Increment / Dectrment

    $p = 5;
    $p++;
    echo $p; 
    echo "<br>";
    ++$p;
    echo $p; 
    echo "<br>";

    $m = 5;
    $m--;
    echo $m; 
    echo "<br>";
    --$m;
    echo $m; 
    echo "<br>";


    $r = 5;
    $e = 10;
    echo var_dump(($r <= $e) AND ($r == $e));
    echo "<br>";
    echo var_dump(($r <= $e) OR ($r == $e));
    echo "<br>";
    echo var_dump(($r <= $e) && ($r == $e));
    echo "<br>";
    echo var_dump(($r <= $e) || ($r == $e));
    echo "<br>";

    $nn = "Hafis";
    $mm = "Waemusor";

    echo $nn.$mm;
    echo "<br>";
    $nn .= $mm;
    echo $mm;
    echo "<br>";
    echo $nn;
    echo "<br>";


?>