<?php
/**
 * Created by PhpStorm.
 * User: Pivz
 * Date: 27.09.2017
 * Time: 16:57
 */
$s = 423.26;
$t = 2.57;
echo round($s / $t, 2) . " км/час<br>";
echo round(($s * 1000) / ($t * 3600), 2) . " м/сек";