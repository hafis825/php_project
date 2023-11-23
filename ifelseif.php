<?php


$num = 2;

if($num % 2 == 0) {
    echo "เลขคู่";
}else {
    echo "เลขคี่";
}


echo "<br>";


$led = "red";

if($led == "green"){
    echo "ไปได้";
}elseif($led == "yellow") {
    echo "ชะลอ";
}else {
    echo "หยุด";
}



echo "<br>";


$prefix = "นาง";

if($prefix == "นาง"){
    echo "ผู้หญิง";
}elseif($prefix == "นางสาว") {
    echo "ผู้หญิง";
}elseif($prefix == "ด.ช.") {
    echo "ผู้ชาย";
}elseif($prefix == "ด.ญ.") {
    echo "ผู้หญิง";
}else {
    echo "ผู้ชาย";
}

echo "<br>";

switch ($prefix) {
    case 'นาง':
        echo "FeMale";
        break;
    case 'นางสาว':
        echo "FeMale";
        break;
    case 'ด.ช':
        echo "Male";
        break;
    case 'ด.ญ.':
        echo "FeMale";
        break;
    default:
        echo "Mele";
        break;
}  


?>