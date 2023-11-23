<?php

    $prefix = $_POST['sex'];

    switch ($prefix) {
        case 'นาย':
            echo "Male";
            break;
        case 'นาง':
            echo "Female";
            break;
        case 'นางสาว':
            echo "Female";
            break;
        case 'ด.ช':
            echo "Male";
            break;
        case 'ด.ญ':
            echo "Female";
            break;
        default:
            echo "กรุณากรอกข้อมูล";
            break;
    }  

    

?>