<?php
/**
 * Created by PhpStorm.
 * User: Pivz
 * Date: 27.09.2017
 * Time: 16:58
 */
$a = 27;
$b = 11;
$operator = "/"; // ‘+’ или ‘-’ или ‘/’ или ‘*’ или '%'

if(!$b == 0){
    echo $a . " " . $operator . " " . $b . " = ";

    switch ($operator){
        case "+":
            echo $a + $b;
            break;
        case  "-":
            echo $a - $b;
            break;
        case  "*":
            echo $a * $b;
            break;
        case  "/":
            echo $a / $b;
            break;
        case  "%":
            echo $a % $b;
            break;
        default:
            echo  "Неизвестный оператор";
    }
}
else{echo "Делить на 0 нельзя!";}

