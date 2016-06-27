<?php
use Carbon\Carbon;

function diffForHumans(Carbon $carbon,Carbon $other = null, $absolute = false)
{
    $isNow = $other === null;

    if ($isNow) {
        $other = Carbon::now($carbon->tz);
    }

    $diffInterval = $carbon->diff($other);

    switch (true) {
        case ($diffInterval->y > 0):
            $unit = 'year';
            $count = $diffInterval->y;
            break;

        case ($diffInterval->m > 0):
            $unit = 'month';
            $count = $diffInterval->m;
            break;

        case ($diffInterval->d > 0):
            $unit = 'day';
            $count = $diffInterval->d;
            if ($count >= Carbon::DAYS_PER_WEEK) {
                $unit = 'week';
                $count = (int) ($count / Carbon::DAYS_PER_WEEK);
            }
            break;

        case ($diffInterval->h > 0):
            $unit = 'hour';
            $count = $diffInterval->h;
            break;

        case ($diffInterval->i > 0):
            $unit = 'minute';
            $count = $diffInterval->i;
            break;

        default:
            $count = $diffInterval->s;
            $unit = 'second';
            break;
    }

    if ($count === 0) {
        $count = 1;
    }


    $time = $carbon -> getTranslator() -> transChoice($unit, $count, array(':count' => $count));


    return $time;
}

function get_now_time(){
    $now = new \Carbon\Carbon();
    $now -> setTimezone('Asia/Shanghai');
    return $now -> format('H:i:s');
}
