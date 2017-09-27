<?php
/**
 * Created by PhpStorm.
 * User: Pivz
 * Date: 27.09.2017
 * Time: 17:44
 */
$a = 20;
var_dump($a);

echo "<br>";

echo (bool)$a;
var_dump((bool) $a);
echo "<br>" . "--------------------------------------" . "<br>";

$b ="";
$c ="0";
$arr = array();
$n = NULL;
var_dump((bool) $b);
var_dump((bool) $c);
var_dump((bool) $arr);
var_dump((bool) $n);


//При преобразовании чисел (integer, float) к булевому значению все числа кроме 0 являются true (тоесть приводятся к 1).
//Пустая строка (или со значением 0) или массив без элементов приводятся как false (тоесть к значению 0).
