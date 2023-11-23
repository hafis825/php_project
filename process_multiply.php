<?php


    $pre = $_POST['pre'];
    $num = $_POST['num'];
    $m = $_POST['m'];

    while ($pre <= $num) {
        echo $m." x ".$pre." = ".($m * $pre);
        echo "<br>";
        $pre++;
}
    

?>