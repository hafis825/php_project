<?php 

    echo pi();
    echo "<br>";
    echo 22/7;
    echo "<br>";
    echo pi()*4*4;
    echo "<br>";


    $r = 4;
    $area = pi() * $r * $r;

    echo $area;
    echo "<br>";

    $num = [1,2,4123,231,2346,12335,578,54345,34578,23,21,56,43];

    echo min($num);
    echo "<br>";
    echo max($num);
    echo "<br>";
    echo abs(-99.99);
    echo "<br>";
    echo sqrt(144);
    echo "<br>";                                                    
    echo round(3.79);
    echo "<br>";
    echo (rand(1, 9));








?>