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
 * @property-read mixed $period_number
 */
class OpenTime extends Model
{
    //
    protected $fillable = [
        'open_time'
    ];
    protected $hidden = [
        'id','created_at','updated_at'
    ];
    protected $appends = ['period_number'];

    /**
     * 自动生成期数字段
     * @param string $value
     * @return string
     */
    public function getPeriodNumberAttribute($value)
    {
        $id_pad0 = str_pad($this -> id, 3, '0', STR_PAD_LEFT);

        return $period_no = date('Ymd') . $id_pad0;
    }
    public function getOpenTimeAttribute($value)
    {
        return $period_no = date('Y-m-d ') . $value;
    }
}
