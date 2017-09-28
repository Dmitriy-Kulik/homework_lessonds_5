<?php
/**
 * Created by PhpStorm.
 * User: Pivz
 * Date: 27.09.2017
 * Time: 16:54
 */
include_once "9.php";

if($day == 0){
    echo  "Не бывает 0-го дня недели!";
}

else if($day > 7){
    echo "В недели 7 дней! Конечно только если вы не пользуетесь календарем Майя)";
}

else {
    switch ($day) {
        case $day >= 1 && $day <= 5:
            echo "Это рабочий день";
            break;
        default:
            echo "Это выходной день";
    }
}