<?php  

    $name = "Hafis";
    $grade = "3.99";
    $score = "95";
    $fullname = "Abdulhafis";
    $word = "I Love You";
    $search = "I am study at In formation Technology department";

    $sql = "SELECT * FROM std WHERE user = '$name'"; 

    // Counting String
    echo strlen($fullname). "<br>";
    echo str_word_count($word). "<br>";
    echo strrev($word). "<br>";
    echo strpos($search, "study"). "<br>";
    echo str_replace("Love", "Luk", $word). "<br>";
    echo strtoupper($word). "<br>";
    echo strtolower($word). "<br>";


?>          