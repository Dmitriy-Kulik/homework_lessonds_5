<?php
/**
 * Created by PhpStorm.
 * User: Pivz
 * Date: 27.09.2017
 * Time: 16:55
 */
include_once "9.php";

switch($day){
    case $day >= 1 && $day <= 5:
        echo "Это рабочий день";
        break;
    case $day >= 5 && $day <= 7:
        echo "Это выходной день";
        break;
    default:
        echo "Неизвестный день";
}