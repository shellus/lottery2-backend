<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\OpenTime
 *
 * @property integer $id
 * @property string $lottery_id
 * @property string $open_time
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\OpenTime whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\OpenTime whereLotteryId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\OpenTime whereOpenTime($value)
 * @method static \Illuminate\Database\Query\Builder|\App\OpenTime whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\OpenTime whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class OpenTime extends Model
{
    //
    protected $fillable = [
        'open_time'
    ];
}
