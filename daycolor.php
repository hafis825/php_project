<?php

    //ให้ใช้ switch
    //กำหนดคำสั่งพื้นหลัง <body style='background-color: green;'>

    $day = date('l');

    switch($day) {
        case "Monday":
            echo "<body style='background-color: yellow;'>";
            break;
        case "Tuesday":
            echo "<body style='background-color: pink;'>";
            break;
        case "Wednesday":
            echo "<body style='background-color: green;'>";
            break;
        case "Thursday":
            echo "<body style='background-color: orange;'>";
            break;
        case "friday":
            echo "<body style='background-color: lightblue;'>";
            break;
        case "Saturday":
            echo "<body style='background-color: blue;'>";
            break;
        case "Sunday":
            echo "<body style='background-color: red;'>";
            break;

        default:
        echo "<body style='background-color: black;'>";
    }

?>