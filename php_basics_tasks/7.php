<?php
/**
 * Created by PhpStorm.
 * User: Pivz
 * Date: 27.09.2017
 * Time: 15:51
 */
include_once "2.php";

if($age >= 18 && $age <=59){
    echo "Вам еще работать и работать";
}
else if($age >= 0 && $age <=17){
    echo "Вам еще рано работать";
}
else{
    echo "Вам пора на пенсию";
}