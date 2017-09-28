<?php
/**
 * Created by PhpStorm.
 * User: Pivz
 * Date: 27.09.2017
 * Time: 16:58
 */
$a = 27;
$b = 0;
$operator = "/"; // ‘+’ или ‘-’ или ‘/’ или ‘*’ или '%'

        if($b == 0 && ($operator == "/" || $operator == "%")){
            if($operator == "/"){
                if(!is_numeric($a) || !is_numeric($b)){
                    // у функции is_numeric(var) есть один минус, если задать переменной строку, но первйй знак будет числом - она пропустит (вернет true). Но калькулятор сработает и пощитает.
                    echo  "Вы ввели в переменные не числа, а буквы или знаки. Введите число!";
                }
                else{
                    echo "Делить на 0 нельзя!";
                }
            }
            else if($operator == "%"){
                echo "Делить по модулю на 0 нельзя!";
            }
        }
        else if($operator == "+" || $operator == "-" || $operator == "*" || $operator == "/" || $operator == "%"){
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
            }
        }
        else{
            echo  "Неизвестный оператор";
        }

