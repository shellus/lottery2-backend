<?php
/**
 * Created by PhpStorm.
 * User: shellus
 * Date: 2016-06-07
 * Time: 22:36
 */

function get_now_time(){
    $now = new \Carbon\Carbon();
    $now -> setTimezone('Asia/Shanghai');
    return $now -> format('H:i:s');
}

